<?php
session_start();
$_SESSION['identifiant'] = 'eths09';
$_SESSION['password'] = 'kangourou' ;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="top_jeu_xbox.css" />
    <title>top_jeux_xbox.fr</title>
  </head>
  <body>
    <header>
      <h1>les meilleurs jeux xbox <? if ($_POST['identifiant']== 'eths09') echo $_SESSION['identifiant']; ?></h1>
    </header>
      <!--photo lien des boitier de jeux xbox-->
      <a href="./Descriptif_Xbox/Liste_1/descriptif_dirt5/descriptif_dirt_5.html"><img src="../Menu_Principal_Top_Jeux.fr/Images_Du_Cite/xbox/Boitier_Dirt_5.jpg" alt="Photo_Boitier_Dirt_5_Xbox"></a> 
      <a href="./Descriptif_Xbox/Liste_1/descriptif_sea_of_thieves/descriptif_sea_of_thieves.html"><img src="../Menu_Principal_Top_Jeux.fr/Images_Du_Cite/xbox/Boitier_Sea_Of_Thieves.jpg" alt="Photo_Boitier_Sea-Of_Thieve"></a>
      <a href="./Descriptif_Xbox/Liste_1/descriptif_metro_exodus/descriptif_metro_exodus.html"><img src="../Menu_Principal_Top_Jeux.fr/Images_Du_Cite/xbox/Boitier_Metro_Exodus.jpg" alt="Photo_Boitier_Metro_Exodus"></a>
      <span class="flechebleu" src="./photo/flechegauchebleue.png" alt="photo_fleche_bleu"></span>
  </body>
    <footer>
      <!--photo lien logo ps4 switch xbox-->
      <nav>
        <span class="logops4"><a href="../Menu_Principal_Ps4/Top_Jeux_Ps4.php"><img src="../Menu_Principal_Top_Jeux.fr/Images_Du_Cite/ps4/Logo_Ps4.png" alt="logo_de_la_ps4"></a></span> 
        <span class="logoswith"><a href="../Menu_Principal_Switch/Top_Jeux_Switch.php"><img src="../Menu_Principal_Top_Jeux.fr/Images_Du_Cite/ps4/Logo_Switch.png" alt="logo_de_la_switch"></a></span>
        <span class="logoxbox"><a href="./Top_Jeux_Xbox.php"><img src="../Menu_Principal_Top_Jeux.fr/Images_Du_Cite/ps4/Logo_Xbox.png" alt="logo_de_la_xbox"></a></span>
      </nav> 
    </footer>
</html>