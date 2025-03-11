<?php
/**
 * Title: Articles
 * Slug: innovategrove/articles
 * Categories: innovategrove
 * Keywords: articles
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"70px","bottom":"70px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white-text-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-text-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:70px;padding-right:20px;padding-bottom:70px;padding-left:20px"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"bottom":"35px"}}},"textColor":"primary"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-link-color" style="padding-bottom:35px;line-height:1.2"><?php echo esc_html__( 'Insights and Ideas to Inspire Your Growth', 'innovategrove' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":4,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"className":"wow animate__animated animate__slideInUp"} -->
<div class="wp-block-query wow animate__animated animate__slideInUp"><!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"20rem"}} -->
<!-- wp:post-featured-image {"isLink":true,"height":"320px","style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"10px"}}},"fontSize":"mdm-large"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->