<?php
/**
 * Title: Blog Page
 * Slug: larris/page-blog
 * Categories: banner
 */
?>

<!-- wp:pattern {"slug":"larris/header"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"40px","bottom":"40px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="margin-top:40px;margin-bottom:40px"><!-- wp:heading {"fontSize":"custom-1"} -->
<h2 class="wp-block-heading has-custom-1-font-size">POSTS</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">Everything from WordPress tutorials and AI experiments to web development resources and personal updates.</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":0,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"20px"}}} -->
<!-- wp:group {"className":"post-container","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"5px","width":"1px"},"dimensions":{"minHeight":"180px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group post-container" style="border-width:1px;border-radius:5px;min-height:180px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"10px","bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:10px;padding-bottom:10px"><!-- wp:post-terms {"term":"category","suffix":" ","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} /-->

<!-- wp:post-date {"style":{"color":{"text":"#0d0d0d"},"elements":{"link":{"color":{"text":"#0d0d0d"}}}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"fontSize":"medium"} /-->

<!-- wp:post-excerpt {"moreText":"Read more","excerptLength":40,"style":{"spacing":{"margin":{"top":"10px","bottom":"0"},"padding":{"top":"0","bottom":"0"}},"typography":{"fontSize":"0.9rem"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"larris/footer"} /-->
