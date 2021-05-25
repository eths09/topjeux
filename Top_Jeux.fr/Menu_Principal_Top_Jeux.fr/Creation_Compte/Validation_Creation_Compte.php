<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./Validation_Creation_Compte.css" />
    <title>création_compte_Top_Jeux.fr</title>
  </head>
  <body>
    <p>compte crée avec succès </p>
    <nav>
    <?php
      try
      {
	    $bdd = new PDO('mysql:host=localhost;dbname=top_jeux.fr;charset=utf8', 'root', 'root');
      }
      catch(Exception $e)
      {
        die('Erreur : '.$e->getMessage());
      }  
      if((isset($_POST['pseudo']) AND (trim($_POST['pseudo']) != '')) 
      AND (isset($_POST['email']) AND (trim($_POST['email']) != '')) 
      AND (isset($_POST['email']) AND (trim($_POST['mdp']) != ''))) 
      {
      $requete = $bdd->prepare('INSERT INTO membres(pseudo, email, mdp) VALUES(?, ?, ?)');
      $requete->execute(array($_POST['pseudo'], $_POST['email'], $_POST['mdp']));
      }
      else
      {
      echo ('veuillez entrer un pseudo et un commentaire') ;
      }
      ?>
    </nav>
    <header>
    </header>
    <footer>
    <a href="../Menu_Principal_Top_Jeux.php">retour acceuil</a>
    </footer>
  </body>
</html>