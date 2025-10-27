<?php
/**
 * Title: Posts Page
 * Slug: larris/posts
 * Categories: featured
 * Viewport width: 1400
 * Description: Full page of About Page
 *
 * @package Larris
 */

?>


<!-- wp:template-part {"slug":"header","theme":"larris","tagName":"header"} /-->

<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"80vh"},"spacing":{"padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"},"margin":{"bottom":"50px"}}},"fontSize":"medium","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-medium-font-size" style="min-height:80vh;margin-bottom:50px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"metadata":{"name":"Posts"},"style":{"spacing":{"padding":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:40px"><!-- wp:heading {"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"bottom":"5px"}}}} -->
<h2 class="wp-block-heading" style="margin-bottom:5px;font-size:24px">Posts</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":1.6}}} -->
<p style="font-size:16px;line-height:1.6">Everything from WordPress tutorials and AI experiments to web development resources and personal updates.</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"post-has-hover","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<!-- wp:group {"className":"post-container","style":{"border":{"radius":"10px","width":"1px"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"dimensions":{"minHeight":"150px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group post-container" style="border-width:1px;border-radius:10px;min-height:150px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"15px"}}} /-->

<!-- wp:post-date {"format":"M j","style":{"typography":{"fontSize":"15px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px"}}} /-->

<!-- wp:post-excerpt {"excerptLength":43,"className":"larris-post-excerpt","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"larris","tagName":"footer"} /-->

