<?php 
    get_header(); 
    // Template Name: Fatures Template
    $options = get_option('saasup_theme');
 ?>
  <main>
    <section class="featur_heading_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center">
                      <div class="features_text" >
                        <h2><?php the_field('page_title'); ?></h2>
                        <p><?php the_field('page_description'); ?></p>
                      </div>
                    </div>
            </div>
        </div>
    </section>


    <section class="features_area section_padding  ">
      <div class="container">
        <div class="row  ">
          <div class="col-12">
            <div class="features-heading d-flex justify-content-center text-center">
              <div class="features_text" >
                <p class="section_btn"><?php the_field('analytics_feature_title'); ?></p>
                <h2><?php the_field('analytics_feature_sub_title'); ?></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row features-bottom justify-content-center">
           <?php 
               $features = new WP_Query(array(
                    'post_type' => 'features',
                    'oreder'    => 'ASC',
                ));
                   while($features->have_posts()): $features->the_post(); 
                   $cats = get_the_terms(get_the_id(),'features_taxonomy');
                   $catName = $cats[0]->name;
                   if($catName == 'Analytics'):
                   ?>
                  <div class="col-md-6 col-lg-4">
                    <div class="features_item text-center">
                       <?php the_post_thumbnail(); ?>
                       <h3><?php the_title();?></h3>
                       <?php the_content(); ?>
                      <a href="<?php the_permalink(); ?>"  class="stretched-link">Learn More </a>
                    </div>
                  </div>
                <?php endif; endwhile; wp_reset_postdata();  ?>
        </div>
      </div>
    </section>


    <section class="features_area section_padding contact_area  ">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="features-heading d-flex justify-content-center text-center">
              <div class="features_text">
                <p class="section_btn"><?php the_field('integration_feature_title'); ?></p>
                <h2><?php the_field('integration_feature_sub_title'); ?></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row features-bottom justify-content-center">
          <div class="row features-bottom justify-content-center">
           <?php 
               $features = new WP_Query(array(
                    'post_type' => 'features',
                    'oreder'    => 'ASC',
                ));
                 while($features->have_posts()): $features->the_post(); 
                   $cats = get_the_terms(get_the_id(),'features_taxonomy');

                   $catNam = $cats[0]->name;
                   if($catNam == 'Integration'):
                   ?>
                   
                  <div class="col-md-6 col-lg-4">
                    <div class="features_item text-center">
                       <?php the_post_thumbnail(); ?>
                       <h3><?php the_title();?></h3>
                       <?php the_content(); ?>
                      <a href="<?php the_permalink(); ?>"  class="stretched-link">Learn More </a>
                    </div>
                  </div>
                <?php endif; endwhile; wp_reset_postdata();  ?>
          </div>

        </div>
      </div>
    </section>
    

     <!--  trial_area section strat  -->
     <section class="trial_area">
      <div class="container">
        <div class="row trial_bg align-items-center">
          <div class="col-lg-6">
            <div class="trial_text">
              <h2><?php echo $options['trial_title']; ?></h2>
              <p><?php echo $options['trial_description']; ?></p>
              <div class="subsribe-form" >
                <?php 
                     if ($options['trial_formShortCode'] == true) {
                        echo $options['trial_formShortCode'];
                     }
                 else{
                ?>
                <form action="#">
                  <input type="email" placeholder="your mail here...">
                  <input type="submit" class="btn-1" value="Get strat">
                </form>
              <?php } ?>
              </div>
            </div>

          </div>
          <div class="col-lg-6" >
            <img src="<?php echo $options['trial_right_image']['url'] ?>" loading="lazy" alt="trial-img">
          </div>
          
        </div>
      </div>
     </section>

  </main>

  <?php get_footer(); ?>