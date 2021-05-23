<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Mini_Chat.css" />
    <title>mini-chat</title>
  </head>
  <body>
    <header> 
      <form 
        method="POST" action="./Mini_Chat.php">
        <label for="pseudo">Pseudo</label> : <input  type="text" id='pseudo' name="pseudo">
        <label for="commentaire">commentaire</label> : <input  type="text" id='commentaire' name="commentaire">
        <input type="submit" id='envoyer' value="envoyer">   
      </form>
      <?php
      try
      {
	    $bdd = new PDO('mysql:host=localhost;dbname=top_jeux.fr;charset=utf8', 'root', 'root');
      }
      catch(Exception $e)
      {
        die('Erreur : '.$e->getMessage());
      }  
      if((isset($_POST['pseudo']) AND (trim($_POST['pseudo']) != '')) AND (isset($_POST['commentaire']) AND trim($_POST['commentaire']) != ''))
      {
      $requete = $bdd->prepare('INSERT INTO mini_chat(pseudo, commentaire) VALUES(?, ?)');
      $requete->execute(array($_POST['pseudo'], $_POST['commentaire']));
      }
      else
      {
      echo ('veuillez entrer un pseudo et un commentaire') ;
      }
      ?>
      <nav> 
        <?php
          $bdd = new PDO('mysql:host=localhost;dbname=top_jeux.fr', 'root', 'root');
          $reponse = $bdd->query('SELECT pseudo, commentaire FROM mini_chat LIMIT 20') ;
          while ($donnees = $reponse->fetch())
          { 
            echo '<p>' . $donnees['pseudo']. ' : '  . $donnees['commentaire'] ; 
          }
        ?>
      </nav>
    <footer>  
      <a href="../Menu_Principal_Top_Jeux.php">retour</a>
    </footer>   
  </body>
</html>
