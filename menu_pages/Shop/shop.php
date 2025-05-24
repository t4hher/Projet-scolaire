<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body style="color: #cfcfcf80;background-image: url('../../images/background.png');">
  <nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-center align-items-center">
      <div class="d-flex">
        <ul class="navbar-nav" style="margin: 0; padding: 0;">
          <li class="nav-item"><a class="nav-link" href="../Tours/tours.php">Tours</a></li>
          <li class="nav-item"><a class="nav-link" href="../Book Hotel/book.php">Book Hotel</a></li>
        </ul>
      </div>
      <a class="navbar-brand d-flex justify-content-center align-items-center" href="../../index.php" style="width:300px;height:80px;margin: 0; padding: 0;">
        <img src="../../images/logo.png" alt="Rolling Loud Logo">
      </a>
      <div class="d-flex">
        <ul class="navbar-nav" style="margin: 0; padding: 0;">
          <li class="nav-item"><a class="nav-link" href="../Shop/shop.php">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="../FAG-INFO/fag_info.php">FAQ/INFO</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <h1>2025 LDSTRTZ MERCH</h1>
  <div class="container" id="largeImg">
    <img src="../../images/index_pictures/shop1.png" width="100%">
    <br><br>
    <div id="lstPrdct" class="container">
      <?php
      require("../db.php");
      $sql = $db->prepare("SELECT produitId,thumb,name,prix,description FROM produits;");
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      $sql->execute();
      while ($ligne = $sql->fetch()) {?>
        <div class="prdct">
          <img src="<?php echo $ligne['thumb']; ?>" alt="" style="width: 100%; height:fit-content;">
          <div style="color: #cfcfcf; font-size:x-large"><?php echo $ligne['name']; ?></div>
          <div style="height: 70px;"><?php echo $ligne['description']; ?></div>
          <div style="color: #cfcfcf;font-size:x-large">Price: <?php echo $ligne['prix']; ?>$</div>
          <br>
          <div style="justify-content: flex-start;justify-self:flex-end">
            <div class="btn-price-container">
            <a style="width:100%" href="buyPage/buyPage.php?id=<?= $ligne["produitId"] ?>"><button type="submit" class="submit-button" style="padding: 10px;width:100%;">BUY</button></a>
            </div>
          </div>
        </div>
            <?php }?>
    </div>
  </div>
  <br><br>
    <div style="display:flex;flex-direction:column; background-color:black ;">
      <br>
      <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-around align-items-center">
          <div class="d-flex">
            <ul class="navbar-nav ">
              <li class="nav-item"><a class="nav-link" href="#">FAQ/INFO</a></li>
              <li class="nav-item"><a class="nav-link" href="#">MEDIA</a></li>
              <li class="nav-item"><a class="nav-link" href="#">PRIVACY POLICY</a></li>
              <li class="nav-item"><a class="nav-link" href="#">TERMS OF USE</a></li>
              <li class="nav-item"><a class="nav-link" href="#">ACCESSIBILITY</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container" style="padding-bottom:80px;padding-top:10px">
        <span style="text-align: center;">Loud StreetX LLC is committed to facilitating the accessibility and usability of its website, loudstreetx.com (the “Website”), for individuals with sensory disabilities. To support this commitment, Loud StreetX will gradually implement the relevant portions of the World Wide Web Consortium’s Web Content Accessibility Guidelines 2.0 Level AA (“WCAG 2.0 AA”) as its web accessibility standard. This will help ensure that the Website becomes more accessible to users with sensory impairments. <br><br>
          Until our digital media upgrades are complete, if you experience difficulty accessing any part of our website, apps, or internal systems to obtain information, purchase tickets, or for any other reason, please call +212 5 35 22 10 42 and one of our representatives in Fes, Casablanca, Agadir, or Rabat will be happy to assist you.</span>
      </div>
    </div>
</body>

</html>