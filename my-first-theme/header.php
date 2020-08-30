<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title>練習サイト</title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <script src="https://kit.fontawesome.com/09ff13ae32.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <div class="header_top">
          <a href="#" class="logo">
            <?php the_custom_logo(); ?>
            <div class="site_title">
              <?php if (is_front_page()): ?>
                <h1 class="title"><?php bloginfo( 'name' ); ?></h1>
                <h2 class="description"><?php bloginfo( 'description' ); ?></h2>
              <?php else : ?>
                <h2 class="title"><?php bloginfo( 'name' ); ?></h2>
                <h3 class="description"><?php bloginfo( 'description' ); ?></h3>
              <?php endif; ?>
            </div>
          </a>
          <?php my_first_theme_phone(); ?>
          <?php my_first_theme_inquiry(); ?>
          <div class="menubar">
            <img src="<?php echo get_template_directory_uri(); ?>/image/Menu.png" alt="">
          </div>
        </div>
        <?php wp_nav_menu( array(
          'theme_location' => 'header-nav',
          'container' => 'nav',
          'container_class' => 'header-nav',
          'container_id' => 'header-nav',
          'fallback_cb' => '',
          'menu_class' => 'menu'
        ) ); ?>
      </header>
