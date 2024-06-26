<header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo" style="font-family:'Bauhaus 93', sans-serif; font-size:x-large;  letter-spacing: 0px;">BOOP ADVENTURE</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <?php
                session_start();
                if (basename($_SERVER['PHP_SELF']) !== 'Accueil.php') {
                    echo '<li class="nav__item"> <a href="../Accueil/Accueil.php" class="nav__link">Accueil</a> </li>';
                }

                if (basename($_SERVER['PHP_SELF']) !== 'A_Propos.php') {
                    echo '<li class="nav__item"> <a href="../A props/A_Propos.php" class="nav__link">A propos</a> </li>';
                }

                if (basename($_SERVER['PHP_SELF']) !== 'Unreal.php') {
                    echo '<li class="nav__item"><a href="../Unreal Engine/Unreal.php" class="nav__link">Unreal</a></li>';
                }

                if (basename($_SERVER['PHP_SELF']) !== 'Le Jeu.php') {
                    echo '<li class="nav__item"><a href="../Le Jeu/Le Jeu.php" class="nav__link">Le Jeu</a></li>';
                }

                if (basename($_SERVER['PHP_SELF']) !== 'Boutique.php') {
                    echo '<li class="nav__item"><a href="../Boutique/Boutique.php" class="nav__link">Boutique</a></li>';
                }
                ?>
            </ul>

            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>
        </div>

        <div class="nav__actions">
            <?php
            
            if (basename($_SERVER['PHP_SELF']) == 'Boutique.php') {
                echo '<i class="ri-shopping-cart-line nav__search" id="search-btn">
                <div class="bulleCart" id="bulleCart"></div>
            </i>';
            } else {
                echo '<i class="ri-planet-line nav__search" id="search-btn">
                <div class="bulleCart" id="bulleCart"><ul>
                <a href="#">
                    <li>Français</li>
                </a>
                <a href="../Fonctions/Deconnexion.php">
                    <li>Anglais</li>
                </a>
            </ul></div>
            </i>';

            }
            ?>
            <i class="ri-user-line nav__login" id="login-btn">
                <div class="bulle" id="bulle">
                    <ul>
                        <a href="#">
                            <li>Compte</li>
                        </a>
                        <a href="../Fonctions/Deconnexion.php">
                            <li>Déconnexion</li>
                        </a>
                    </ul>
                </div>
            </i>
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </div>
    </nav>
</header>