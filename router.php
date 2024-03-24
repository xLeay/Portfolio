<?php

// global vars
$basepath = ""; // ex: "/app"
$request = $_SERVER['REQUEST_URI'];
$request = explode('?', $request)[0];
$request = str_replace($basepath, '', $request);

define('ROOT', __DIR__);

// load all files in functions folder
$functions = glob(dirname(__FILE__) . '/includes/functions/*.php');

foreach ($functions as $function) {
    require_once $function;
}

// generate canonical link of the requested page

const CANONICAL_QUERY_STRINGS = ['seed'];

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $request;
$queryStrings = explode('&', $_SERVER['QUERY_STRING']);
$canonicalQueryStrings = [];

foreach ($queryStrings as $key => $queryString) {
    $queryString = explode('=', $queryString);
    if (in_array($queryString[0], CANONICAL_QUERY_STRINGS)) {
        $canonicalQueryStrings[] = $queryString[0] . '=' . $queryString[1];
    }
}

$canonical = $url . "?hl=fr" . (sizeof($canonicalQueryStrings) > 0 ? "&" . implode('&', $canonicalQueryStrings) : '');

function loadAsset($page, $type)
{
    global $basepath;
    if ($type == 'css' && file_exists("src/styles/pages/" . $page . ".css")) {
        return "<link rel=\"stylesheet\" href=\"$basepath/src/styles/pages/" . $page . ".css?v=" . md5_file("src/styles/pages/" . $page . ".css") . "\">";
    }
    if ($type == 'js' && file_exists("src/scripts/pages/" . $page . ".js")) {
        return "<script src=\"$basepath/src/scripts/pages/" . $page . ".js?v=" . md5_file("src/scripts/pages/" . $page . ".js") . "\" defer></script>";
    }
    return "";
}

function loadPage($page, $with_head = true)
{

    global $basepath, $og, $canonical;
    $path =  "pages" . DIRECTORY_SEPARATOR . $page . ".php";
    $headPath = "pages" . DIRECTORY_SEPARATOR . $page . ".head.php";

    if (file_exists($path)) {
        if ($with_head) {
            $appendHead = loadAsset($page, 'css');
            $externalHeadFile = file_exists($headPath) ? $headPath : false;
            include "includes/head.php";
            require "includes/components/nav.php";
        }
        include($path);
        if ($with_head) {
            $appendBody = loadAsset($page, 'js');
            include "includes/endbody.php";
        }
    }
}

switch ($request) {
    case "/": // acceuil du site
        $og = (object) [
            "title" => "Yaël COËFFIER - Portfolio",
            "description" => "Yaël COËFFIER - Portfolio"
        ];
        loadPage("index");
        break;

    case "/mont-saint-michel":
        $og = (object) [
            "title" => "Projet - Mont-Saint-Michel",
            "description" => "Projet - Mont-Saint-Michel"
        ];
        loadPage("mont-saint-michel");
        break;

    case "/vill-innov":
        $og = (object) [
            "title" => "Projet - Vill'innov",
            "description" => "Projet - Vill'innov"
        ];
        loadPage("vill-innov");
        break;

    case "/champions-mastery":
        $og = (object) [
            "title" => "Projet - Lol Champions Mastery",
            "description" => "Projet - Lol Champions Mastery"
        ];
        loadPage("champions-mastery");
        break;

    case "/calls":
        $og = (object) [
            "title" => "Projet - Calls tribute",
            "description" => "Projet - Calls tribute"
        ];
        loadPage("calls");
        break;

    case "/thesesviz":
        $og = (object) [
            "title" => "Projet - ThesesViz",
            "description" => "Projet - ThesesViz"
        ];
        loadPage("theses");
        break;

    case "/loop-hero":
        $og = (object) [
            "title" => "Projet - Loop Hero",
            "description" => "Projet - Loop Hero"
        ];
        loadPage("loop-hero");
        break;

    case "/boggle":
        $og = (object) [
            "title" => "Projet - Boggle",
            "description" => "Projet - Boggle"
        ];
        loadPage("boggle");
        break;

    case "/azul":
        $og = (object) [
            "title" => "Projet - Azul Clone",
            "description" => "Projet - Azul Clone"
        ];
        loadPage("azul");
        break;

    case "/404":
        $og = (object) [
            "title" => "",
            "description" => ""
        ];
        loadPage("404");
        break;
    default:
        http_response_code(404);
        loadPage("404");
        return false;
}
