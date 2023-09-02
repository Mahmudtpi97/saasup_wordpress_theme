<?php 
 // Control core classes for avoid errors
  if( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $prefix = 'saasup_theme';

    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Theme Options',
      'menu_slug'  => 'theme-options',
      'framework_title'  => 'Theme Options <small>by <a target="_blank" href="https://fb.com/Mahmudtpi97">Mahmudtpi97</a></small>',
      'menu_icon' => 'dashicons-admin-site-alt',
      'footer_text' => 'Develop by <a target="_blank" href="https://fb.com/Mahmudtpi97">Mahmudtpi97</a>',
    ));
    // Create Header section
    CSF::createSection( $prefix, array(
      'title'  => 'Header Options',
      'fields' => array(
        // Header field
        array(
          'id'    => 'favicon_upload',
          'title' => 'Favicon Upload',
          'type'  => 'media',
          'default' => array(
              'url' => get_template_directory_uri().'/assets/images/favicon-icon.png'
           ),
        ),
        array(
          'id'    => 'header_logo',
          'title' => 'Header Logo',
          'type'  => 'media',
          'default' => array(
              'url' => get_template_directory_uri().'/assets/images/Logo.svg'
           ),
        ),
        array(
          'id'    => 'singin_btn',
          'title' => 'Singin Btn',
          'type'  => 'text',
          'default' => 'Sign In',
        ),
        array(
          'id'    => 'singin_btn_url',
          'title' => 'Singin Btn Url',
          'type'  => 'text',
          'default' => '#',
        ),
      ),
    ));
    // Create Footer section
    CSF::createSection( $prefix, array(
      'title'  => 'Footer Options',
      'fields' => array(
        // Footer field
        array(
          'title' => 'Footer Logo',
          'id'    => 'footer_logo',
          'type'  => 'media',
          'default' => array(
              'url' => get_template_directory_uri().'/assets/images/Logo.svg'
           ),
        ),
        array(
          'title' => 'Footer Description',
          'id'    => 'footer_description',
          'type'  => 'textarea',
          'default' =>'It is a long established fact that from will be distracted by the readable from when looking.',
        ),
        array(
          'title' => 'Footer Contact Icon',
          'id'    => 'footer_contact_icon',
          'type'  => 'repeater',
          'fields' => array(
               array(
                  'id'    => 'f_contact_icon',
                  'type'  => 'icon',
                  'title' => 'Footer Contact Icon',
                ),
               array(
                  'title' => 'Footer Contact Text',
                  'id'    => 'f_contact_text',
                  'type'  => 'repeater',
                   'fields' => array(
                     array(
                        'title' => 'Contact Value',
                        'id'    => 'f_contact_text_value',
                        'type'  => 'text',
                        'default' => 'saasup@gmail.com',
                         ),
                      ),
                  
                   ),
               ),
            ),
          array(
              'title' => 'Copyright Text Left',
              'id'   =>'copy_text_left',
              'type' => 'textarea',
              'default' => 'Copyright © Saasup | Designed by <a target="_blank" href="https://fb.com/mahmudtpi97">Mahmudtpi97</a> - Powered by WordPress',
          ),
          array(
              'title' => 'Copyright Socila Icon',
              'id'   =>'copy_social_icon',
              'type' => 'repeater',
               'fields' => array(
                  array(
                    'title' => 'Copyright Icon',
                     'id' => 'copy_icon',
                     'type' => 'icon',
                   ),
                  array(
                    'title' => 'Copyright Icon Url',
                     'id' => 'copy_icon_url',
                     'type' => 'text',
                     'default' => '#'
                   ),
               ),
          ),


      )
    ));
    // Home Page Banner Section
    CSF::createSection($prefix, array(
        'title' => 'Home Page Banner Section',
        'fields' => array(
            array(
              'title' => 'Banner images',
              'id'    => 'banner_image',
              'type'  => 'media',
              'default' => array(
                  'url' => get_template_directory_uri().'/assets/images/Image22.png'
                 ),
              ),
              array(
                'id'    => 'banner_heading',
                'title' => 'Banner Heading',
                
                'type'  => 'text',
                'default' => 'Build your audience and grow your brand',
              ),
              array(
                'title' => 'Banner Description',
                'id'    => 'banner_description',
                'type'  => 'textarea',
                'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene',
              ),
              array(
                'title' => 'Banner Btn 1',
                'id'    => 'banner_btn_1',
                'type'  => 'text',
                'default' => 'Get Started',
              ),
              array(
                'title' => 'Banner Btn 1 URL',
                'id'    => 'banner_btn_1_url',
                'type'  => 'text',
                'default' => 'Get Started',
              ),
              array(
                'title' => 'Banner Btn 2',
                'id'    => 'banner_btn_2',
                'type'  => 'text',
                'default' => 'Watch Video',
              ),
              array(
                'title' => 'Banner Btn 2 URL',
                'id'    => 'banner_btn_2_url',
                'type'  => 'text',
                'default' => 'https://www.youtube.com/watch?v=1cPsoZfY1CM',
              )

          )
    ));
    // Create Free Trial Section
    CSF::createSection($prefix, array(
        'title' => 'Pricing Free Trial',
        'fields' => array(
              array(
                  'title' => 'Trial Title',
                  'id'    => 'trial_title',
                  'type'  => 'text',
                  'default' => 'Start your free trial today',
              ),
              array(
                  'title' => 'Trial Description',
                  'id'    => 'trial_description',
                  'type'  => 'textarea',
                  'default' => 'It is a long established fact that a reader will be by the readable when looking at it layout.',
              ),
              array(
                  'title' => 'Trial Form ShortCode',
                  'id'    => 'trial_formShortCode',
                  'type'  => 'text',
              ),
              array(
                  'title' => 'Trial Right Image',
                  'id'    => 'trial_right_image',
                  'type'  => 'media',
                  'default' => array(
                    'url' => get_template_directory_uri().'/assets/images/trial-img/trial-img.png',
                  ),
              ),
         ),
    ));

    // Blog Page Title
    CSF::createSection($prefix, array(
        'title' => 'Blog Page',
        'fields' => array(
             array(
                'title' => 'Blog Page Title',
                'id' => 'blog_page_title',
                'type' => 'text',
                'default' => 'News & Articles',
             ),
             array(
                'title' => 'Blog Page Description',
                'id' => 'blog_page_description',
                'type' => 'textarea',
                'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene.',
             ),

          )
    ));




  }

