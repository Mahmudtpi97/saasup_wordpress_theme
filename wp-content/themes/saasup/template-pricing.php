<?php 
  // Template Name: Pricing Template
  get_header();
 ?>

<main>
     <section class="pricing_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center pricing_features">
                      <div class="features_text" >
                        <h2><?php the_field('page_title') ?></h2>
                        <p><?php the_field('page_description') ?></p>

                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                   $pricing = new WP_Query(array(
                      'post_type' => 'pricing',
                      'order' => 'ASC',
                   ));
                   while($pricing->have_posts()): $pricing->the_post();
                ?>
              <div class="col-md-4">
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
     </section>


     <section class="pricing-table section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-text text-center">
                        <h2><?php the_field('package_compare_title') ?></h2>
                    </div>
                </div>
            </div>
            <div class="row  ">
                <div class="col-12">
                  <div class="table33">
                    <table>
                      <thead>
                        <tr class="tby">
                            <?php 
                                if(have_rows('package_compare_head')):
                                while(have_rows('package_compare_head')): the_row();
                             ?>
                              <th class="text-center">
                                  <h3><?php the_sub_field('compare_head_title') ?></h3>
                                  <h4><?php the_sub_field('compare_head_sub_title') ?></h4>
                              </th>
                            <?php endwhile; endif; ?>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            if(have_rows('package_items')):
                            while(have_rows('package_items')): the_row();
                         ?>
                          <tr>
                            <td class=" bulu"><?php the_sub_field('feature_item_title'); ?> </td>
                            <td class=""> </td>
                            <td class=""> </td>
                            <td class=""> </td>
                          </tr>
                          <?php 
                              while(have_rows('feature_items')): the_row();
                           ?>
                           <tr>
                              <td><?php the_sub_field('feature_item_content'); ?></td>
                               <?php 
                                  while(have_rows('feature_item_status')): the_row();
                                  if(get_sub_field('status') == 'Active'):
                               ?>
                                  <td class="text-center chack"><i class="fa-regular fa-circle-check"></i> </td>
                                  <?php elseif(get_sub_field('status') == 'Button'): ?>

                                   <td class="text-center"><a href="#" class="btn-22">Get Started</a> </td>
                                <?php else: ?>
                                  <td class=" text-center"><i class="fa-regular fa-circle-xmark"></i></td>
                                  
                               <?php endif; endwhile; ?>
                           </tr>
                        <?php endwhile; ?>
                          <!-- <tr>
                              <td class=""> </td>
                              
                          </tr> -->
                        <?php endwhile; endif; ?>

                          
                          
                      </tbody>
                    </table>  
                  </div>
                                       <!-- On tables -->
                    
                </div>
            </div>
        </div>
     </section>

  </main>

  <?php get_footer(); ?>