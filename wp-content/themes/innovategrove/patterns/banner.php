<?php
/**
 * Title: Banner
 * Slug: innovategrove/banner
 * Categories: innovategrove
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","bottom":"70px","top":"70px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:70px;padding-right:20px;padding-bottom:70px;padding-left:20px"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="padding-right:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","className":"wow animate__animated animate__fadeIn"} -->
<div class="wp-block-column is-vertically-aligned-center wow animate__animated animate__fadeIn"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"1px"}},"fontSize":"sml-medium"} -->
<p class="has-sml-medium-font-size" style="font-style:normal;font-weight:700;letter-spacing:1px;line-height:1.5;text-transform:uppercase"><?php echo esc_html__( 'Empowering Your Success', 'innovategrove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"top":"5px","bottom":"0"}}}} -->
<h1 class="wp-block-heading" style="margin-top:5px;margin-bottom:0;line-height:1.2"><?php echo esc_html__( 'Transform Your Business with Innovative Solutions', 'innovategrove' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"30px","bottom":"30px"}},"typography":{"lineHeight":"1.5"}}} -->
<p style="margin-top:0;margin-bottom:0;padding-top:30px;padding-bottom:30px;line-height:1.5"><?php echo esc_html__( 'Mattis pellentesque ex phasellus amet nulla aliquam commodo eu posuere in sit efficitur per libero consectetuer id elit neque condimentum parturient Adipiscing ipsum netus donec erat vivamus congue eget fermentum', 'innovategrove' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Learn More', 'innovategrove' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Get Started', 'innovategrove' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#151515","size":"has-large-icon-size","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<ul class="wp-block-social-links has-large-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg","id":31,"alt":"portrait-smiling-businesswoman-office","dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.49,"y":0.37},"minHeight":600,"isDark":false,"style":{"border":{"radius":"0px","width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-style:none;border-width:0px;border-radius:0px;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-31" alt="portrait-smiling-businesswoman-office" src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/banner.jpg" style="object-position:49% 37%" data-object-fit="cover" data-object-position="49% 37%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->