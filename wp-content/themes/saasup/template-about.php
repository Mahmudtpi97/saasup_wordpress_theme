<?php 
// Template Name: About Template
get_header(); 
   
?> 
  <main>
   <section class="about_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="features-heading d-flex justify-content-center text-center about_features">
                  <div class="features_text" >
                    <h2><?php the_field('page_title'); ?></h2>
                    <p><?php the_field('page_description'); ?></p>
                  </div>
                </div>
              </div>
        </div>
        <div class="row about-img-box">
            <div class="col-md-8">
                <div class="about-img">
                    <img src="<?php the_field('what_we_big_image'); ?>" alt="<?php the_field('what_we__title'); ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-img1">
                    <img src="<?php the_field('what_we_small_image'); ?>" alt="<?php the_field('what_we__title'); ?>">
                </div>
            </div>
        </div>
        <div class="row about_text_box">
            <div class="col-md-4">
                <div class="about-text">
                    <h2><?php the_field('what_we__title'); ?></h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="about-discrition">
                    <p class="discrition-p"> <?php the_field('what_we_description'); ?> </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="counter-box d-flex justify-content-between text-center">
                    <?php  
                     $i=1;
                       if(have_rows('about_counter_item')):
                        while(have_rows('about_counter_item')): the_row();
                     ?>
                    <div class="counter-text text-center">
                      <div class="counter-h text-center"> 
                        <h2 class="counter<?php echo $i;?>"><?php the_sub_field('counter_item_number'); ?> </h2>
                        <h2  class="ck"><?php the_sub_field('counter_item_short_heading'); ?></h2>
                      </div>
                        <p><?php the_sub_field('counter_text'); ?></p>
                    </div>
                 <?php $i++; endwhile; endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="Mission">
                    <h2><?php the_field('mission_title'); ?></h2>
                    <p><?php the_field('mission_description'); ?></p>
                </div>
            </div>
            <div class="col-xl-6"> 
                <div class="mission_img">
                    <img src="<?php the_field('mission_image'); ?>" alt="about-img">
                </div>
            </div>
        </div>
    </div>
   </section>

   <section class="Our_values ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="features-heading d-flex justify-content-center text-center features_value">
                  <div class="features_text" >
                    <p class="section_btn"><?php the_field('values_title'); ?></p>
                    <h2><?php the_field('values_sub_title'); ?></h2>
                  </div>
                </div>
              </div>
        </div>
        <div class="row">
            <?php if (have_rows('values_items')):
                while(have_rows('values_items')): the_row();
             ?>
            <div class="col-xl-6">
                <div class="value_item">
                    <div class="img">
                        <img src="<?php the_sub_field('values_item_image'); ?>" alt="about-img">
                    </div>
                    <div class="value_text">
                        <h3><?php the_sub_field('values_item_title'); ?></h3>
                        <p><?php the_sub_field('values_item_description'); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
            
        </div>
    </div>
   </section>

   <section class="join_area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="join_heading sticky-top">
                    <a href="#" class="btn-1"><?php the_field('career_title'); ?></a>
                    <h3><?php the_field('career_sub_title'); ?></h3>
                </div>
            </div>
            <div class="col-md-8">
                <?php 
                    $career = new WP_Query(array(
                        'post_type' => 'careers',
                        'posts_per_page' => 3,
                        'order' => 'ASC',
                    ));
                    while($career->have_posts()): $career->the_post();
                 ?>
                <div class="web-desgn">
                  <h3><?php the_title(); ?></h3>
                  <ul class="d-flex align-items-center">
                    <li><?php the_field('career_address') ?> |</li>
                    <li class="web-link"> <?php the_field('career_time') ?> </li>
                  </ul>
                  <p><?php the_field('career_short_description') ?> </p>
                  <a href="<?php the_permalink()?> " class="btn-2"><?php the_field('career_button_text') ?> </a>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
                

                <div class="web-desgn text-center web-desgn1 ">
                  <h3><?php the_field('career_not_found_title') ?></h3>
                   <p class="web-p"><?php the_field('career_not_found_description') ?></p>
                   <a href="<?php the_field('career_not_found_button_url')?>" class="btn-2 web-link2"><?php the_field('career_not_found_button_text') ?></a>
                </div>
            </div>
        </div>
    </div>
   </section>



  </main>
<?php get_footer(); ?> 