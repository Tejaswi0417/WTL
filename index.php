<!DOCTYPE html>
<html lang="en">
<head>
<title>Camping</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.jqtransform.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'random',
        pagination: false, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    });
    $("#tabs").tabs();
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1">
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="index.php"><img src="images/logo.png" alt=""></a></h1>
      <div class="clear"></div>
    </div>
    <div class="menu_block">
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="index.php">Home</a></li>
          <li class="with_ul"><a href="about.php">About</a>
            <ul>
              <li><a href="#">Agency</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Team</a></li>
            </ul>
          </li>
          <li><a href="gallery.php">Gallery</a></li>
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
  <div class="container_12">
    <div class="grid_12">
      <div class="slider-relative">
        <div class="slider-block">
          <div class="slider"> <a href="#" class="prev"></a><a href="#" class="next"></a>
            <ul class="items">
              <li><img src="images/c1.jpg" alt="">
                <div class="banner">
                  <div>Make CAMPING Experience Better</div>
                  <br>
                  <span> Watch Nature Closely</span> </div>
              </li>
              <li><img src="images/c2.jpg" alt=""></li>
              <li><img src="images/c1.jpg" alt=""></li>
              <li><img src="images/c2.jpg" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container_12">
      <div class="grid_12">
        <h3>Top Camping Sites in India</h3>
      </div>
      <div class="boxes">
        <div class="grid_4">
          <figure>
            <div><img src="images/n1.jpg" alt=""></div>
            <figcaption>
              <h3>Matheran</h3>
            Matheran Camping Matheran Hill Station is one of the most surreal sites near which is only 110 kilometers from Pune and 80 kilometers from Mumbai. This exceptional and unexplored campsite is situated around Neral, which is perfect for an awesome weekend getaway.<a href="#" class="btn">Details</a> </figcaption>
          </figure>
        </div>
        <div class="grid_4">
          <figure>
            <div><img src="images/n2.jpg" alt=""></div>
            <figcaption>
              <h3>Pawana</h3>
              This camping site is quite famous among travelers as well as locals. It is one of the most liked as well as popular camping sites in Maharashtra. And the most significant factor which makes it such popular is the beauty of the place. <a href="#" class="btn">Details</a> </figcaption>
          </figure>
        </div>
        <div class="grid_4">
          <figure>
            <div><img src="images/n3.jpg" alt=""></div>
            <figcaption>
              <h3>Kolad</h3>
              Kolad is perfect for those who want some adventure and thrill while camping. Kolad’s camping site is on the bank of the river Kundalika. The beautiful view of this campsite will mesmerize you. <a href="#" class="btn">Details</a> </figcaption>
          </figure>
        </div>
        <div class="clear"></div>
      </div>
      <div class="grid_8">
        <div id="tabs">
          <ul>
            <li><a href="#tabs-1">Also visit this site</a></li>
           
          </ul>
          <div class="clear"></div>
          <div class="tab_cont" id="tabs-1"> <img src="images/s4.jpg" alt="">
            <div class="extra_wrapper">
              <div class="text1">Ladakh</div>
             Camping in Ladakh is certainly possible and thousands of people camp every year in Ladakh. You need to take care of some points that will help you plan a better camping trip to Leh Ladakh.
              <div class="clear "></div>
            </div>
            <div class="clear cl1"></div>
            <img src="images/s5.jpg" alt="">
            <div class="extra_wrapper">
              <div class="text1 tx1">Manali </div>
             Manali is a town, near Kullu town in Kullu district in the Indian state of Himachal Pradesh. It is situated in the northern end of the Kullu Valley, formed by the Beas River.
              <div class="clear"></div>
             
              <div class="clear "></div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="newsletter_title">NewsLetter </div>
        <div class="n_container">
          <form id="newsletter" action="#">
            <div class="success">Your subscribe request has been sent!</div>
            <div class="text1">Sign up to receive our newsletters </div>
            <label class="email">
              <input type="email" value="email address" >
              <span class="error">*This is not a valid email address.</span> </label>
            <div class="clear"></div>
            <a href="#" class="" data-type="submit"></a>
          </form>
         
        </div>
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