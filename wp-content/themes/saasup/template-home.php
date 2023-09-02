<?php
// Template Name: Home Template
get_header('home'); 
$options = get_option('saasup_theme');
?>
  <main>
    <section class="features_area section_padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="features-heading d-flex justify-content-center text-center">
              <div class="features_text">
                <p class="section_btn"><?php the_field('feature_title'); ?></p>
                <h2><?php the_field('feature_subtitle'); ?></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center"> 
          <?php 
               $features = new WP_Query(array(
                    'post_type' => 'features',
                    'posts_per_page'=>'3',
                ));
            while($features->have_posts()): $features->the_post();
           ?>
          <div class="col-md-6 col-lg-4">
            <div class="features_item text-center">
               <?php the_post_thumbnail(); ?>
               <h3><?php the_title();?></h3>
               <?php the_content(); ?>
              <a href="<?php the_permalink(); ?>"  class="stretched-link">Learn More </a>
            </div>
          </div>
        <?php endwhile; wp_reset_postdata() ?>
        </div>
      </div>
    </section>
    <!-- platform area strat -->
    <section class="plaform_area">
      <div class="container">
        <div class="row align-items-center platfom-background">
          <div class="col-lg-6">
            <div class="platform">
              <h2 data-aos="fade-down-left"><?php the_field('cost_title'); ?></h2>
              <p><?php the_field('cost_description'); ?></p>
              <div class="cost d-flex">
                <img src="<?php the_field('cost_icon_img'); ?>" loading="lazy" alt="cost-icon">
                <div class="cost-text">
                  <h3><?php the_field('cost_short_title'); ?></h3>
                  <p><?php the_field('cost_short_description'); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="<?php the_field('cost_right_image'); ?>" loading="lazy"    alt="platfomr-images">
          </div>
        </div>
      </div>
    </section>
    <!-- platform area end -->
    <!-- smarter area strat  -->
    <section class="smarter_area section_padding
    ">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="features-heading d-flex justify-content-center text-center  ">
              <div class="features_text smarter_box" >
                 
                <p class="section_btn"><?php the_field('work_title'); ?></p>
                <h2><?php the_field('work_sub_title'); ?></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row nav nav-pills">
          <?php 
              $i=0;
              if(have_rows('work_items')):
                while(have_rows('work_items')):the_row();
           ?>
          <div class="col-md-4">
            <div class="smarter-item nav-link <?php if ($i==0){echo"active";}?>"  data-bs-toggle="pill" data-bs-target="#pills-<?php echo $i;?>"  >
              <h3><?php the_sub_field('work_tab_title'); ?></h3>
            </div>
          </div>
          <?php $i++; endwhile; endif; ?>

        </div>
        <div class="row tab-content " id="pills-tabContent">  
          <?php 
              $i=0;
              if(have_rows('work_items')):
                while(have_rows('work_items')): the_row();
           ?>
          <div class="col-12 tab-pane fade<?php if ($i==0) {echo" show active"; } ?>" id="pills-<?php echo $i; ?>">
            <div class="smarter-item-content">
               <div class="row">
                <div class="col-md-6 create-text">
                  <div class="create d-flex align-items-center">
                    <img src="<?php the_sub_field('work_icon_image');?>" alt="work_img">
                    <h3><?php the_sub_field('work_title'); ?></h3>
                  </div>
                  <p><?php the_sub_field('work_tab_description'); ?></p>
                  <a href="<?php the_sub_field('work_button_url'); ?>" class="btn-1 btn-over"><?php the_sub_field('work_button_name'); ?></a>
                </div>
                <div class="col-md-6">
                  <img src="<?php the_sub_field('work_right_image'); ?>"  alt="create-img">
                </div>
               </div>
            </div>
          </div>
          <?php $i++; endwhile; endif; ?>

        </div>
        
         

      </div>
    </section>
 
    <!-- smarter area end  -->
    <!-- Trusted_area section strat  -->
    <section class="Trusted_area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="trusted">
              <div class="features-heading d-flex justify-content-center text-center  ">
                <div class="features_text trusted_box" >
                  <p class="section_btn"><?php the_field('testimonial_title') ?></p>
                  <h2> <?php the_field('testimonial_sub_title') ?></h2>
                </div>
              </div>
              <div class="trusted_text owl-carousel owl-theme " id="mycroues">
                <?php 
                    if(have_rows('client_reviews')):
                      while(have_rows('client_reviews')): the_row();
                 ?>
                   <div class="masud justify-content-center d-flex">
                      <div class="trusted_text1 text-center ">
                        <span class="quote" >“</span>
                        <p><?php the_sub_field('client_review_text') ?></p>
                        <div class="trusted_img">
                            <img src="<?php the_sub_field('client_image') ?>" loading="lazy" alt="<?php the_sub_field('client_name') ?>">
                            <h3><?php the_sub_field('client_name') ?></h3>
                            <p><?php the_sub_field('client_designation') ?></p>

                            <?php 
                                 $rating = get_sub_field('client__rating');
                                if($rating==1){
                                  echo '<i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>';
                                }elseif($rating == 2){
                                    echo '<i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-regular fa-star"></i>
                                          <i class="fa-regular fa-star"></i>
                                          <i class="fa-regular fa-star"></i>';
                                }elseif($rating == 3){
                                    echo '<i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-regular fa-star"></i>
                                          <i class="fa-regular fa-star"></i>';
                                }elseif($rating == 4){
                                    echo '<i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-regular fa-star"></i>';
                                }elseif($rating == 5){
                                    echo '<i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>';
                                }
                             ?>

                        </div>
                      </div>
                   </div>
                 <?php endwhile; endif; ?>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Trusted_area section end  -->

    <!-- simple_area section  strat -->
     <section class="simple_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md12">
            <div class="simple_box">
              <p class="section_btn"><?php the_field('pricing_title'); ?></p>
              <h2><?php the_field('pricing_sub_title'); ?></h2>
              <p><?php the_field('pricing_description'); ?> </p>
              <h3><?php the_field('pricing_payment_title'); ?> </h3>
              <div class="simple_crade_img">
                <ul class="d-flex justify-content-between"> 
                  <?php  if (have_rows('payment_method_item')):
                         while(have_rows('payment_method_item')): the_row();
                   ?>
                  <li><img src="<?php the_sub_field('payment_method_image'); ?> ?>" alt="simple_crade_img"></li>
                <?php endwhile; endif; ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-12">
            <div class="row">
              <?php 
                   $pricing = new WP_Query(array(
                      'post_type' => 'pricing',
                      'posts_per_page' => 2,
                      'order' => 'ASC',
                   ));
                   while($pricing->have_posts()): $pricing->the_post();
               ?>
              <div class="col-md-6">
                <div class="basic"  >
                  <div class="basic_heading d-flex justify-content-between align-items-center">
                    <h2><?php the_field('package_title');?></h2>
                    <p class="section_btn <?php if( get_field('package_badge') =='Popular') { echo"btn-99";}?> "><?php the_field('package_badge');?></p>
                  </div>
                  <div class="basic_month text-center"> 
                    <h2><?php the_field('package_monthly');?><span>/month</span></h2>
                    <p class="section_btn"><?php the_field('package_yearly');?> </p>
                  </div>
                  <div class="basic_text text-center">
                    <ul>
                      <?php  if (have_rows('package_item')):
                         while(have_rows('package_item')): the_row();
                       ?>
                        <li><?php the_sub_field('package_single_item');?></li>
                       <?php endwhile; endif; ?>
                    </ul>
                     
                    <a href="<?php the_permalink();?>" class="btn-1"><?php the_field('package_button');?></a>
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata() ?>
              
            </div>
          </div>
        </div>
      </div>
     </section>
     
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
     <!--  trial_area section end  -->

     <!-- Blog_area section strat  -->
     <section class="Blog_area section_padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="features-heading d-flex justify-content-center text-center" >
              <div class="features_text">
                <p class="section_btn"> <?php echo the_field('blog_title');?> </p>
                <h2> <?php the_field('blog_sub_title');?> </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row ">
           <?php 
              $recent_post = new WP_Query(array(
                  'post_type' => 'post',
                  'posts_per_page' => 2,
              ));
               while($recent_post->have_posts()): $recent_post->the_post();
           ?>
            <div class="col-lg-6">
              <div class="blog_boxs">
                <div class="blog_box" >
                  <?php the_post_thumbnail(); ?>
                  <div class="blog-button">
                    <?php $categories = get_the_category();
                      foreach ($categories as $category): ?>
                        
                       <a href="<?php echo get_category_link($category->term_id)?>" class="btn-1"><?php echo $category->name; ?></a>
                     <?php endforeach; ?>
                  </div>
                </div>
                <div class="blog_text" >
                  <p class="blog-p"><?php the_time('F d, Y') ?></p>
                  <h2><?php the_title(); ?></h2>
                  <p><?php echo wp_trim_words(get_the_content(),10,'.....'); ?> </p>
                  <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata();?>
        </div>
      </div>
     </section>
     <!-- Blog_area section end -->
     

  </main>

  <?php get_footer(); ?>