 <?php 
    get_header();
 ?>
  <main> 
    <?php  while(have_posts()): the_post(); ?>
    <section class="facebook_area section_padding">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center">
                      <div class="features_text">
                        <div class="social_img d-flex align-items-center justify-content-center">
                            <div class="social" style="background:<?php the_field('icon_bg_color'); ?>">
                                <i class="<?php the_field('post_icon_name'); ?>"></i>
                            </div>
                            <div class="social_text">
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                        <p><?php the_field('post_short_description'); ?></p>
                      </div>
                    </div>
                </div> 
            </div>

            <div class="row facebook_padding">
                <div class="col-12 d-flex justify-content-center">
                    <?php the_field('post_full_details'); ?>
                </div>
            </div>
             
               
            </div>
        </div>
    </section>
<?php endwhile; wp_reset_postdata(); ?>
  </main>
<?php get_footer(); ?>