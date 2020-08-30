<footer>
  <div class="backimage_triangle">
    <img src="<?php echo get_template_directory_uri(); ?>/image/backimage_triangle.png" alt="">
  </div>
  <div class="footer_wrapper">
    <div class="footer_info">
      <div class="company">
        <div class="footer_logo">LOGO</div>
        <a href="#"><h2><?php bloginfo( 'name' ); ?></h2></a>
        <?php    $twitter      = get_theme_mod( 'my_setting_footer_SNS_twitter' );
                 $facebook     = get_theme_mod('my_setting_footer_SNS_facebook');?>
        <div class="fa-stack fa-2x twitter">
          <a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^\d+]/', '', $twitter ) ); ?>"><span class="circle"><i class="fas fa-circle fa-stack-1x"></i></span><span class="mark"><i class="fab fa-twitter fa-stack-1x fa-xs"></i></span></a>
        </div>
        <div class="fa-stack fa-2x facebook">
          <a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^\d+]/', '', $facebook ) ); ?>"><span class="circle"><i class="fas fa-circle fa-stack-1x"></i></span><span class="mark"><i class="fab fa-facebook-f fa-stack-1x fa-xs"></i></span></a>
        </div>
      </div>
      <?php wp_nav_menu( array(
        'container_class' => 'footer_menu',
        'menu_class' => 'footer_menu'
      ) ); ?>
      <div class="for_smartphone">
        <?php my_first_theme_phone_footer(); ?>
        <?php my_first_theme_inquiry_footer(); ?>
      </div>
    </div>
  </div>
  <?php   $copyright = get_theme_mod( 'my_setting_footer_copyright' ); ?>
  <div class="copyright">© copylight　<?php echo esc_html( $copyright ); ?></div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
