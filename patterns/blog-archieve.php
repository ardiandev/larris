<?php
/**
 * Title: Block Archieve Larris Theme
 * Slug: larris-theme/blog-archieve
 * Categories: posts
 * Description: Header with site title and navigation.
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"custom-text","layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull has-custom-text-background-color has-background" style="margin-top:0;margin-bottom:0"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"},"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base"} -->
<div class="wp-block-column has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:query {"queryId":30,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"50px"}}} -->
<!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"lineHeight":1.6}},"fontSize":"large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"10px","bottom":"10px"}}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-small-font-size" style="margin-top:10px;margin-bottom:10px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:paragraph -->
<p>|</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-backround"}}}},"textColor":"custom-backround"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"auto","width":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"}}}} /-->

<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontSize":"1rem"}}} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"custom-backround"} -->
<hr class="wp-block-separator has-text-color has-custom-backround-color has-alpha-channel-opacity has-custom-backround-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"style":{"typography":{"lineHeight":"1.7"}}} -->
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
<!-- /wp:column -->

<!-- wp:column {"width":"300px","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:300px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:40px;padding-right:var(--wp--preset--spacing--30);padding-bottom:40px;padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size"><strong>Latest Post</strong></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"20px"}}},"fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->