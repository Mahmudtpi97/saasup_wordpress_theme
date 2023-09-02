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
   <header class="About_header ">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-md-12 col-lg-3 ">
            <div class="logo">
              <a href="index.html">
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

        

      </div>

    </div>

  </header>
  <!-- end header_area  -->
 