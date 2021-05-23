<?php
session_start();
if ($_POST['identifiant']=='eths09' AND $_POST['motdepasse']== 'boss')
{
  $_SESSION['prenom'] = 'Gio';
  $_SESSION['nom'] = 'Rossi';
  $_SESSION['menu'] = 'eths09';
}
elseif ($_POST['identifiant']=='kev' AND $_POST['motdepasse']== 'mrnutty')
{
  $_SESSION['prenom'] = 'kev';
  $_SESSION['nom'] = 'rossi';
  $_SESSION['menu'] = 'kev09';
}
?>
<!DOCTYPE html>
<html>
  <header>
  </header>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./Mon-Espace_Personnel.css" />
    <title>code secret</title>
  </head> 
    <body>
      <form 
        method="$_POST" action="test.css"
        input type="text"  name="commentaire">
      </form>
      <img src="./photo/Robot_blanc.png" alt="Robot_blanc">
      <?php
        if ($_POST['identifiant']=='eths09' AND $_POST['motdepasse']== 'boss')
        {
          echo htmlspecialchars('bienvenue sur ton site   ')    ;
          echo htmlspecialchars($_POST['identifiant']);
        }
        elseif ($_POST['identifiant']== 'kev' AND $_POST['motdepasse']== 'mrnutty')  
        {
          echo htmlspecialchars('yop le kake bienvenue sur mon site');
        }
        else 
        {
          echo htmlspecialchars('Désoler se compte est inconnue');
        }
      ?>
    <img src="./photo/Robot_blanc.png" alt="Robot_Blanc">
    <footer>
      <textarea name="message" rows="8" cols="45">
      <?php
      if ($_POST['identifiant']=='eths09' AND $_POST['motdepasse']== 'boss')
      {
      echo('pense à ajouter les fleches gauche et droite pour changer de jeux et si possible mettre une barre de recherche lié au dossier jeuxvidéo sur php-my-admin.');
      }
      ?>
      </textarea>
      <a href="../Menu_Principal_Top_Jeux.php">acceuil
    </footer>
    </body>
</html>