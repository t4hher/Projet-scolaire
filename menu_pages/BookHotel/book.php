<?php
session_start();
if(!isset($_SESSION["email"])){header("location:../sign_in/signin.php");}else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <style>
      body{
  background-image: url("../../images/background.png");
  background-attachment: fixed;
}
    </style>
</head>
<body style="color: #cfcfcf80;" >
    <nav class="navbar navbar-expand-lg">
  <div class="container d-flex justify-content-center align-items-center"> 
    <div class="d-flex">
      <ul class="navbar-nav"  style="margin: 0; padding: 0;">
        <li class="nav-item"><a class="nav-link" href="../Tours/tours.php">Tours</a></li>
        <li class="nav-item"><a class="nav-link" href="../BookHotel/book.php">Book Hotel</a></li>
      </ul>
=======
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <script src="../../Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../../Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.min.js">
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
>>>>>>> 39c0b6204b2286753f439a7e987a1157de7914b8
    </div>
  </nav><br><br>
  <h1>Book Hotel</h1>
  <br>
  <form action="" method="post">
    <div class="container">
    <div class="form-group" style="gap: 10px;">
      <div class="form-group">
          <label for="city">Choose City</label>
            <select name="city" style="padding: 8px 3px;">
              <option value="Fés" selected>Fés</option>
              <option value="Casablanca">Casablanca</option>
              <option value="Rabat">Rabat</option>
              <option value="Agadir">Agadir</option>
            </select>
      </div>
      
        <div class="form-group">
          <label for="checkin">Check-in</label>
          <input name="checkin" type="date" id="checkin" class="formInput" placeholder="Check-in Date...">
        </div>
        <div class="form-group">
          <label for="checkout">Check-Out</label>
          <input name="checkout" type="date" id="checkout" class="formInput" placeholder="Check-Out Date...">
        </div>
        <div class="form-group">
          <label for="room">Rooms</label>
            <select name="room" style="padding: 8px 3px;">
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
        </div>
        <div class="form-group">
          <label for="roomtype">Room Type</label>
            <select name="roomtype" style="padding: 8px 3px;">
              <option value="With 1 Bed" selected>With 1 Bed</option>
              <option value="With 2 Beds">With 2 Beds</option>
              <option value="With 1 Large Bed">With 1 Large Bed</option>
            </select>
        </div>
        <div class="form-group" style="flex: 1 1 100%; text-align: center;">
          <button type="submit" class="submit-button" name="ss">Book Now</button>
        </div>
    </div>
  </form>
  </div>
  <div class="container">
  <?php
  require("../db.php");
  if(isset($_POST["ss"])){
    $userid=$_SESSION["id"];
    $city=$_POST["city"];
    $checkin=$_POST["checkin"];
    $checkout=$_POST["checkout"];
    $room=$_POST["room"];
    $room_t=$_POST["roomtype"];
    $room_n=rand(1,200);
    $hotel_name="";
    switch ($city) {
      case 'Fés':$hotel_name="Barcelo Hotel";break;
      case 'Casablanca':$hotel_name="Four Seasons Hotel";break;
      case 'Rabat':$hotel_name="Ibis Rabat Agdal Hotel";break;
      case 'Agadir':$hotel_name="Rui Palace Tikida Hotel";break;
    }
    $stm=$db->prepare("INSERT INTO booking_h(userId,hotel_name,check_in,check_out,rooms,room_type,room_number) VALUES (:user,:hotel,:in,:out,:room,:roomt,:roomn)");
    if($stm->execute([":user"=>$userid,":hotel"=>$hotel_name,":in"=>$checkin,":out"=>$checkout,":room"=>$room,":roomt"=>$room_t,":roomn"=>$room_n])){
      echo "<div style='color:green;border: solid green 1px;width:100%;margin:10px;padding: 10px;text-align:center'>Your Hotel Has been Booked<br>Hotel Name: $hotel_name<br>Check-In: $checkin<br>Check-Out: $checkout<br>Rooms: $room<br>Room Type: $room_t<br>Room Number: $room_n</div>";
    }else{echo "<div style='color:red;border: solid red 1px;width:100%;padding:10px;margin:10px;text-align:center;>Something Went Wrong</div>";}
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