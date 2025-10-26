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

<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"80vh"},"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"}}},"fontSize":"medium","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-medium-font-size" style="min-height:80vh;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"metadata":{"name":"Hero"},"style":{"spacing":{"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:0px;padding-left:0px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"70px"},"blockGap":{"left":"20px"}}}} -->
<div class="wp-block-columns" style="padding-top:70px"><!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"bottom":"10px"}}}} -->
<h2 class="wp-block-heading" style="margin-bottom:10px;font-size:24px">Hi there</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":1.6}}} -->
<p style="font-size:16px;line-height:1.6">I’m Nick—a Developer Relations Advocate at Automattic, WordPress Core contributor, and hobby web developer. This site’s dedicated to my current WordPress projects and explorations into related technologies. Have a look around.</p>
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

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}}} -->
<!-- wp:group {"className":"post-container","style":{"border":{"radius":"10px","width":"1px"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"dimensions":{"minHeight":"150px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group post-container" style="border-width:1px;border-radius:10px;min-height:150px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px"}}} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"16px"}}} /-->

<!-- wp:post-excerpt {"excerptLength":23,"style":{"typography":{"fontSize":"16px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"larris","tagName":"footer"} /-->
