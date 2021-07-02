<?php
session_start();
$_SESSION['identifiant'] = 'eths09';
$_SESSION['password'] = 'kangourou' ;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../Menu_Principal_Switch/Top_Jeux_Switch.css">
    <title>topjeuxswitch.fr</title>
  </head>
  <body>
    <header>
      <h1>les meilleurs jeux switch <? if ($_POST['identifiant']== 'eths09') echo $_SESSION['identifiant']; ?></h1>
      <nav>  
        <div class="Lien_Acceuil">
          <a href="../Menu_Principal_Top_Jeux.fr/Menu_Principal_Top_Jeux.php">acceuil</a>
        </div>
      </nav>  
    </header>
    <!--photo lien des boitier de jeux switch-->
    <a href="./Descriptif_Switch/Liste_1/Descriptif_Zelda_Links_Awakening/Descriptif_Zelda_Links_Awakening.html"><img src="../Menu_Principal_Top_Jeux.fr/Images_Du_Cite/switch/Boitier_Zelda_Links_Awakening.jpg" alt="photo_Boitier_zelda_links_awakening"></a> 
    <a href="./Descriptif_Switch/Liste_1/Descriptif_Kaze/Descriptif_Kaze.html"><img src="../Menu_Principal_Top_Jeux.fr/Images_Du_Cite/switch/Boitier_Kaze_Switch.jpg" alt="photo_Boitier_kaze_switch"></a>
    <a href="./Descriptif_Switch/Liste_1/Descriptif_Mario_Kart_8/Descriptif_Mario_Kart.html"><img src="../Menu_Principal_Top_Jeux.fr/Images_Du_Cite/switch/Boitier_Mario_Kart_8.jpg" alt="photo_Boitier_mario_kart_8"></a>
    <span class="flechebleu" src="./photo/flechegauchebleue.png" alt="Photo_Fleche_Bleu"></span>
  </body>
    <footer>
      <!--photo lien logo ps4 switch xbox-->
      <nav>
        <span class="logops4"><a href="../Menu_Principal_Ps4/Top_Jeux_Ps4.php"><img src="../Menu_Principal_Top_Jeux.fr/Images_Du_Cite/ps4/Logo_Ps4.png" alt="Logo_De_La_Ps4"></a></span> 
        <span class="logoswith"><a href="./Top_Jeux_Switch.php"><img src="../Menu_Principal_Top_Jeux.fr/Images_Du_Cite/ps4/Logo_Switch.png" alt="Logo_De_La_Switch"></a></span>
        <span class="logoxbox"><a href="../Menu_Principal_Xbox/Top_Jeux_Xbox.php"><img src="../Menu_Principal_Top_Jeux.fr/Images_Du_Cite/ps4/Logo_Xbox.png" alt="Logo_De_La_Xbox"></a></span>
      </nav> 
    </footer>
</html>