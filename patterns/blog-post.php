<?php
/**
 * Title: Blog Post
 * Slug: larris/blog-post
 * Categories: banner
 */
?>


<!-- wp:group {"style":{"spacing":{"margin":{"top":"80px","bottom":"60px"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="margin-top:80px;margin-bottom:60px;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"fontSize":"custom-1"} -->
<h2 class="wp-block-heading has-custom-1-font-size">POSTS</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">Everything from WordPress tutorials and AI experiments to web development resources and personal updates.</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":0,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"20px"}}} -->
<!-- wp:group {"className":"post-container","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"5px","width":"1px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group post-container" style="border-width:1px;border-radius:5px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"10px","bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:10px;padding-bottom:10px"><!-- wp:post-terms {"term":"category","suffix":" ","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} /-->

<!-- wp:post-date {"style":{"color":{"text":"#0d0d0d"},"elements":{"link":{"color":{"text":"#0d0d0d"}}}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"fontSize":"medium"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":20,"style":{"spacing":{"margin":{"top":"10px","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:paragraph {"align":"right","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-right"><a href="http://localhost/wptest/blog/" data-type="page" data-id="215">View all →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->