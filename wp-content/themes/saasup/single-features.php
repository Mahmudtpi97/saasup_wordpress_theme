<?php 
  get_header();
?>
  <main>
    <?php while(have_posts()) : the_post();  ?>
      <section class="license_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center licenses_features mb-5">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <section class="licenses-discription section_padding"  >
        <div class="container">
            <div class="row">
                <div class="col-12">
                     
                  <div class="licenses-box text-center">
                    <div class="feature-img">
                        <?php the_post_thumbnail();?>
                    </div> 
                      <div class="licenses-text1 licenses mt-5">
                         <?php the_content();  ?>
                      </div>
                  </div>
                </div>
            </div>
        </div>
      </section>
  <?php  endwhile; ?>
  </main>

  <?php get_footer(); ?>

