<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Menu_Principal_Top_Jeux.css" />
    <title>Top_Jeux.fr</title>
  </head>
  <body>
    <header>  
      <h1>Bienvenue sur TopJeux.fr</h1>
      <nav>
      <img src="./Photo/Logo_Connexion.png" alt="Logo_Connexion">
      <a href="../Menu_Principal_Top_Jeux.fr/Connexion_Top_Jeux/verificationcompte.php">connexion</a>
      <?php
      if ($_SESSION['menu']== 'eths09')
      {
        echo ($_SESSION['menu']);
      }
      elseif ($_SESSION['menu']== 'kev09')
      {
        echo ($_SESSION['menu']); 
      }
      ?>
      </nav>
      <nav2>
      <img src="./Mini_Chat/photo/Logo_Mini_chat.png" alt="Logo_Mini_chat">
      <a href="./Mini_Chat/Mini_Chat.php">Mini_chat</a></br>
      </nav2>
      <a href="./Membres.php">voir la liste des inscrits </p></a></span>
    </header>
    <footer>
      <nav3>
        <span class="etoile"><a href="../Menu_Principal_Ps4/Top_Jeux_Ps4.php">accéder au site </p></a></span>
        <p>
          Bienvenue sur le site qui vous propose toutes les informations sur les meilleurs jeux vidéo.<br/> 
          Vous trouverez ici un decriptif pour chaque jeux contenant des photos une vidéo de gameplay et un lien pour acheter le jeux si cela vous intéresse.  
        </p>
      </nav3>
    </footer>
  </body>
</html>