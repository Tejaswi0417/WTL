<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey | Gallery</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/touchTouch.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<script>
$(window).load(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
$(function () {
    $('.gallery a.gal').touchTouch();
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="index.php"><img src="images/logo.png" alt=""></a></h1>
      <div class="clear"></div>
    </div>
    <div class="menu_block">
      <nav>
        <ul class="sf-menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a>
            <ul>
              <li><a href="#">Agency</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Team</a></li>
            </ul>
          </li>
          <li class="current"><a href="gallery.php">Gallery</a></li>
          <li><a href="tours.php">Packages</a></li>
          
          <li><a href="contacts.php">Contacts</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</header>
<div class="main">
  <div class="content">
    <div class="container_12">
      <div class="grid_12">
        <h3>Our Gallery</h3>
      </div>
      <div class="clear"></div>
      <div class="gallery">
        <div class="grid_4"> <a href="images/big1.jpg" class="gal img_inner"><img src="images/g1.jpg" alt=""></a> </div>

        <div class="grid_4"> <a href="images/big2.jpg" class="gal img_inner"><img src="images/g2.jpg" alt=""></a> </div>

        <div class="grid_4"> <a href="images/big3.jpg" class="gal img_inner"><img src="images/g3.jpg" alt=""></a> </div>
        <div class="clear"></div>
        <div class="grid_4"> <a href="images/big4.jpg" class="gal img_inner"><img src="images/g4.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big5.jpg" class="gal img_inner"><img src="images/g5.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big6.jpg" class="gal img_inner"><img src="images/g6.jpg" alt=""></a> </div>
        <div class="clear"></div>
        <div class="grid_4"> <a href="images/big7.jpg" class="gal img_inner"><img src="images/g7.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big8.jpg" class="gal img_inner"><img src="images/g8.jpg" alt=""></a> </div>
        <div class="grid_4"> <a href="images/big9.jpg" class="gal img_inner"><img src="images/g10a.jpg" alt=""></a> </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="bottom_block">
    <div class="container_12">
      <div class="grid_2 prefix_2">
        <ul>
          <li><a href="#">FAQS Page</a></li>
          <li><a href="#">People Say</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <ul>
          <li><a href="#">Useful links</a></li>
          <li><a href="#">Partners</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <ul>
          <li><a href="#">Insurance</a></li>
          <li><a href="#">Family Travel</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <h4>Contact Us:</h4>
        TEL: 1-800-234-5678<br>
        <a href="#">info@demolink.org</a> </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<footer>
  <!--
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
      <div class="copy"> Journey &copy; 2045 | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a> </div>
    </div>
    <div class="clear"></div>
  </div>-->
</footer>
</body>
</html>