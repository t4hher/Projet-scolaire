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
  <link rel="stylesheet" href="../../Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <script src="../../Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>
      h1{color: darkgrey;}
  </style>
</head>
<body style="color: #cfcfcf80;background-image: url('../../images/background.png');">
<nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-center align-items-center">
      <div class="d-flex">
        <ul class="navbar-nav" style="margin: 0; padding: 0;">
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
          <div class="dropdown">
            <button class="btn dropdown-toggle text-white" type="button" data-bs-toggle='dropdown' aria-expanded="false" id="other"></button>
            <ul class="dropdown-menu bg-black" aria-labelledby="other">
              <li><a href="../orders/orders.php" class="dropdown-item text-white bg-black">My Orders</a></li>
              <li><a href="../logout.php" class="dropdown-item text-danger bg-black">Log-Out</a></li>
            </ul>
          </div>
        </ul>
      </div>
    </div>
  </nav><br><br>
  <h1>My Orders</h1>
  <hr>
  <br>
  <div class="container">
  <h4>Merchs</h4>
  <?php
  require("../db.php");
  $id = $_SESSION["id"];
  $sql = $db->prepare("SELECT * FROM orders WHERE userId = :id;");
  $sql->setFetchMode(PDO::FETCH_ASSOC);
  $sql->execute([":id" => $id]);

  if ($sql->rowCount() > 0) {
?>
    <table class="table table-dark text-center">
      <thead>
        <tr>
          <th scope="col">Merch Id</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Adresse</th>
          <th scope="col">Quantity</th>
          <th scope="col">Notes</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
<?php
    while ($ligne = $sql->fetch()) {
?>
        <tr>
          <th><?php echo $ligne["produitId"]; ?></th>
          <td><?php echo $ligne["full_name"]; ?></td>
          <td><?php echo $ligne["phone"]; ?></td>
          <td><?php echo $ligne["email"]; ?></td>
          <td><?php echo $ligne["adresse"]; ?></td>
          <td><?php echo $ligne["quantity"]; ?></td>
          <td><?php echo $ligne["notes"]; ?></td>
          <td>
            <a href="modify/modify.php?ref=<?= $ligne["order_id"] ?>&type=merch" class="btn btn-secondary">Modify</a>
            <a href="modify/delete.php?ref=<?= $ligne["order_id"] ?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
<?php
    }
?>
      </tbody>
    </table>
<?php
  } else {
    echo "No Merchs";
  }
?>

  <tbody>
  </tbody>
</table>

<h4>Tickets</h4>
  <?php
  require("../db.php");
  $id=$_SESSION["id"];
  $sql = $db->prepare("SELECT * FROM tickets where userId=:id;");
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      $sql->execute([":id"=>$id]);
      if ($sql->rowCount() > 0){
        ?>
        <table class="table table-dark text-center">
            <thead>
            <tr>
            <th scope="col">Show Id</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Card Number</th>
            <th scope="col">Payment</th>
            <th scope="col">Quantity</th>
            <th scope="col">Actions</th>
            </tr>
            </thead>
        <?php
      while ($ligne = $sql->fetch()) {?>
        <tr>
            <th><?php echo $ligne["id_show"] ?></th>
            <td><?php echo $ligne["name"] ?></td>
            <td><?php echo $ligne["phone"] ?></td>
            <td><?php echo $ligne["email"] ?></td>
            <td><?php echo $ligne["card"] ?></td>
            <td><?php echo $ligne["payment"] ?></td>
            <td><?php echo $ligne["quantity"] ?></td>
            <td>
            <a href="modify/modify.php?ref=<?= $ligne["ticket_id"]?>&type=show" class="btn btn-secondary">Modify</a> 
            <a href="delete.php?ref=<?= $ligne["ticket_id"] ?>" class="btn btn-danger">Delete</a> 
            </td>
        </tr>
            <?php }?></table><?php }else{echo "No Tickets";}
            ?>
  <tbody>
  </tbody>
</table>

<h4>Booked Hotel</h4>
  <?php
  require("../db.php");
  $id=$_SESSION["id"];
  $sql = $db->prepare("SELECT * FROM booking_h where userId=:id;");
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      $sql->execute([":id"=>$id]);
      if ($sql->rowCount() > 0){
        ?>
        <table class="table table-dark text-center">
            <thead>
            <tr>
            <th scope="col">Booking Id</th>
            <th scope="col">Hotel Name</th>
            <th scope="col">Check-In</th>
            <th scope="col">Check-Out</th>
            <th scope="col">Rooms</th>
            <th scope="col">Rooms Type</th>
            <th scope="col">Rooms Number</th>
            <th scope="col">Actions</th>
            </tr>
            </thead>
        <?php
      while ($ligne = $sql->fetch()) {?>
        <tr>
            <th><?php echo $ligne["book_id"] ?></th>
            <td><?php echo $ligne["hotel_name"] ?></td>
            <td><?php echo $ligne["check_in"] ?></td>
            <td><?php echo $ligne["check_out"] ?></td>
            <td><?php echo $ligne["rooms"] ?></td>
            <td><?php echo $ligne["room_type"] ?></td>
            <td><?php echo $ligne["room_number"] ?></td>
            <td>
            <a href="modify/modify.php?ref=<?= $ligne["book_id"] ?>&type=hotel" class="btn btn-secondary">Modify</a> 
            <a href="delete.php?ref=<?= $ligne["book_id"] ?>" class="btn btn-danger">Delete</a> 
            </td>
        </tr>
            <?php }?></table><?php }else{echo "No Tickets";}
            ?>
  <tbody>
  </tbody>
</table>

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