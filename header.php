
<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <!-- Mobile device Support -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Site Title -->
  <title><?php  wp_title('|', true, 'right'); ?></title>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- Dev Icons -->
  <link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<!-- ==================== HEADER ======================= -->
<header>

  <!-- ============== Navigation ================= -->
  <nav>
    <div class="navWrap">
      <!-- Title Box -->
      <div class="titleBox">
        <h1 class="siteTitle hvr-grow">
          <a href="http://www.andrewdyke.me">Andrew Dyke</a>
        </h1>
        <h2>Mobile, tablet and desktop.</h2>
      </div><!-- /.titleBox -->
      <!-- Menu -->
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </div> <!-- /.navWrap -->
  </nav>
  <!-- ================ /navigation ================= -->

  <!-- ======== Header Content ========== -->
  <div class="container">
   <!--  <section class="headerText"> -->
      <div class="headerBlurb">
        <!-- <h3>My name is <span>Andrew</span></h3> -->
        <h3>I am a <span>Front-End Developer</span></h3>
        <h3>Based in <span>Toronto</span>.</h3>
        <h4>I build <span>custom responsive websites</span><br>
        and would love to build something <span>for you.</span></h4>
      </div>
   <!--  </section> -->
  </div>
  <!-- /header .container -->

</header><!--/.header-->

