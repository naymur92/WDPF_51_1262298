<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php bloginfo('title') ?></title>
  <meta name="description" content="<?php bloginfo('description') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">

  <!-- CSS here -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/meanmenu.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/backtotop.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nice-select.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ui-icon.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/elegentfonts.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome-pro.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/spacing.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css"> -->
</head>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


  <!-- pre loader area start -->
  <div id="loading">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <!-- loading content here -->
      </div>
    </div>
  </div>
  <!-- pre loader area end -->

  <!-- back to top start -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- back to top end -->

  <!-- header area start -->
  <header class="header__transparent">
    <div class="header__area pl-220 pr-220 pt-30">
      <div class="main-header" id="header-sticky">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-xxl-3 col-xl-3 col-lg-5 col-md-6 col-6">
              <div class="logo-area d-flex align-items-center">
                <div class="logo">
                  <a href="index.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/Logo.png" alt="logo">
                  </a>
                </div>
                <div class="header-cat-menu ml-40 d-none d-md-block">
                  <nav>
                    <ul>
                      <li><a href="course-grid.html"> Categorie <span><i class="arrow_carrot-down"></i></span></a>
                        <?php
                        wp_nav_menu(array(
                          'container'       => false,
                          'menu_class'      => "sub-menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                          'theme_location'  => "category_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                        ));
                        ?>
                        <!-- <ul class="sub-menu">
                          <li><a href="course-grid.html">Bangla Medium</a></li>
                          <li><a href="course-grid.html">English Medium</a></li>
                          <li><a href="course-grid.html">Video Edition</a></li>
                          <li><a href="course-grid.html">Logo Design</a></li>
                          <li><a href="course-grid.html">Francy Medium</a></li>
                        </ul> -->
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <div class="col-xxl-9 col-xl-9 col-lg-7 col-md-6 col-6 d-flex align-items-center justify-content-end">
              <div class="main-menu d-flex justify-content-end mr-15">
                <nav id="mobile-menu">
                  <?php
                  // wp_nav_menu( array(
                  //    'menu'				=> "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                  //    'menu_class'		=> "", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                  //    'container'    => false,
                  //    'depth'				=> "0", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                  //    'walker'			   => new bootstrap_5_wp_nav_menu_walker(), // (object) Instance of a custom walker class.
                  //    'theme_location'	=> "primary_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                  // ) );


                  $menu_name = 'primary_menu';
                  if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);

                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    $menu_list = '';
                    $count = 0;
                    $submenu = false;
                    $cpi = get_the_id();
                    foreach ($menu_items as $current) {
                      if ($cpi == $current->object_id) {
                        if (!$current->menu_item_parent) {
                          $cpi = $current->ID;
                        } else {
                          $cpi = $current->menu_item_parent;
                        }
                        $cai = $current->ID;
                        break;
                      }
                    }
                    foreach ($menu_items as $menu_item) {
                      $link = $menu_item->url;
                      $title = $menu_item->title;
                      if (!$menu_item->menu_item_parent) {
                        $parent_id = $menu_item->ID;
                        if (!empty($menu_items[$count + 1]) && $menu_items[$count + 1]->menu_item_parent == $parent_id) { //Checking has child
                          $menu_list .= '<li class="has-dropdown"><a href="' . $link . '">' . $title . '</a>';
                        } else {
                          $menu_list .= '<li>' . "\n";
                          $menu_list .= '<a href="' . $link . '">' . $title . '</a>' . "\n";
                        }
                      }
                      if ($parent_id == $menu_item->menu_item_parent) {
                        if (!$submenu) {
                          $submenu = true;
                          $menu_list .= '<ul class="submenu">' . "\n";
                        }
                        $menu_list .= '<li>' . "\n";
                        $menu_list .= '<a href="' . $link . '">' . $title . '</a>' . "\n";
                        $menu_list .= '</li>' . "\n";
                        if (empty($menu_items[$count + 1]) || $menu_items[$count + 1]->menu_item_parent != $parent_id && $submenu) {
                          $menu_list .= '</ul>' . "\n";
                          $submenu = false;
                        }
                      }
                      if (empty($menu_items[$count + 1]) || $menu_items[$count + 1]->menu_item_parent != $parent_id) {
                        $menu_list .= '</li>' . "\n";
                        $submenu = false;
                      }
                      $count++;
                    }
                  } else {
                    $menu_list = '<li>Menu "' . $menu_name . '" not defined.</li>';
                  }
                  echo '<ul>';
                  echo $menu_list;
                  echo '</ul>';

                  ?>
                  <!-- <ul>
                    <li class="has-dropdown">
                      <a href="index.html">Home</a>
                      <ul class="submenu">
                        <li><a href="index.html">Home Style 1</a></li>
                        <li><a href="index-2.html">Home Style 2</a></li>
                        <li><a href="index-3.html">Home Style 3</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown">
                      <a href="about.html">Pages</a>
                      <ul class="submenu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="checkout.html">Check Out</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="sign-in.html">Sign In</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown">
                      <a href="instructor.html">Instructor</a>
                      <ul class="submenu">
                        <li><a href="instructor.html">Instructor</a></li>
                        <li><a href="instructor-profile.html">Instructor Profile</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown">
                      <a href="course-grid.html">Course</a>
                      <ul class="submenu">
                        <li><a href="course-grid.html">Course Grid</a></li>
                        <li><a href="course-list.html">Course List</a></li>
                        <li><a href="course-details.html">Course Details</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown">
                      <a href="blog.html">Blog</a>
                      <ul class="submenu">
                        <li><a href="blog.html">Blog Sidebar</a></li>
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-masonry.html">Blog Masonry</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                      </ul>
                    </li>
                  </ul> -->
                </nav>
              </div>
              <div class="header-right d-md-flex align-items-center">
                <div class="header__search d-none d-lg-block">
                  <form action="#">
                    <div class="header__search-input">
                      <button class="header__search-btn">
                        <i class="fa-regular fa-magnifying-glass"></i>
                      </button>
                      <input type="text" placeholder="Search Courses">
                    </div>
                  </form>
                </div>
                <div class="header-meta">
                  <ul>
                    <li><a href="sign-in.html" class="d-none d-md-block"><i class="fi fi-rr-user"></i></a></li>
                    <li><a href="cart.html" class="d-none d-md-block"><i class="	 fi fi-rr-shopping-bag"></i></a></li>
                    <li><a href="#" class="tp-menu-toggle d-xl-none"><i class="icon_ul"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header area end -->