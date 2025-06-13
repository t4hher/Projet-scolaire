<?php
session_start();
if(!isset($_SESSION["email"])){header("location:../../sign_in/signin.php");}else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../../Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <script src="../../../Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>
      h1{color: darkgrey;}
  </style>
</head>
<body style="color: #cfcfcf80;background-image: url('../../../images/background.png');">
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
          <li class="nav-item"><a class="nav-link" href="../../Shop/shop.php">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="../../FAG_INFO/fag_info.php">FAQ/INFO</a></li>
          <div class="dropdown">
            <button class="btn dropdown-toggle text-white" type="button" data-bs-toggle='dropdown' aria-expanded="false" id="other"></button>
            <ul class="dropdown-menu bg-black" aria-labelledby="other">
              <li><a href="../../orders/orders.php" class="dropdown-item text-white bg-black">My Orders</a></li>
              <li><a href="../../logout.php" class="dropdown-item text-danger bg-black">Log-Out</a></li>
            </ul>
          </div>
        </ul>
      </div>
    </div>
  </nav><br><br>
  <h1>Modify Your Order</h1>
  <hr>
  <br>
  <?php
require("../../db.php");
if (isset($_GET['ref'])) {
    $order = $_GET['ref'];
    $stmt = $db->prepare("SELECT * FROM orders WHERE order_id = :ref");
    $stmt->execute([':ref' => $order]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($data) {
?>
  <div class="container">
  <form action="" method="post">
        <div class="form-group" style="gap: 10px;">
            <input type="hidden" name="id" value="<?= $data['order_id'] ?>">
            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input name="full_name" type="text" class="formInput" value="<?= $data["full_name"]?>">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input name="phone" type="text" class="formInput" value="<?= $data["phone"]?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="text" class="formInput" value="<?= $data["email"]?>">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input name="adresse" type="text" class="formInput" value="<?= $data["adresse"]?>">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input name="quantity" type="number" class="formInput" value="<?= $data["quantity"]?>">
            </div>
            <div class="form-group" style="flex: 1 1 100%; text-align: center;">
                <button type="submit" class="submit-button" name="ss">Buy</button>
            </div>
        </div>
    </form>
  </div>
  <div class="container">
  <?php
    } else {
        echo "Order Not Found";
    }
} else {
    echo "No Id Recieved";
}
if(isset($_POST["ss"])){
    $user=$_POST["id"];
    $name=$_POST["full_name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $adresse=$_POST["adresse"];
    $qnt=$_POST["quantity"];
    $stmt = $db->prepare("UPDATE orders SET full_name = :name,phone = :phone,email = :email,adresse = :adresse,quantity = :quantity WHERE order_id = :id");
    if ($stmt->execute([":id"=>$user,":name"=>$name,":phone"=>$phone,":email"=>$email,":adresse"=>$adresse,":quantity"=>$qnt])) {
        echo "<div style='color:green;border: solid green 1px;width:100%;margin:10px;padding: 10px;text-align:center'>Modification Is Done</div>";
        echo "<div style='color:blue;border: solid blue 1px;width:100%;margin:10px;padding: 10px;text-align:center'><a href='../orders.php'>Go back to Orders Page</a></div>";
    } else {
        echo "<div style='color:red;border: solid red 1px;width:100%;padding:10px;margin:10px;text-align:center;>Something Went Wrong</div>";
    }
}

?>
</div>

  <br><br>
    <div style="display:flex;flex-direction:column; background-color:black ;">
      <br>
      <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-around align-items-center">
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
      <div class="container" style="padding-bottom:80px;padding-top:10px">
        <span style="text-align: center;">Loud StreetX LLC is committed to facilitating the accessibility and usability of its website, loudstreetx.com (the “Website”), for individuals with sensory disabilities. To support this commitment, Loud StreetX will gradually implement the relevant portions of the World Wide Web Consortium’s Web Content Accessibility Guidelines 2.0 Level AA (“WCAG 2.0 AA”) as its web accessibility standard. This will help ensure that the Website becomes more accessible to users with sensory impairments. <br><br>
          Until our digital media upgrades are complete, if you experience difficulty accessing any part of our website, apps, or internal systems to obtain information, purchase tickets, or for any other reason, please call +212 5 35 22 10 42 and one of our representatives in Fes, Casablanca, Agadir, or Rabat will be happy to assist you.</span>
      </div>
    </div>
</body>

</html>
<?php }?>