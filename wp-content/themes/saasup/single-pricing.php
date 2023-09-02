 <?php 
   get_header();
  ?>
  <main>
   <section class="advance_area section_padding pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="advance-right">
                    <h2><?php the_field('package_title');?></h2>
                    <p><?php the_field('pricing_short_description');?>.</p>
                    <ul>
                      <?php  if (have_rows('package_item')):
                         while(have_rows('package_item')): the_row();
                       ?>
                        <li><i class="fa-regular fa-circle-check"></i> <?php the_sub_field('package_single_item');?></li>
                       <?php endwhile; endif; ?>
                    </ul>
                </div>
                <div class="strandrat">
                    <?php the_field('pricing_full_details');?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="advance-left">
                    <h3>Choose your plan</h3>
                    <p>Lorem ipsum dolor sit amet consectet udipiscing elit terdum</p>
                    <form action="POST" method="POST">
                        <select name="package-plan" id="form_select">
                            <option value="1">Select Your Plan </option>
                              <?php 
                                 $pricing = new WP_Query(array(
                                    'post_type' => 'pricing',
                                 ));
                                 while($pricing->have_posts()): $pricing->the_post();
                                ?>
                               <option data-price="<?php the_field('package_monthly');?>" value="<?php the_field('package_title');?>"><?php the_field('package_title');?></option>
                               <?php endwhile; wp_reset_postdata() ?>
                        </select>
                    </form>
                    <h2 class="package-monthly"><?php the_field('package_monthly');?><span>/ month</span></h2>
                    <a href="#" class="btn-2 bk">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
   </section>
     
  </main>
  <script>

    $("#form_select" ).on("change", function() {
         $("#form_select option:selected").each(function() {
            var basePrice = $(this).attr('data-price');
            $(".package-monthly").html(basePrice+"<span>/ month</span>");
         });      
    });
</script>

<?php get_footer(); ?>