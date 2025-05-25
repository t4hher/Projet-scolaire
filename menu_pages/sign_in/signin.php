<?php
session_start();
?>
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

  <section class="container form-section text-center" >
    
    <h1>SIGN IN TO THE FESTIVAL</h1>
    <form method="post" action="" id="myForm">
        <div class="signform">
        <div class="form-group">
            <label for="email">ADDRESS EMAIL</label>
            <input name="email" type="text" id="email" class="formInput" placeholder="Enter your email..." required width="100%">
        </div>

        <div class="form-group">
            <label for="pass">Password</label>
            <input name="pass" type="password" id="pass" class="formInput" placeholder="Enter your password..."required width="100%">
        </div>
        </div>
      <div class="form-group" style="flex: 1 1 100%; text-align: center;">
        <button type="submit" class="submit-button" name="ss">SIGN IN</button>
      </div>
      <p class="">I DON'T HAVE ACCOUNT, &nbsp;&nbsp;&nbsp;<a href="../sign_up/signup.php" style="color: #cfcfcf;">CREATE ONE</a></p>
      <br>
    </form>
    <?php
    require("../db.php");
    if(isset($_POST["ss"])){
        $email=$_POST["email"];
        $password=$_POST["pass"];
        $stmt=$db->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->execute([":email"=>$email]);
        $ligne=$stmt->fetch();
        $errors=[];
        if(count($ligne)>0){
            if(password_verify($password,$ligne["password"])){header("location:../shop/shop.php");
                $_SESSION["email"]=$email;
                $_SESSION["password"]=$password;
            }else{array_push($errors,"Password does not match");}
        }else{array_push($errors,"Email does not match");}
        if (count($errors)>0) {
            foreach ($errors as $error) {echo "<div style='color:red;border: solid red 1px;width:100%;padding:10px;margin:10px'>$error</div>";}
        }
    }
    ?>
    <div class="line" style="width: 100%; height:1px;background-color:#cfcfcf80"></div>
</section>

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
        <div style="text-align: center;font-family:BTS">Loud StreetX LLC is committed to facilitating the accessibility and usability of its website, loudstreetx.com (the “Website”), for individuals with sensory disabilities. To support this commitment, Loud StreetX will gradually implement the relevant portions of the World Wide Web Consortium’s Web Content Accessibility Guidelines 2.0 Level AA (“WCAG 2.0 AA”) as its web accessibility standard. This will help ensure that the Website becomes more accessible to users with sensory impairments. <br><br>
          Until our digital media upgrades are complete, if you experience difficulty accessing any part of our website, apps, or internal systems to obtain information, purchase tickets, or for any other reason, please call +212 5 35 22 10 42 and one of our representatives in Fes, Casablanca, Agadir, or Rabat will be happy to assist you.</div>
    </div>
</body>
</html>