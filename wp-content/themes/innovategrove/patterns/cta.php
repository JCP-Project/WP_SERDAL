<?php
/**
 * Title: CTA
 * Slug: innovategrove/cta
 * Categories: innovategrove
 * Keywords: cta
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"70px","bottom":"70px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:70px;padding-right:20px;padding-bottom:70px;padding-left:20px"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/about.jpg","id":52,"dimRatio":90,"overlayColor":"primary","isUserOverlayColor":true,"className":"wow animate__animated animate__slideInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-cover wow animate__animated animate__slideInUp"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-52" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/about.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"bottom":"0"},"margin":{"top":"5px","bottom":"0"}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:5px;margin-bottom:0;padding-bottom:0;line-height:1.2"><?php echo esc_html__( 'Let’s Build Something Amazing Together', 'innovategrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Consectetur dolor vehicula primis suspendisse leo nec interdum turpis sapien posuere porttitor vulputate fusce mauris rhoncus si cursus placerat velit fames', 'innovategrove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"white","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button"><?php echo esc_html__( 'get started', 'innovategrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->