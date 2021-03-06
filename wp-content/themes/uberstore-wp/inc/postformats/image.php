<div class="post-gallery fresco">
	<?php
	    $image_id = get_post_thumbnail_id();
	    $image_link = wp_get_attachment_image_src($image_id,'full');
	    $image_title = esc_attr( get_the_title($post->ID) );
	?>
	<?php 
			$image = aq_resize( $image_link[0], 755, 385, true, false);  // Blog
	?>
	<img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $image_title; ?>" />
  <div class="overlay">
  	<div class="buttons"><a href="<?php echo $image_link[0]; ?>" class="zoom" rel="magnific" title="<?php the_title(); ?>"><?php _e( 'View', 'uberstore' ); ?></a></div>
  </div>
</div>