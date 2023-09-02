<?php $options = get_option('saasup_theme' );?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Social-meta tag  -->
  <meta name="description" content="<?php echo bloginfo('description'); ?>">
  <!-- favicon-icon  -->
 <link rel="shortcut icon" href="<?php echo $options['favicon_upload']['url'] ?>" type="image/x-icon">

<?php wp_head(); ?>
</head>

<body>
  <!-- strat header_area  -->
  <header class="header_area section_padding">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-md-12 col-lg-3 ">
            <div class="logo">
              <a href="<?php echo home_url(); ?>">
                <img src="<?php echo $options['header_logo']['url'] ?>" loading="lazy" alt="saasup_logo">
              </a>
              <div class="menu-icon">
                <a href="#" class="btn-2">Sing In</a>
                <a href="#" class="menu-icon1"><i class="fa-solid fa-bars-staggered"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-9">
            <div class="menus d-flex justify-content-end align-items-center">
              <nav class="menu">
                 <?php 
                        wp_nav_menu( array(
                          'theme_location' => 'main_menu',
                          'menu_class'  => 'd-flex',
                          'walker'      => new WP_Bootstrap_Navwalker,
                        ));
                   ?>
              </nav>
               <div class="menu-button">
                <a href="<?php echo $options['singin_btn']; ?>" class="btn-1"><?php echo $options['singin_btn']; ?></a>
              </div>
            </div>

          </div>

       </div>

       <div class="row benner_area">
          <div class="col-lg-6">
            <div class="bennar_conteat">
              <h1><?php echo $options['banner_heading'] ?></h1>
              <p><?php echo $options['banner_description'] ?></p>
              <ul class=" d-flex">
                <li><a class=" btn-2" href="<?php echo $options['banner_btn_1_url'] ?>"><?php echo $options['banner_btn_1'] ?></a></li>
                <li><a class=" btn-3 d-flex align-items-center" id="popupVideo" href="<?php echo $options['banner_btn_2_url'] ?>"><?php echo $options['banner_btn_2'] ?> <i class="fa-solid fa-circle-play"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="bennar-img" >
              <img src="<?php echo $options['banner_image']['url'] ?>" loading="lazy" alt="">
            </div>
          </div>
       </div>

      </div>

    </div>

  </header>
  <!-- end header_area  -->