<?php
/**
 * Title: Hero
 * Slug: larris/hero
 * Categories: banner
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"30px"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="margin-top:30px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","className":"hero-two-cols","style":{"spacing":{"blockGap":{"left":"20px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center hero-two-cols"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Hi there</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.6">I’m Ardian—a WordPress Developer, and hobby web developer. This site’s dedicated to my current WordPress projects and explorations into related technologies. Have a look around.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"160px"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:160px"><!-- wp:image {"width":"130px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/profile-picture.png" alt="profile picture" style="width:130px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->