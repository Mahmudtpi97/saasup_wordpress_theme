<?php  get_header(); ?>
   
   <main>
   
      <section class="article_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
	                  <div class="article_text text-center mb-5" >
                      <h2>Category by Post</h2>
	                  </div>
                </div> 
            </div>

            <div class="row ">
                <?php while(have_posts()): the_post(); ?>
                <div class="col-lg-6">
                  <div class="blog_boxs article_crad">
                    <div class="blog_box" >
                      <?php the_post_thumbnail();?>
                      <div class="blog-button">
                        <?php 
                              $categories = get_the_category();
                              foreach($categories as $category):
                         ?>
                          <a target="_blank" href="<?php echo get_category_link($category->term_id); ?>" class="btn-1"><?php echo $category->name; ?></a>
                        <?php endforeach; ?>
                      </div>
                    </div>
                    <div class="blog_text">
                      <p class="blog-p"><?php the_time('F d, Y') ?></p>
                      <h2><?php the_title();?> </h2>
                      <p><?php echo wp_trim_words(get_the_content(),10,'....'); ?></p>
                      <a target="_blank" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                  </div>
                </div>
                <?php  endwhile; ?>
              
            </div>

        </div>
     </section>
     

</main>


<?php  get_footer(); ?>