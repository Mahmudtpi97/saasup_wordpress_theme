<?php 
    // Template Name: Careers Template
    get_header();
 ?>
  <main>
     <section class="careers_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center about_features">
                      <div class="features_text" >
                        <h2><?php the_field('page_title'); ?></h2>
                        <p><?php the_field('page_description'); ?></p>
                        <a href="<?php the_field('page_heading_button_url') ?>" class="btn-2"><?php the_field('page_heading_button') ?></a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    if(have_rows('career_hero_image')):
                    while(have_rows('career_hero_image')): the_row();
                 ?>
                <div class="col-lg-6">
                    <div class="careers-img">
                        <img src="<?php the_sub_field('hero_image') ?>" alt="hero_image">
                    </div>
                </div>
            <?php endwhile; endif; ?>
            </div>
        </div>
     </section>


     
    <!-- platform area strat -->
     <section class="careers-icon section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center  ">
                        <div class="features_text trusted_box" >
                          <p class="section_btn"><?php the_field('values_title') ?></p>
                          <h2><?php the_field('values_sub_title') ?></h2>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row">
                 <?php 
                    if(have_rows('values_items')):
                    while(have_rows('values_items')): the_row();
                 ?>
                <div class="col-lg-4 col-md-6  ">
                    <div class="social_icon">
                        <div class="social_img">
                            <div class="social" style="background:<?php the_sub_field('icon_image_bg_color'); ?>">
                                <img src="<?php the_sub_field('item_icon_image'); ?>" alt="">
                            </div>
                            <div class="social_text">
                                <h3><?php the_sub_field('item_title'); ?></h3>
                            </div>
                        </div>
                        <p><?php the_sub_field('item_description'); ?></p>
                    </div>
                </div>
               <?php endwhile; endif; ?>
               
            </div>
        </div>
     </section>
    
     <section class="current-job join_area section_padding">
        <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="features-heading d-flex justify-content-center text-center  ">
                    <div class="features_text trusted_box" >
                       
                      <h2>Current job open positions</h2>
                    </div>
                  </div>
              </div>    
            </div>
            <div class="row"> 
                <?php 
                    $career = new WP_Query(array(
                        'post_type' => 'careers',
                        'posts_per_page' => 3,
                        'order' => 'ASC',
                    ));
                    while($career->have_posts()): $career->the_post();
                 ?>
              <div class="col-md-6">
                <div class="web-desgn">
                  <h3><?php the_title(); ?></h3>
                  <ul class="d-flex align-items-center">
                    <li><?php the_field('career_address') ?> |</li>
                    <li class="web-link"> <?php the_field('career_time') ?> </li>
                  </ul>
                  <p><?php the_field('career_short_description') ?> </p>
                  <a href="<?php the_permalink()?> " class="btn-2"><?php the_field('career_button_text') ?> </a>
                </div>
              </div>
               <?php endwhile; wp_reset_postdata(); ?>
               
            </div>
        </div>

     </section>

  </main>

<?php get_footer();?>