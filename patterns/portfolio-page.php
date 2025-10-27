<?php
/**
 * Title: Portfolio Page
 * Slug: larris/portfolio
 * Categories: featured
 * Viewport width: 1400
 * Description: Full page for portfolio web
 *
 * @package Larris
 */

?>

<!-- wp:template-part {"slug":"header","theme":"larris","tagName":"header"} /-->

<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"80vh"},"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"},"margin":{"bottom":"50px"}}},"fontSize":"medium","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-medium-font-size" style="min-height:80vh;margin-bottom:50px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"metadata":{"name":"Hero"},"style":{"spacing":{"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:0px;padding-left:0px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"70px"},"blockGap":{"left":"20px"}}}} -->
<div class="wp-block-columns" style="padding-top:70px"><!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"bottom":"10px"}}}} -->
<h2 class="wp-block-heading" style="margin-bottom:10px;font-size:24px">Hi there</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":1.6}}} -->
<p style="font-size:16px;line-height:1.6">Hey, I’m Ardian — a WordPress theme and plugin developer who loves building for the web. This site is where I share my latest projects and experiments. Dive in and see what I’ve been creating.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"30%","className":"hero-image-container"} -->
<div class="wp-block-column is-vertically-aligned-bottom hero-image-container" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":120,"align":"left","className":"is-style-rounded hero-image"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Posts"},"style":{"spacing":{"padding":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:40px"><!-- wp:heading {"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"bottom":"5px"}}}} -->
<h2 class="wp-block-heading" style="margin-bottom:5px;font-size:24px">Posts</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":1.6}}} -->
<p style="font-size:16px;line-height:1.6">Everything from WordPress tutorials and AI experiments to web development resources and personal updates.</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"post-has-hover","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<!-- wp:group {"className":"post-container","style":{"border":{"radius":"10px","width":"1px"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"dimensions":{"minHeight":"150px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group post-container" style="border-width:1px;border-radius:10px;min-height:150px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"15px"}}} /-->

<!-- wp:post-date {"format":"M j","style":{"typography":{"fontSize":"15px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px"}}} /-->

<!-- wp:post-excerpt {"excerptLength":43,"className":"larris-post-excerpt","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:20px"><!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right"><a href="<?php echo esc_url( home_url('/blog/') ); ?>">View all →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"larris","tagName":"footer"} /-->

