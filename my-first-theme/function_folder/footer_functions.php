<?php
function my_first_theme_phone_footer(){
  $phone      = get_theme_mod( 'my_setting_footer_CompanyInfo_phone' );
  $dayoff     = get_theme_mod('my_setting_footer_CompanyInfo_dayoff');
 ?>
  <div class="phone_number footer_address">
    <a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^\d+]/', '', $phone ) ); ?>"><span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x"></i><i class="fas fa-phone-alt fa-stack-1x" data-fa-transform="shrink-10 up-.5"></i></span><?php echo esc_html( $phone ); ?></a>
    <p>定休：<?php echo esc_html( $dayoff ); ?></p>
  </div>
<?php }
function my_first_theme_inquiry_footer(){
  $inquiry  = get_theme_mod('my_setting_footer_inquiry');
 ?>
 <a href="#" class="inquiry footer_inquiry"><div class="inquiry_wrapper"><i class="fas fa-envelope"></i> <?php echo esc_html( $inquiry ); ?></div></a>
<?php } ?>
