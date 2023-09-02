<?php 
  get_header();
  // Template Name: Integration Template;
  $options = get_option('saasup_theme');
 ?>
  <main>
    <section class="featur_heading_area section_padding">
        <div class="container">
            <div class="row Integrations_bottom">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center">
                      <div class="features_text" >
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                      </div>
                    </div>
                </div> 
            </div>
            <div class="row">
                <?php 
                  $integrations = new WP_Query(array(
                    'post_type' => 'integrations',
                    'order' => 'ASC',
                  ));
                  
                  while($integrations->have_posts()): $integrations->the_post();
                 ?>
                <div class="col-lg-4 col-md-6  ">
                    <div class="social_icon">
                        <div class="social_img d-flex align-items-center">
                            <div class="social" style="background:<?php the_field('icon_bg_color'); ?>">
                                <i class="<?php the_field('post_icon_name'); ?>"></i>
                            </div>
                            <div class="social_text">
                                <h3><?php the_title(); ?></h3>
                                 <?php 
                                     $cats = get_the_terms(get_the_id(),'integrations_taxonomy');
                                    foreach ($cats as $cat):
                                    ?>
                                     <a href="<?php the_permalink();?>"><?php echo $cat->name; ?></a> 
                                    <?php endforeach;?>
                            </div>
                        </div>
                        <p><?php the_field('post_short_description'); ?></p>
                        <a href="<?php the_permalink();?>" class="social-a"><?php the_field('post_button_name'); ?></a>
                    </div>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
               
            </div>
        </div>
    </section>


     <!--  trial_area section strat  -->
     <section class="trial_area trial_area_2 section_padding">
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
     <!--  trial_area section end  -->
     <!-- Blog_area section strat  -->
     
     

  </main>
<?php get_footer(); ?>