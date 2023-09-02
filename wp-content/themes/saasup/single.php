<?php get_header(); 
 $options = get_option('saasup_theme');

?>
  <main>
     <!--  marketion_area section strat  -->
     <section class="marketing_area section_padding">
        <div class="container">
          <?php 
              while(have_posts()): the_post();
           ?>
            <div class="row">
                <div class="col-12">
                    <div class="marketing_head">
                        <?php the_post_thumbnail(); ?>
                        <div class="row marketing-padding">
                            <div class="col-md-8">
                                <div class="market_text1">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="market_seo">
                                     <div class="market_seo_img">
                                        <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="<?php the_author(); ?>">
                                        <div class="seo_text">
                                            <h4><?php the_author(); ?></h4>
                                            <p>Designer</p>
                                        </div>
                                     </div>
                                     <p><b>Post :</b><?php the_date('F d, Y') ?></p>
                                     <ul>
                                        <li>
                                          <?php 
                                              $categories = get_the_category();
                                              foreach($categories as $category):
                                           ?>
                                            <a href="#" class="btn-2"><?php echo $category->name; ?></a>
                                          <?php endforeach; ?>
                                        </li>
                                     </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="marketing_discription">
                         <div class="marketing_box">
                           <?php the_content(); ?>
                         </div>
                    </div>

                </div>
            </div>
            <?php  endwhile; ?>
        </div>
     </section>

     <!-- Latest Post -->
     <section class="Latest_area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="latest_box">
              <div class="latest-head">
                <h2>Latest Post</h2>
              </div>
              <div class="latest-head">
                <a href="<?php echo home_url().'/blog' ?>" class="btn-2">Browse All Post</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row latest-padding">
          <?php 
          $i=1;
              $recent_post = new WP_Query(array(
                  'post_type' => 'post',
                  'post_per_page' => 1,
              ));
               
              while($recent_post->have_posts()): $recent_post->the_post();
              if($i==1 or $i==2 ):
           ?>
          <div class="col-lg-6">
            <div class="blog_boxs">
              <div class="blog_box">
                <?php the_post_thumbnail(); ?>
                <div class="blog-button">
                  <?php $categories = get_the_category();
                    foreach ($categories as $category): ?>
                     <a href="<?php echo get_category_link($category->term_id) ?>" class="btn-1"><?php echo $category->name; ?></a>
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
        <?php endif; $i++; endwhile; ?>

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
     
  </main>

<?php get_footer(); ?>