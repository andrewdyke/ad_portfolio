
<?php 

 // Andrew Dyke | Front End Developer
        // Portfolio

  // Get the header.php file and show it here
  get_header();  
?>


<!-- Mid section of site -->
<div class="main">
    <div class="content">

      <!-- ======================= About Me ======================== -->
        <section id="about">
          <div class="aboutWrap">
            <h2 class="sectionTitle blue"><span>About Me</span></h2>
            <p>Hi I'm Andrew. I recently graduated from the full-time immersive Front-End Developer bootcamp at HackerYou. I love this place. I hope to work somewhere just like this, where I can be surrounded by friendly, creative and supportive people. This is my portfolio. Grab your board and let's go surfing!</p>
          </div>
        </section>
      <!-- ==================== /about Me ========================= -->



      <!-- ====================== Portfolio ======================== -->
      <section id="portfolio">
        <div class="container">
          <h2 class="sectionTitle"><span>Featured Work</span></h2>

          <!-- Pieces Section -->
          <div class="pieces">
            <!-- Creating a custom query to retrieve and display portfolio items -->
            <?php $portfolioQuery = new WP_Query(
              array(
                'post_type'=>'portfolio',
                'cat'=>3,
                'orderby'=>'RAND' //ordering items randomly
                )
            ); ?>
            <!-- If there are porfolio posts.. -->
            <?php if ($portfolioQuery->have_posts()): ?>
              <!-- Loop through portfolio posts and put dynamic content in html tags -->
              <?php while($portfolioQuery->have_posts()): $portfolioQuery->the_post(); ?>
              <!-- Portfolio Piece -->
               <a href="<?php the_field('project_url'); ?>" target="blank">
                <div class="portPiece hvr-float" style="background-image: url(<?php echo get_field('bgimage')['url']; ?>);">
                  <?php the_post_thumbnail('large'); ?>
                  <h3 class="pieceTitle"><?php the_title(); ?></h3>
                  <p><?php the_field('short_description'); ?></p>
                </div>
              </a>
              <!-- /.portPiece -->
              <?php endwhile;//end portfolio loop ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        </div>
      </section>
      <!-- ================== /Portfolio Section ==================== -->


      <!-- ========================= Skills ========================= -->
      <section id="skills">
        <div class="container">
          <h2 class="sectionTitle blue"><span>Skills</span></h2>
          <div class="skillBox">
            <?php //Loop through skills posts and put dynamic content in html tags ?>
            <?php while(has_sub_field('skills') ): ?>
            <!-- Skill Box -->
              <div class="skill">
                <i class="devicons devicons-<?php the_sub_field('skill_icon')?>"></i>
                <h3><?php the_sub_field('skill_name'); ?></h3>
              </div> 
            <!-- /.skill Box -->
            <?php endwhile;//end skills loop ?>
          </div>
        </div>
      </section>
      <!-- ======================== /Skills ======================== -->


      <!-- ======================= Contact ========================= -->
      <section id="contact">
        <h2 class="sectionTitle"><span>Contact Me</span></h2>  
        <p class="info">hello@andrewdyke.me</p>
        <p class="info">+1.705.305.2737</p>
       <!--  <a href="files/andrewDykeResume.pdf"><p>Download my résumé</p></a> -->
        <div class="formWrap">
          <?php dynamic_sidebar( 'primary-widget-area' ); ?>
        </div>
      </section>
      <!-- ======================= /Contact ======================== -->

    </div> <!-- /.content -->
</div> <!-- /.main -->

<!-- /content mid section -->


<?php  
  // display the footer.php file here
  get_footer(); 
?>


