<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../../Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body style="color: #cfcfcf80;">
  <nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-center align-items-center">
      <div class="d-flex">
        <ul class="navbar-nav" style="margin: 0; padding: 0;">
          <li class="nav-item"><a class="nav-link" href="../../Tours/tours.php">Tours</a></li>
          <li class="nav-item"><a class="nav-link" href="../../BookHotel/book.php">Book Hotel</a></li>
        </ul>
      </div>
      <a class="navbar-brand d-flex justify-content-center align-items-center" href="../../../index.php" style="width:300px;height:80px;margin: 0; padding: 0;">
        <img src="../../../images/logo.png" alt="Rolling Loud Logo">
      </a>
      <div class="d-flex">
        <ul class="navbar-nav" style="margin: 0; padding: 0;">
          <li class="nav-item"><a class="nav-link" href="../shop.php">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="../../FAG_INFO/fag_info.php">FAQ/INFO</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="buyWindow" class="container">
  <?php
require("../../db.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $db->prepare("SELECT * FROM produits WHERE produitId = :id");
    $stmt->execute([':id' => $id]);
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($produit) {
?>
    <div id="prdct">
        <img src="../<?=$produit["thumb"]?>" alt="" style="width: 100%; height:fit-content;">
        <div style="color: #cfcfcf; font-size:x-large"><?=$produit["name"]?></div>
        <div style="height: 50px;"><?=$produit["description"]?></div>
        <div style="color: #cfcfcf;font-size:x-large">Price: <?=$produit["prix"]?> $</div>
    </div>
    <?php
    } else {
        echo "Produit non trouvé.";
    }
} else {
    echo "Aucune référence fournie.";
}?>
    <div id="buyForm">
        <form action="" method="post">
            <div class="form-group" style="gap: 10px;">
                <div class="form-group">
                    <label for="FullName">Full Name</label>
                    <input name="FullName" type="text" id="fullName" class="formInput" placeholder="Enter your full name...">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input name="phone" type="text" id="phone" class="formInput" placeholder="Enter your phone number...">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="eamil" type="text" id="email" class="formInput" placeholder="Enter your email adresse...">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input name="address" type="text" id="address" class="formInput" placeholder="Enter your address...">
                </div>
                <div class="form-group">
                    <label for="quantity">Quanity</label>
                    <input name="quantity" type="number" id="quantity" class="formInput" placeholder="Choose the quantity..." style="width: 30%;">
                </div>
                <div class="line" style="width: 100%; height:1px;background-color:#cfcfcf80"></div>
                <div class="form-group">
                    <label for="note">Order Notes(optional)</label>
                    <textarea name="note" id="note" class="formInput" rows="4" placeholder="Notes about your order for delivery..."></textarea>
                </div>
                <div class="form-group" style="flex: 1 1 100%; text-align: center;">
                    <button type="submit" class="submit-button">Buy</button>
                </div>
            </div>
        </form>
    </div>
  </div>
  <br><br>
    <div style="display:flex;flex-direction:column; background-color:black ;">
      <br>
      <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-around align-items-center">
          <div class="d-flex">
            <ul class="navbar-nav ">
              <li class="nav-item"><a class="nav-link" href="../../FAG_INFO/fag_info.php">FAQ/INFO</a></li>
              <li class="nav-item"><a class="nav-link" href="../../Media/media.php">MEDIA</a></li>
              <li class="nav-item"><a class="nav-link" href="../../Privacy_policy/privacy.php">PRIVACY POLICY</a></li>
              <li class="nav-item"><a class="nav-link" href="../../Terms_use/TermsUse.php">TERMS OF USE</a></li>
              <li class="nav-item"><a class="nav-link" href="../../Acessibilty/acessibility.php">ACCESSIBILITY</a></li>
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