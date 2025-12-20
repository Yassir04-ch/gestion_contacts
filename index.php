<?php 
session_start();
 if (isset($_SESSION['id'])) {
    header("Location: profil.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="utils/styles.css">
    <title>Document</title>
</head>
<body class="index">
<section class="hero">
    <h1 class="hero_titel">Bienvenue sur Connect Flow </h1>

  <div class="content">
   <img class="hero_img" src="imag/img1.jpg">
    <div class="hero_link">
    <p>Gestion des contact</p>
    <p>Bienvenue sur notre site,</p>
    <p> Notre plateforme vous offre des outils et des services innovants adaptés à vos besoins.</p>
    <p> Inscrivez-vous gratuitement et accédez à une expérience complète et personnalisée.</p>
    <a href="login.php"><button>LOGIN</button></a>
    <a href="inscription.php" ><button >Inscription</button></a>
  </div>
 </div>
</section>
    
</body>
</html>