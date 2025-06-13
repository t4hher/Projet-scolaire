<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="Boots/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <title>Loud Streetz</title>
  <style>
    body {
    background-image: url("images/background.png");
    background-attachment: fixed;
    }
    section {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 1s ease-out, transform 1s ease-out;
    }

    section.show {
      opacity: 1;
      transform: translateY(0);
    }
        .navbar {
      padding: 1rem 0;
    }
    .navbar-nav .nav-link {
      color: #cfcfcf80;
      font-weight: bold;
      font-size: 0.85rem;
      letter-spacing: 1px;
      text-transform: uppercase;
    }
    .navbar-nav .nav-link:hover {
      color: #fff;
    }
    .navbar-brand{
      width: 20%;
    }
    .navbar-brand img {
      height: 100%;
      width: auto;

    }
    .navbar-collapse {
      justify-content: space-between;
      width: 100%;
    }
    @font-face {
      font-family: 'BTB';
      src: url("fonts/built\ titling\ bd.otf") format('opentype');
     }
    .IMG1{
      width: 30%;
     }
      @font-face {
      font-family: 'BTS';
      src: url("fonts/built\ titling\ rg.otf") format('opentype');
     }
      div{
        display: flex;
        flex-direction: row;
        justify-content: center;
        font-family: "BTB";
    }
    div{
        display: flex;
        flex-direction: row;
        justify-content: center;
        font-family: "BTB";
    }
    h1{color: darkgrey;}
        .form-section {
      max-width: 900px;
      margin: 50px auto;
      padding: 20px;
      text-align: center;
    }

    .form-section p {
      display: flex;
      flex-direction: column;
      gap: 40px;
      margin-bottom: 30px;
      font-size: 0.95rem;
      letter-spacing: 0.5px;

    }

    form {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }
    .txt1{
      font-family: "BTS";
     }
    .form-group {
      flex: 1 1 45%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    label {
      font-size: 0.85rem;
      margin-bottom: 5px;
      text-align: left;
    }

    .formInput{
      padding: 12px;
      border: none;
      background-color: #fff;
      color: #000;
      font-size: 0.95rem;
    }

    .checkbox-group {
      flex: 1 1 100%;
      text-align: left;
    }

    .checkbox-group input {
      margin-right: 8px;
    }

    .checkbox-group label {
      font-size: 0.85rem;
    }

    .submit-button {
      margin-top: 30px;
      padding: 12px 30px;
      background-color: #00000000;
      color: #fff;
      border: 1px solid #fff;
      cursor: pointer;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .submit-button:hover {
      background-color: #fff;
      color: #000;
    }

    @media (max-width: 768px) {
      .form-group {
        flex: 1 1 100%;
      }
    }
    span{
      font-family: "BTS";
    }
      @keyframes spin {
    100% {
      transform:rotate(360deg);
    }
  }
  
  .recordPlayer {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 20px;
  }
  .vinyl {
    height: 150px;
    margin-left: 55px;
    padding: 10px;
    animation: spin 1.88s linear infinite;
    position: absolute;
  }
  .vinylCover {
    height: 150px;
    position: relative;
    z-index: 1;
    margin-right: 55px;
  }
  #vinyl-gallery * {
    all: unset;
  }
 
  #vinyl-gallery {
    all: initial!important;
    width: 100%!important;
    height: 230px!important;
    margin: 30px 0!important;
    display: flex!important;
    flex-direction: row!important;
    position: relative!important;
    margin-left: -6px!important;
    
  }
 
  #vinyl-gallery .vinyl {
      all:unset!important;
    perspective: 500px !important;
    width: 18px!important;
    transition: width 0.5s!important;
  }
 
  #vinyl-gallery .vinyl:hover {
    width: 148px!important;
  }
 
  #vinyl-gallery img {
      all:unset!important;
    transition: transform 0.5s, width 0.5s, height 0.5s, margin-top 0.5s!important;
    width: 180px!important;
    height: 180px!important;
    transform: rotateX(0deg) rotateY(25deg)!important;
    transform-style: preserve-3d!important;
    border-radius: 4px!important;
    border: 2px solid rgba(0, 0, 0, 0.1)!important;
object-fit: cover!important;
  }
 
  #vinyl-gallery .vinyl:hover img {
    transform: rotateX(0deg) rotateY(10deg)!important;
    width: 188px!important;
    height: 188px!important;
    margin-top: -2px!important;
  }
 
  #vinyl-gallery .title {
    color: #000000;
    display: block;
    visibility: hidden;
    position: absolute;
    bottom: 0px;
    text-align: center;
    width: 100%;
    padding-left: 6px;
  }
 
  #vinyl-gallery .vinyl:nth-child(n):hover + .title {
    visibility: visible;
  }
  </style>
</head>
<body style="color: #cfcfcf80;" >
  <section class="hidden">
    <div class="content">
    <nav class="navbar navbar-expand-lg">
  <div class="container d-flex justify-content-center align-items-center"> 
    <div class="d-flex">
      <ul class="navbar-nav"  style="margin: 0; padding: 0;">
        <li class="nav-item"><a class="nav-link" href="menu_pages/Tours/tours.php">Tours</a></li>
        <li class="nav-item"><a class="nav-link" href="menu_pages/BookHotel/book.php">Book Hotel</a></li>
      </ul>
    </div>
    <a class="navbar-brand d-flex justify-content-center align-items-center" href="#" style="width:300px;height:80px;margin: 0; padding: 0;">
      <img src="images/logo.png" alt="Rolling Loud Logo">
    </a>
    <div class="d-flex">
      <ul class="navbar-nav" style="margin: 0; padding: 0;">
        <li class="nav-item"><a class="nav-link" href="menu_pages/Shop/shop.php">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="menu_pages/FAG_INFO/fag_info.php">FAQ/INFO</a></li>
      </ul>
    </div>
  </div>
</nav>
    </div>
  </section>
  <br><br>
  <section class="hidden">
    <div class="content">
      <div class="container">
        <h1>LOUD STREETZ 2025</h1>
      </div>
    </div>
  </section>
<br><br>
  <section class="hidden">
    <div class="content">
    <div class="container" style="display: flex;flex-direction:column;gap:40px">
      <div><img class="IMG1" src="images/index_pictures/carti.png" alt=""><img class="IMG1" src="images/index_pictures/travis.png" alt=""><img class="IMG1" src="images/index_pictures/ye.png" alt=""></div>
      <div class="line" style="width: 100%; height:1px;background-color:#cfcfcf80"></div>
    </div>
    </div>
  </section>
  <br><br>
    <section class="hidden">
    <div class="content">
      <div class="container">
        <h1>CLASSICS ARE HERE</h1><br><br>
      </div>
    </div>
  </section>
  <br>
    <section class="hidden">
    <div class="content">
      <div class="container">
        <img src="images/RapHiphopGIF.gif" alt="Hip Hop Dance" width="100%" >
      </div>
    </div>
  </section>
  <br><br>
    <section class="hidden">
    <div class="content">
      <div class="container">
            <div class="line" style="width: 100%; height:1px;background-color:#cfcfcf80"></div>
      </div>
    </div>
</section>
<br><br>
<section class="hidden">
    <div class="content">
      <div class="container">
        <h1>Vinyls</h1>
      </div>
    </div>
</section>
<br>
<section class="hidden">
    <div class="content">
      <div class="container">
        <div class="recordPlayer">
          <a href="menu_pages/Shop/shop.php"><img class="vinyl" src="images/vinyl/vinyl-black.png">
          <img class="vinylCover" src="images/vinyl/shobee-howls-Cover-Art.webp"></a>
        </div>
      </div>
  <div class="container">
  <div class="" id="vinyl-gallery">
  <div class="vinyl">
    <img src="images/vinyl/a_ap-rocky-long_live_a_ap-Cover-Art.webp">
  </div>
  <div class="title">Artist - Album</div>


  <div class="vinyl">
    <img src="images/vinyl/playboi-carti-die-lit-Cover-Art.webp"/>
  </div>
  <div class="title">Artist - Album</div>

  <div class="vinyl">
    <img src="images/vinyl/aphex-twin-selected-ambient-works-85-92-Cover-Art.webp"/>
  </div>
  <div class="title">Artist - Album</div>

  <div class="vinyl">
    <img src="images/vinyl/kendrick-lamar-gnx-Cover-Art.webp"/>
  </div>
  <div class="title">Artist - Album</div>

  <div class="vinyl">
    <img src="images/vinyl/westside-gunn-hitler-wears-hermes-8-side-b-cover-art.webp"/>
  </div>
  <div class="title">Artist - Album</div>

    <div class="vinyl">
    <img src="images/vinyl/madd-sensus-Cover-Art.webp"/>
  </div>
  <div class="title">Artist - Album</div>

  <div class="vinyl">
    <img src="images/vinyl/travis-scott-utopia-Cover-Art.webp"/>
  </div>
  <div class="title">Artist - Album</div>

    <div class="vinyl">
    <img src="images/vinyl/a_ap-rocky-at_long_last_a_ap-Cover-Art.webp"/>
  </div>
  <div class="title">Artist - Album</div>

  <div class="vinyl">
    <img src="images/vinyl/a_ap-rocky-livelovea_ap-cover-art.webp"/>
  </div>
  <div class="title">Artist - Album</div>

  <div class="vinyl">
    <img src="images/vinyl/xxxtentacion-skins-Cover-Art.webp"/>
  </div>
  <div class="title">Artist - Album</div>

  <div class="vinyl">
    <img src="images/vinyl/kendrick-lamar-to-pimp-a-butterfly-Cover-Art.webp"/>
  </div>
  <div class="title">Artist - Album</div>

</div>
</div>
</div>
</section>
  <br><br>
    <section class="hidden">
    <div class="content">
      <div class="container">
            <div class="line" style="width: 100%; height:1px;background-color:#cfcfcf80"></div>
      </div>
    </div>
</section>
  <br><br>
    <section class="hidden">
    <div class="content">
      <div class="container">
        <h1>BEST PHOTOS OF THE TOUR</h1><br><br>
      </div>
    </div>
    <br>
  </section>
      <section class="hidden">
    <div class="content">
      <div class="container">
        <div class="container" style="display: flex;flex-direction:column;gap:1px" >
  <div class="row">
    <img src="images/tours_images/1.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/2.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/3.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/4.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/5.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/6.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/7.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/8.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/9.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/10.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/11.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/12.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/13.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/14.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/15.png" alt="" class="col-3" style="margin: 0; padding: 0;">
    <img src="images/tours_images/16.png" alt="" class="col-3" style="margin: 0; padding: 0;">
  </div>
      <div class="form-group" style="flex: 1 1 100%; text-align: center; align-items: center;">
        <a type="submit" href="menu_pages/Tours/tours.php" class="submit-button" style="width: 20%;text-decoration:none;" >GET TICKETS </a>
    </div>
</div>
</div>
</div>
<br><br>
  </section>
      <section class="hidden">
    <div class="content">
      <div class="container">
            <div class="line" style="width: 100%; height:1px;background-color:#cfcfcf80"></div>
      </div>
    </div>
</section>
  <br><br>
      <section class="hidden">
    <div class="content">
      <div class="container">
        <h1>SHOP IN LD STRTZ MERCH</h1><br><br>
      </div>
    </div>
  </section>
  <br>
      <section class="hidden">
    <div class="content">
      <div class="container">
        <div class="container" style="display: flex;flex-direction:column;gap:1px">
  <img src="images/index_pictures/shop2.png" width="100%" alt="">
  <div class="form-group" style="flex: 1 1 100%; text-align: center; align-items: center;">
        <a type="submit" href="menu_pages/Shop/shop.php" class="submit-button" style="width: 20%;text-decoration:none;" >SHOP NOW</a>
  </div>
      </div>
    </div>
  </section>
  <br><br>
  <section class="hidden">
    <div class="content">
      <div class="container">
            <div class="line" style="width: 100%; height:1px;background-color:#cfcfcf80"></div>
      </div>
    </div>
</section>
<br><br>
  <section class="hidden">
    <div class="content">
      <div class="container">
<nav class="navbar navbar-expand-lg">
  <div class="container d-flex justify-content-around align-items-center" > 
    <div class="d-flex">
      <ul class="navbar-nav ">
        <li class="nav-item"><a class="nav-link" href="menu_pages/FAG_INFO/fag_info.php">FAQ/INFO</a></li>
        <li class="nav-item"><a class="nav-link" href="menu_pages/Media/media.php">MEDIA</a></li>
        <li class="nav-item"><a class="nav-link" href="menu_pages/Privacy_policy/privacy.php">PRIVACY POLICY</a></li>
        <li class="nav-item"><a class="nav-link" href="menu_pages/Terms_use/TermsUse.php">TERMS OF USE</a></li>
        <li class="nav-item"><a class="nav-link" href="menu_pages/Acessibilty/acessibility.php">ACCESSIBILITY</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
</div>
</div>
  </section>
  <section class="hidden">
    <div class="content">
      <div class="container">
      <div class="container" style="padding-bottom:80px;padding-top:10px" >
<span style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Loud StreetX LLC is committed to facilitating the accessibility and usability of its website, loudstreetx.com (the “Website”), for individuals with sensory disabilities. To support this commitment, Loud StreetX will gradually implement the relevant portions of the World Wide Web Consortium’s Web Content Accessibility Guidelines 2.0 Level AA (“WCAG 2.0 AA”) as its web accessibility standard. This will help ensure that the Website becomes more accessible to users with sensory impairments. <br><br>
Until our digital media upgrades are complete, if you experience difficulty accessing any part of our website, apps, or internal systems to obtain information, purchase tickets, or for any other reason, please call +212 5 35 22 10 42 and one of our representatives in Fes, Casablanca, Agadir, or Rabat will be happy to assist you.</span>
</div>
      </div>
    </div>
  </section>
  <script>
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
        }
      });
    }, {
      threshold: 0.1
    });

    document.querySelectorAll('.hidden').forEach(section => {
      observer.observe(section);
    });
  </script>
</body>
</html>