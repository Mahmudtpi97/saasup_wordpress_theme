 <?php $options = get_option('saasup_theme' ); ?>
 <footer>
    <!-- place footer here -->
    <section class="footer_area">
      <div class="container">
        <div class="row footer-padding" >
          <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1 "> 
             <div class="footer_text-1">
              <img src="<?php echo $options['footer_logo']['url'] ?>" alt="footer-logo">
              <p><?php echo $options['footer_description']?>"</p>
                <?php 
                    $footer_contacts = $options['footer_contact_icon'];
                    foreach($footer_contacts as $footer_icon):
                 ?>
                <div class="footer_email01 d-flex">
                  <a href="#"><i class="<?php echo $footer_icon['f_contact_icon'] ?>"></i></a>
                  <ul class="footer_email">
                        <?php foreach($footer_icon['f_contact_text'] as $footer_contact_text): ?>
                          <li>
                             <a href="
                             <?php if(is_numeric($footer_contact_text['f_contact_text_value'])) { echo "tel";} 
                             else{echo "mailto"; } ?>:<?php echo $footer_contact_text['f_contact_text_value'] ?>"> 
                             <?php echo $footer_contact_text['f_contact_text_value']?> </a>
                         </li>
                        <?php endforeach; ?>
                   </ul>
                </div>
                   <?php endforeach;?>

             </div>
          </div>
          <div class="col-xl-2 col-lg-6 order-lg-3 order-xl-2 ">
              <?php dynamic_sidebar('footr_sidebar_1'); ?>
          </div>
          <div class="col-xl-2 col-lg-6 order-lg-4 order-xl-3 ">
              <?php dynamic_sidebar('footr_sidebar_2'); ?>
          </div>
          <div class="col-xl-4 col-lg-6 order-lg-2 order-xl-4 ">
              <?php dynamic_sidebar('footr_sidebar_3'); ?>
          </div>
          
        </div>
        <div class="row" >
          <div class="col-12">
            <div class="copyright d-flex justify-content-between">
              <p><?php echo $options['copy_text_left'] ?></p>
              <div class="footer-icon">
                <ul class="d-flex">
                  <?php foreach($options['copy_social_icon'] as $copyrightSocila): ?>
                  <li><a target="_blank" href="<?php echo $copyrightSocila['copy_icon_url'] ?>"><i class="<?php echo $copyrightSocila['copy_icon'] ?>"></i></a></li>
                <?php endforeach; ?>
                </ul>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </footer>
<?php wp_footer(); ?>
    
</body>
</html>
