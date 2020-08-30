<?php
/*
Template Name: よくある質問
*/
?>
<?php  get_header();?>
<?php MainVisual_theme(); ?>
<div class="inquiry_place">
  <?php  $message = get_theme_mod( 'my_setting_inquiryform' ); ?>
    <h4><?php echo esc_html( $message ); ?></h4>
  <div class="inquiry_form">
    <?php echo do_shortcode('[contact-form-7 id="107" title="お問い合わせ"]'); ?>
  </div>
</div>

<?php  get_footer(); ?>
