<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./Membres.css" />
    <title>Membres_Top_Jeux.fr</title>
  </head> 
    <body>
      <header>
        <h1>voici la liste de tout les membres inscrit sur le site</h1>
      </header>
      <table> 
        <th>pseudo</th>
        <th>email</th>
      </table>
      <table>
        <td>
          <?php
          $bdd = new PDO('mysql:host=localhost;dbname=top_jeux.fr', 'root', 'root');
          $reponse = $bdd->query('SELECT pseudo, email FROM membres ORDER BY pseudo LIMIT 20') ;
          while ($donnees = $reponse->fetch())
          { 
            echo '<p>' . $donnees['pseudo'] ; 
          }
          ?>
        </td>
        <td>
          <?php
          $bdd = new PDO('mysql:host=localhost;dbname=top_jeux.fr', 'root', 'root');
          $reponse = $bdd->query('SELECT * FROM membres ORDER BY pseudo');
          while ($donnees = $reponse->fetch())
          { 
            echo '<p>' . $donnees['email'] ; 
          }
          ?>
        </td>
      </table>
    </body>
    <footer> <a href="./Menu_Principal_Top_Jeux.php">retour</a></footer>
</html>