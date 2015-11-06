
<?php 

 // Andrew Dyke | Front End Developer
        // Portfolio


  // Get the header.php file and show it here
  get_header();  
?>


<!-- Mid section of site -->
<div class="main">
    <div class="content">

      <!-- ========================= About Me ========================= -->
        <section id="about">
          <div class="aboutWrap">
            <h2 class="sectionTitle blue"><span>About Me</span></h2>
           <!--  <img src="" alt="A photo of Andrew Dyke"> -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eos consequatur et recusandae officiis quae. Molestias, adipisci doloribus ratione asperiores voluptates. Quae amet ipsa enim architecto dolorem, ducimus itaque soluta.</p>
          </div>
        </section>
      <!-- ======================== /about Me =========================== -->



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
                <div class="portPiece hvr-float">
                  <h3 class="pieceTitle"><?php the_title(); ?></h3>
                  <?php the_post_thumbnail('medium'); ?>
                  <p><?php the_field('short_description'); ?></p>
                </div> 
              <!-- /.portPiece -->
              <?php endwhile;//end portfolio loop ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        </div>
      </section>
      <!-- ================== /Portfolio Section ==================== -->



      <!-- ========================== Skills ============================ -->
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
      <!-- ========================= /Skills ======================== -->


      <!-- ======================== Contact ========================= -->
      <section id="contact">
        <div class="container">
          <h2 class="sectionTitle"><span>Contact Me</span></h2>  
        </div>
        <div class="formWrap">
          <?php  dynamic_sidebar( 'primary-widget-area' ); ?>
        </div>
      </section>
      <!-- ======================== /Contact ========================= -->

    </div> <!-- /.content -->
</div> <!-- /.main -->

<!-- /content mid section -->


<?php  
  // display the footer.php file here
  get_footer(); 
?>


