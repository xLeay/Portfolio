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
        <?php else : ?>
            <div class="nav_indicator__item">
                <p><a href="/">Accueil</a></p>
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
        console.log('click');
    }

    hamburger.addEventListener('click', () => {
        // hamburger.classList.toggle('hamburger_menu--open');
        // nav_indicator.classList.toggle('away');
        toggleMenu();

    });
</script>