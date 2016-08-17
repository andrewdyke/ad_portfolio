
<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <!-- Mobile device Support -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
  <!-- Site Title -->
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- Dev Icons -->
  <link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- ==================== HEADER ======================= -->
<header id="header">

  <!-- ============== Navigation ================= -->
  <nav id="mainNav">
    <!-- Hamburger -->
      <button class="toggle">
        <span>Toggle Open & Close</span>
      </button>
      <nav class="nav">
        <ul>
          <!-- <li><a href="#mainNav">Home</a></li> -->
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <!-- /hamburger -->
    <div class="navWrap">
      <!-- Title Box -->
      <div class="titleBox">
        <h1 class="siteTitle hvr-grow">
          <a href="http://www.andrewdyke.me">Andrew Dyke</a>
        </h1>
      </div>
      <!-- /.titleBox -->
      <!-- Menu -->
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    
    </div> <!-- /.navWrap -->
  </nav>
  <!-- ================ /navigation ================= -->

  <!-- ======== Header Content ========== -->
  <div class="container cont2">
    <section class="headerText">
      <a href="https://en.wikipedia.org/wiki/Front-end_web_development"><p class="mobileSubTitle">Front-End Developer</p></a>
      <div class="headerBlurb">
        <h3>I am a <span>Front-End Developer</span></h3>
        <h3>Based in <span>Toronto</span>.</h3>
        <h4>I build <span>custom responsive websites</span><br>
        and would love to build something <span>for you.</span></h4>
      </div>
    </section>
  </div>
  <!-- /header .container -->

</header><!--/.header-->
