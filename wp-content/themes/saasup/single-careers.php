 <?php 
     get_header();
  ?>
  <main>
    <?php while(have_posts()) : the_post(); ?>
     <section class="developer_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center">
                      <div class="features_text1" >
                        <h2><?php the_title(); ?></h2>
                         <ul class="d-flex align-items-center justify-content-center">
                            <li><p><?php the_field('career_address')?> &nbsp; | &nbsp; </p></li>
                            <li><p class="develop-link"><?php the_field('career_time') ?> </p></li>
                          </ul>
                        <a href="<?php the_field('career_apply_url');?>" class="btn-2">Apply Now</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="developer_noties">
                        <div class="developer_date">
                            <h2>About the role</h2>
                            <p> <b>Posted</b> : <?php the_time('F d, Y');  ?></p>
                        </div>
                        <div class="developer-text1">
                          <?php the_field('career_full_details');  ?>
                        </div> 
                        <div class="web-contact">
                            <?php  the_field('career_contact_details') ?>
                            <a href="<?php the_field('career_apply_url');?>" class="btn-1">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div> 
            
        </div>

     </section>
    <?php endwhile;  ?>
  </main>

  <?php get_footer(); ?>