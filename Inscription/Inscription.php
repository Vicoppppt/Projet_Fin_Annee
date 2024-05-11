<?php

require('../Fonctions/Fonctions.php');

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=boop_adventure;charset=utf8;', 'customer', 'customer');

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boîte de Commentaires</title>
  <script src="https://kit.fontawesome.com/93e07d7a41.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .comment-box {
      width: 80%;
      margin: 20px auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .comment {
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 1px solid #ddd;
      display: flex;
      flex-direction: column;
    }

    .user {
      font-weight: bold;
      color: #333;
    }

    .message {
      margin-top: 5px;
      margin-bottom: 10px;
      color: #666;
    }

    .likes,
    .dislikes {
      font-size: 14px;
      color: #999;
      display: flex;
      align-items: center;
    }

    .like-icon,
    .dislike-icon {
      margin-right: 5px;
    }

    .like-icon {
      color: #4CAF50;
    }

    .dislike-icon {
      color: #F44336;
    }
  </style>
</head>

<body>
  <div class="comment-box">
    <?php
    AfficherCommentaires();
    ?>

  </div>

</body>

</html>