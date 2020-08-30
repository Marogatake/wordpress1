<?php
function MainVisual_theme(){
  $title_bg = "style=''";
  if ( has_post_thumbnail() ) {
    $img_url = wp_get_attachment_url( get_post_thumbnail_id() );
    $title_bg = "style='background-image:url(".$img_url.");'";
  }
  ?>
  <div class="heading" <?php echo $title_bg; ?> >
    <h1><?php echo get_the_title(); ?></h1>
    <?php  $page = get_post( get_the_ID() );
           $slug = $page->post_name;?>
    <h3><?php echo $slug; ?></h3>
    <img src="<?php echo get_template_directory_uri(); ?>/image/object1.png" alt="">
  </div>
<?php } ?>
