<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Top_Jeux_Ps4.css" />
    <title>topjeux.fr</title>
  </head>
  <body>
    <header>
      <h1>les meilleurs jeux ps4 <?php echo ($_SESSION['prenom']) ?> </h1>
      <nav>
      <a href="../Menu_Principal_Top_Jeux.fr/Menu_Principal_Top_Jeux.php">acceuil</a>
      </nav>
    </header>
    <!--photo lien des boitier de jeux-->
    <a href="../Menu_Principal_Ps4/Descriptif_Jeux_Ps4/Liste_1/Descriptif_Days_Gone/Descriptif_Days_Gone.php"><img src="./Photo_Top_Jeux_Ps4/Boitier_Days_Gone_Ps4.jpg" alt="Photo_Boitier_Days_Gone_"></a> 
    <a href="../Menu_Principal_Ps4/Descriptif_Jeux_Ps4/Liste_1/Descriptif_The_Horizon/Descriptif_The_Horizon.html"><img src="./Photo_Top_Jeux_Ps4/Boitier_The_Horizon_Ps4.jpg" alt="Photo_Boitier_The_Horizon"></a>
    <a href="../Menu_Principal_Ps4/Descriptif_Jeux_Ps4/Liste_1/Descriptif_Tlou_2/Descriptif_Tlou_2.html"><img src="./Photo_Top_Jeux_Ps4/Boitier_Tlou_2.jpg" alt="Photo_Boitier_The_Last_Of_Us_2"></a>
  </body>
    <footer>
      <nav>
        <!--photo lien des logos ps4 switch xbox-->    
        <span class="logops4"><a href="./Top_Jeux_Ps4.php"><img src="./Photo_Top_Jeux_Ps4/Logo_Ps4.png" alt="logo_de_la_ps4"></a></span> 
        <span class="logoswith"><a href="../Menu_Principal_Switch/Top_Jeux_Switch.php"><img src="./Photo_Top_Jeux_Ps4/Logo_Switch.png" alt="Logo_De_La_Switch"></a></span>
        <span class="logoxbox"><a href="../Menu_Principal_Xbox/Top_Jeux_Xbox.php"><img src="./Photo_Top_Jeux_Ps4/Logo_Xbox.png" alt="Logo_De_La_Xbox"></a></span>
      </nav>
    </footer>
</html>