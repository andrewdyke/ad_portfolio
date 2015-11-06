
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
            <h2>About Me</h2>
           <!--  <img src="" alt="A photo of Andrew Dyke"> -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eos consequatur et recusandae officiis quae. Molestias, adipisci doloribus ratione asperiores voluptates. Quae amet ipsa enim architecto dolorem, ducimus itaque soluta.</p>
          </div>
        </section>
      <!-- ======================== /about Me =========================== -->



      <!-- ====================== Portfolio ======================== -->
      <section id="portfolio">
        <div class="container">
          <h2 class="sectionTitle">Featured Work</h2>

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
          <h2 class="sectionTitle">Skills</h2>
          <div class="skillBox">
          <?php //Creating a custom query to retrieve and display portfolio items 
          $skillsQuery = new WP_Query(
            array(
              'post_type'=>'skills'
              )
          ); 
          ?>
          <?php //If there are skills posts.. ?>
          <?php if ($skillsQuery->have_posts()): ?>
            <?php //Loop through skills posts and put dynamic content in html tags ?>
            <?php while($skillsQuery->have_posts()): $skillsQuery->the_post(); ?>
            <!-- Skill Box -->
              <div class="skill">
                <h3><?php the_title(); ?></h3>
                <?php the_post_thumbnail('medium'); ?>
              </div> 
            <!-- /.skill Box -->
            <?php endwhile;//end skills loop ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
          </div>
        </div>
      </section>
      <!-- ========================= /Skills ======================== -->


      <!-- ======================== Contact ========================= -->
      <section id="contact">
        <div class="formWrap">
          <h2 class="sectionTitle">Contact Me</h2>  
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


