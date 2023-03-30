<?php
$current_page = $_SERVER['REQUEST_URI'];
?>

<nav>

    <div class="nav_header">
        <div class="nav_logo">
            <a href="/">
                <img src="/src/img/logo.svg" alt="Yaël COËFFIER's logo">
            </a>
        </div>

        <div class="hamburger_menu js-hamburger">
            <span class="material-symbols-rounded" style="font-size: 32px; display: flex;">menu</span>
        </div>
    </div>

    <!-- Si on est pas sur la page d'accueil, on affiche l'item Accueil -->
    <div class="nav_indicator">
        <?php if ($current_page === '/') : ?>
            <div class="nav_indicator__item">
                <p>Projects</p>
            </div>
            <div class="nav_indicator__item">
                <p>Skills</p>
            </div>
            <div class="nav_indicator__item">
                <p>Career</p>
            </div>
            <div class="nav_indicator__item">
                <p>Contact</p>
            </div>
            <div class="nav_indicator__item button-nav_indicator">
                <button><span class="material-symbols-rounded" id="change-theme">temp_preferences_custom</span></button>
            </div>
        <?php else : ?>
            <div class="nav_indicator__item">
                <p><a href="/">Accueil</a></p>
            </div>
            <div class="nav_indicator__item button-nav_indicator">
                <button><span class="material-symbols-rounded" id="change-theme">temp_preferences_custom</span></button>
            </div>
        <?php endif; ?>
    </div>

</nav>


<script>
    const hamburger = document.querySelector('.js-hamburger');
    const nav_indicator = document.querySelector('.nav_indicator');

    menu();
    // Si on resize la fenêtre, on vérifie si on est en mobile ou en desktop
    window.addEventListener('resize', function() {
        menu();
    });

    function menu() {

        // Si on est en mobile, on affiche le menu hamburger et on cache le nav_indicator
        if (window.innerWidth < 800) {
            hamburger.classList.remove('hide');
            nav_indicator.classList.remove('away');
        }

        // Si on est en desktop, on affiche le nav_indicator et on cache le menu hamburger
        if (window.innerWidth > 800) {
            hamburger.classList.add('hide');
            nav_indicator.classList.add('away');
        }
    }

    function toggleMenu() {
        hamburger.classList.toggle('hamburger_menu--open');
        nav_indicator.classList.toggle('away');
    }

    hamburger.addEventListener('click', () => {
        // hamburger.classList.toggle('hamburger_menu--open');
        // nav_indicator.classList.toggle('away');
        toggleMenu();

    });


    const change_theme = document.querySelector('.button-nav_indicator');
    const root = document.documentElement;

    // Au chargement de la page, appliquer le thème par défaut à moins que dans le localStorage il y ait un thème enregistré
    let theme = localStorage.getItem('theme');
    if (theme === 'theme1') {
        root.classList.add('theme1');
    } else if (theme === 'theme2') {
        root.classList.add('theme2');
    } else {
        root.classList.add('theme1');
    }

    change_theme.onclick = function() {
        if (root.classList.contains('theme1')) {
            // Si le thème actuel est le theme1, changer en theme2
            root.classList.remove('theme1');
            root.classList.add('theme2');

            // Enregistrer le thème dans le localStorage
            localStorage.setItem('theme', 'theme2');
        } else {
            // Sinon, le thème actuel est theme2, changer en theme1
            root.classList.remove('theme2');
            root.classList.add('theme1');

            // Enregistrer le thème dans le localStorage
            localStorage.setItem('theme', 'theme1');
        }
    };
</script>