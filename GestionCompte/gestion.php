<?php
    require('../Fonctions/Fonctions.php');

    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=boop_adventure;charset=utf8;', 'root', 'root');

    if (isset($_SESSION['mail'])) {
        $user_email = $_SESSION['mail'];
    }
    else {
        $_SESSION['erreur_connexion'] = "Aucun compte enregistré";
        $conn = NULL;
        header('location: ../Unreal Engine/Unreal.php');
    }

    // Requête pour récupérer les informations du profil de l'utilisateur
    $reqSQL = "SELECT * FROM client WHERE Mail = ?";
    $rep = $conn->prepare($reqSQL);
    $rep->execute(array($user_email));

    $result = $rep->fetchAll(PDO::FETCH_ASSOC); // Récupération du tableau d'information

    //Récupération des données de l'utilisateur dans des variables php
    $pseudo = $result[0]['Pseudo'];
    $motdepasse = $result[0]['MotDePasse'];
    $mail = $result[0]['Mail'];

?>

<!DOCTYPE html>

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>gestion</title>
        <link rel="stylesheet" href="gestion.css">
        <link rel="stylesheet" href="../Navigation_Footer/Navigation.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    
    </head>
    
    <body>
        <?php
            include '../Navigation_Footer/Navigation.php';
        ?>

        <div class="search" id="search">
            <form action="" class="search__form">
                <i class="ri-shopping-cart search__icon"></i>
                <input type="search" placeholder="What are you looking for?" class="search__input">
            </form>

            <i class="ri-close-line search__close" id="search-close"></i>
        </div>

        <!--==================== LOGIN ====================-->
        <div class="login" id="login">
        <form class="login__form" method="post">
            <h2 class="login__title">Connexion</h2>

            <div class="login__group">
            <div>
                <label for="email" class="login__label">Email</label>
                <input type="email" placeholder="Ecris ton mail" id="email" class="login__input" name="Mail">
            </div>

            <div>
                <label for="password" class="login__label">Mot de passe</label>
                <input type="password" placeholder="Entre ton mot de passe" id="password" class="login__input" name="Password">
            </div>
            </div>

            <div>
            <p class="login__signup">
                Tu n'as pas de compte ? <a href="#">Incris-toi !</a>
            </p>

            <a href="#" class="login__forgot">
                J'ai paumé mon mot de passe...
            </a>

            <button type="submit" class="login__button" name="Envoyer">Connexion</button>
            </div>
        </form>

        <i class="ri-close-line login__close" id="login-close"></i>
        <script src="../Navigation_Footer/Navigation.js"></script>
        </div>

        <?php
        Connexion();
        IssetConnexion();
        ?>

        <script type="text/javascript">
        var count = <?php echo json_encode($counter); ?>;

        document.addEventListener("DOMContentLoaded", function() {
            var timer;
            var bulle = document.getElementById("bulle");
            var loginBtn = document.getElementById("login-btn");

            function showMenu() {
            clearTimeout(timer);
            bulle.classList.add("active");
            }

            function hideMenu() {
            timer = setTimeout(function() {
                bulle.classList.remove("active");
            }, 100); // Délai de 1 seconde (1000 millisecondes)
            }

            loginBtn.addEventListener('mouseenter', function() {
            if (count != null) {
                showMenu();
            }
            });

            loginBtn.addEventListener('mouseleave', function() {
            hideMenu();
            });

            bulle.addEventListener('mouseenter', function() {
            showMenu();
            });

            loginBtn.addEventListener('click', function() {

            if (count == null) {
                login.classList.add('show-login');
            }
            });
        });
        </script>

        <div class="conteneur">
            <video autoplay loop muted plays-inline class="video">
                <source src="Video/LostJungle.mp4" type="video/mp4">
            </video>
            
            <form method='post' action='gestion.php'>
                <fieldset>
                    <legend>Profil Choise </legend>
                    <select name='choix' required>
                        <option value='display'>Display</option>
                        <option value='improve'>Improve</option>
                    </select>
                    <br><br>
                    <input type='submit' value='valider' id='choise' name='choise'>
                </fieldset>
            </form>

            <?php
                //Si l'utilisateur a envoyé son choix :
                if (isset($_POST['choise'])) {
                    //Si l'utilisateur veut afficher son profil :
                    if ($_POST['choix'] == 'display') {
                        echo'
                        <h2>Your profil :</h2>
                        <form method="post" action="account_connexion.php">
                        <section>
                            <table>
                                <tr><td>Pseudo</td><td>' . $pseudo . '</td></tr>
                                <tr><td>Mail</td><td>' . $mail . '</td></tr>
                                <tr><td>Password</td><td>' . $motdepasse . '</td></tr>
                            </table>
                        </section>
                    </form>';
                    }
                    if ($_POST['choix'] == 'improve') {
                        echo'
                        <section>
                            <form name = "fo" methode = "post">
                                <input type="text" name="pseudo" placeholder="Pseudo" value=" ' . $pseudo . ' " required/>
                                <input type="text" name="mail" placeholder="Email" value=" ' . $mail . ' " required/>
                                <input type="text" name="motdepasse" placeholder="Password" value=" ' . $motdepasse . ' " required/>
                                <button class="bouton">Submit</button>
                                </form>
                        </section>
                        ';
                    }
                }

            ?>
        </div>
    </body>

</html>