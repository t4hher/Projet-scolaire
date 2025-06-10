<?php
session_start();
if(!isset($_SESSION["email"])){header("location:../sign_in/signin.php");}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body style="color: #cfcfcf;">
    <nav class="navbar navbar-expand-lg">
  <div class="container d-flex justify-content-center align-items-center"> 
    <div class="d-flex">
      <ul class="navbar-nav"  style="margin: 0; padding: 0;">
        <li class="nav-item"><a class="nav-link" href="../Tours/tours.php">Tours</a></li>
        <li class="nav-item"><a class="nav-link" href="../BookHotel/book.php">Book Hotel</a></li>
      </ul>
    </div>
    <a class="navbar-brand d-flex justify-content-center align-items-center" href="../../index.php" style="width:300px;height:80px;margin: 0; padding: 0;">
      <img src="../../images/logo.png" alt="Rolling Loud Logo">
    </a>
    <div class="d-flex">
      <ul class="navbar-nav" style="margin: 0; padding: 0;">
        <li class="nav-item"><a class="nav-link" href="../Shop/shop.php">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="../FAG_INFO/fag_info.php">FAQ/INFO</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br>
<h1 style="color: #cfcfcf;">LDSTRTZ Tours</h1>
<br><br>
<div class="container" id="lstShw">
<?php
      require("../db.php");
      $sql = $db->prepare("SELECT id_show,thumb,name,place,city,time,price FROM shows;");
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      $sql->execute();
      while ($ligne = $sql->fetch()) {?>
        <div class="show">
          <img src="<?php echo $ligne['thumb']; ?>" alt="" style="width: 100%; height:fit-content;">
          <div style="color: #cfcfcf; font-size:x-large;height: 70px;"><?php echo $ligne['name']; ?></div>
          <div style="height: #cfcfcf"><?=$ligne['place'];?> | <?=$ligne['city'];?> | <?=$ligne['time'];?></div>
          <div style="color: #cfcfcf;font-size:x-large">Price: <?php echo $ligne['price']; ?>$</div>
          <br>
          <div style="width: 100%;">
            <div style="width: 100%;">
            <a style="width:100%" href="buyPage/buyPage.php?id=<?= $ligne["id_show"] ?>"><button type="submit" class="submit-button" style="padding: 10px;width:100%;">BUY</button></a>
            </div>
          </div>
        </div>
            <?php }?>

<div style="display:flex;flex-direction:column; background-color:black ;" >
  <br>
<nav class="navbar navbar-expand-lg">
  <div class="container d-flex justify-content-around align-items-center" > 
    <div class="d-flex">
      <ul class="navbar-nav ">
        <li class="nav-item"><a class="nav-link" href="../FAG_INFO/fag_info.php">FAQ/INFO</a></li>
        <li class="nav-item"><a class="nav-link" href="../Media/media.php">MEDIA</a></li>
        <li class="nav-item"><a class="nav-link" href="../Privacy_policy/privacy.php">PRIVACY POLICY</a></li>
        <li class="nav-item"><a class="nav-link" href="../Terms_use/TermsUse.php">TERMS OF USE</a></li>
        <li class="nav-item"><a class="nav-link" href="../Acessibilty/acessibility.php">ACCESSIBILITY</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="padding-bottom:80px;padding-top:10px" >
<span id="foot" style="text-align: center; color:#cfcfcf80;">Loud StreetX LLC is committed to facilitating the accessibility and usability of its website, loudstreetx.com (the “Website”), for individuals with sensory disabilities. To support this commitment, Loud StreetX will gradually implement the relevant portions of the World Wide Web Consortium’s Web Content Accessibility Guidelines 2.0 Level AA (“WCAG 2.0 AA”) as its web accessibility standard. This will help ensure that the Website becomes more accessible to users with sensory impairments. <br><br>
Until our digital media upgrades are complete, if you experience difficulty accessing any part of our website, apps, or internal systems to obtain information, purchase tickets, or for any other reason, please call +212 5 35 22 10 42 and one of our representatives in Fes, Casablanca, Agadir, or Rabat will be happy to assist you.</span>
</div>
</div>
</body>
</html>
<?php ;}?>