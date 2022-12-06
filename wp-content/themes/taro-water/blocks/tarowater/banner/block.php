<?php
/*
Active: true
UUID: 2
Title: Banner
Description: Displays a large banner
Keywords: banner
Post Types: null
Allow Multiple: true
*/

$image			= get_field('banner_image');
$mobileimage	= get_field('banner_image_mobile');
$content		= get_field('banner_content');
$ticker			= get_field('ticker_content');
$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/button' );
// $button		= get_field('banner_button');
// $bkg 		= get_field('banner_content_bkg');
?>
<section class="banner">
	<div class="banner__content">
		<?php echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" />'; ?>
		<?php if ( $content ) { ?><?php echo $content; ?><?php } ?>
		
		<?php if ( $image ) { ?><img loading="lazy" class="banner__image<?php if ( $mobileimage ) { ?> hidemobile<?php } ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php } ?>
		<?php if ( $mobileimage ) { ?><img loading="lazy" class="banner__image hidedesktop" src="<?php echo $mobileimage['url']; ?>" alt="<?php echo $mobileimage['alt']; ?>" /><?php } ?>
	</div>
</section>
<?php if ( $ticker ) { ?>
	<div class="banner__ticker">
		<p class="msg"><span><?php echo $ticker; ?></span></p>
	</div>
<?php } ?>
