<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="verificationcompte.css" />
    <title>mon_compte_topjeux.fr</title>
  </head>
  <body>
    <header>
      <h1>déja inscrit ? </h1>
      <form method="POST" action="../Mon_Espace_Personnel/Mon_Espace_Personnel.php">
        <label>identifiant</label><input type='text' name='identifiant'><br/>    
        <label>password</label> <input type='password' name='motdepasse'><br/>
        <a href="../Mon_Espace_Personnel/Mon_Espace_Personnel.php"><input type='submit'></input></a>
      </form>
    </header>
    <footer>
      <p><a href='../Menu_Principal_Top_Jeux.php'>deconnexion </p></a></a> <?php session_destroy() ?>
      <p>pas encore inscrit ?</p>
      <a href="../Creation_Compte/Creation_Compte.php">==>m'inscrire<==
    </footer>
  </body>
</html>