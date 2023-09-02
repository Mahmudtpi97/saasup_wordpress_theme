 <?php 
    // Template Name: Contact Template
  get_header();
  ?>
  <main>
     <section class="contact_area section_padding pt-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact_head ">
                        <div class="contact-text  ">
                            <h2><?php the_field('contact_page_title'); ?></h2>
                        </div>
                        <div class="contact-phone pt-3">
                            <div class="row">
                                <?php 
                                    if(have_rows('contact_info_items')):
                                    while(have_rows('contact_info_items')): the_row();
                                 ?>
                                <div class="col-lg-6">
                                    <div class="contact-right">
                                        <div class="contact-icon d-flex align-items-center  ">
                                            <i class="<?php the_sub_field('icon_name') ?>" style="background:<?php the_sub_field('icon_bg_color') ?>;"></i>
                                            <p><?php the_sub_field('contact_info_title') ?></p>
                                        </div>
                                        <a href="
                                        <?php 
                                            if(is_numeric(get_sub_field('contact_info_text') )){
                                                echo "tel";}
                                            else{echo"mailto";}
                                                echo ":";the_sub_field('contact_info_text');
                                         ?>"><?php the_sub_field('contact_info_text'); ?> </a>
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                        <div class="contact-form">
                            <?php 
                                if (the_field('contact_form_shortCode') == false):
                             ?>
                            <form action="#">
                                <div class="row g-5">
                                    <div class="col-md-6">
                                        <div class="input-text">
                                            <label for="name">Full Name*</label>
                                            <input type="text" id="name" placeholder="John David">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-text">
                                            <label for="email">Your email*</label>
                                            <input type="email" id="email" placeholder="example@yourmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-text">
                                            <label for="company">Company*</label>
                                            <input type="text" id="company" placeholder="yourcompany name here">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-text">
                                            <label for="subject">Subject*</label>
                                            <input type="text" id="subject" placeholder="How can we Help">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-text">
                                            <label for="message">Message*</label>
                                            <textarea name="" id="message" cols="30" rows="7" placeholder="Hello there,I would like to talk about how to..."></textarea>
                                        </div>
                                    </div>
                                    <div class="contact-button text-center">
                                        <a href="#" class="btn-1">Send Message</a>
                                    </div>
                                     
                                    
                                </div>
                            </form>
                          <?php else: do_shortcode('contact_form_shortCode');
                           endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>


     <section class="hearts_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="business-text">
                        <h2><?php the_field('contact_area_title') ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    if(have_rows('contact_area_item')):
                    while(have_rows('contact_area_item')): the_row();
                 ?>
                <div class="col-md-4">
                    <div class="location text-center">
                        <i class="<?php the_sub_field('area_address_icon'); ?> location-icon" 
                            style="color:<?php the_sub_field('area_address_icon_color')?> ;background:<?php the_sub_field('area_address_icon_bg_color')?>; "
                            ></i></p>
                        <h4><?php the_sub_field('area_city_name'); ?></h4>
                        <p><?php the_sub_field('area_address_details'); ?></p>
                        <a style="background:<?php the_sub_field('area_address_icon_bg_color')?>; " class="location-phone" href="
                            <?php 
                                if(is_numeric(get_sub_field('area_contact_number') )){
                                    echo "tel";}
                                else{echo"mailto";}
                                    echo ":"; the_sub_field('area_contact_number');
                             ?>"> <?php the_sub_field('area_contact_number');?> </a>
                    </div>
                </div>
            <?php endwhile; endif; ?>
            </div>

        </div>
     </section>

     <section class="Question">
        <div class="container">
             <div class="row">
                <div class="col-12">
                    <div class="Question_head text-center">
                        <h2><?php the_field('faq_title') ?></h2>
                    </div>
                </div>
             </div>
             <div class="row">
                <div class="col-12">
                    <div class="Question_discription">
                        <?php 
                        $i= 1;
                            if(have_rows('faq_items')):
                            while(have_rows('faq_items')): the_row();
                         ?>
                        <div class="Question-button">
                            <div class="Question99 d-flex justify-content-between align-items-center">
                                <h3><?php echo $i.". "; the_sub_field('faq_item_title') ?></h3>
                                <div class="Question-icon"><i class="fas fa-angle-down arrow"></i></div>
                            </div>
                            <p class="up"><?php the_sub_field('faq_item_description') ?></p>
                            
                        </div>
                        <?php $i++; endwhile; endif ?>

                    </div>
                </div>
             </div>
        </div>
     </section>

  </main>

  <?php get_footer(); ?>
