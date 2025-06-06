<?php
/**
 * Title: Homepage
 * Slug: larris/homepage
 * Categories: featured
 * viewportWidth: 1200
 */
?>
<!-- wp:pattern {"slug":"larris/header"} /-->


<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"custom-light-gray","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-custom-light-gray-background-color has-background" style="margin-top:0px;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","bottom":"var:preset|spacing|60","top":"var:preset|spacing|60"}}},"backgroundColor":"custom-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:0;padding-bottom:0"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size">Hi there</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.6">I’m Ardian—a WordPress Developer, and hobby web developer. This site’s dedicated to my current WordPress projects and explorations into related technologies. Have a look around.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:social-links {"openInNewTab":true,"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"https://ardianpradana.com/contact/","service":"mail"} /-->

<!-- wp:social-link {"url":"https://github.com/ardiandev","service":"github"} /-->

<!-- wp:social-link {"url":"https://bsky.app/profile/ardianpradana.com\u0022","service":"bluesky"} /-->

<!-- wp:social-link {"url":"https://www.linkedin.com/in/ardianpradana/","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"dimensions":{"minHeight":"65vh"},"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"30px","bottom":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:65vh;margin-top:30px;margin-bottom:30px"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0">Projects</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This collection showcases my WordPress projects, including custom blocks, block-based themes, and editor enhancements. Most were developed for personal exploration or testing purposes, so they might not be fully optimized for all environments. You can find the full list and source code <a href="https://github.com/ardiandev">on my GitHub.</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:create-block/larris-github-showcase {"repoLink":"https://github.com/ardiandev/larris-github-showcase","repoData":{"name":"larris-github-showcase","description":"A WordPress block plugin that fetches and displays GitHub repository details like name, stars, forks, and description. Easily integrate repository info into your WordPress site with a user-friendly interface.","stars":0,"forks":0,"api_url":"https://api.github.com/repos/ardiandev/larris-github-showcase"}} /-->

<!-- wp:create-block/larris-github-showcase {"repoLink":"https://github.com/ardiandev/larris-cache-control","repoData":{"name":"larris-cache-control","description":"A lightweight WordPress plugin to toggle and auto-clear theme pattern cache during development.","stars":0,"forks":0,"api_url":"https://api.github.com/repos/ardiandev/larris-cache-control"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:heading {"fontSize":"custom-1"} -->
<h2 class="wp-block-heading has-custom-1-font-size">POSTS</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="margin-top:var(--wp--preset--spacing--20)">Everything from WordPress tutorials and AI experiments to web development resources and personal updates.</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":0,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<!-- wp:group {"className":"post-container","style":{"border":{"radius":"5px","width":"1px"},"dimensions":{"minHeight":"0px"},"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group post-container" style="border-width:1px;border-radius:5px;min-height:0px;margin-top:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"level":3,"isLink":true,"linkTarget":"_blank","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"fontSize":"medium"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"0px","bottom":"0px"},"margin":{"top":"0.1rem"}}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-small-font-size" style="margin-top:0.1rem;padding-top:0px;padding-bottom:0px"><!-- wp:post-author {"showAvatar":false,"isLink":true} /-->

<!-- wp:post-date {"style":{"color":{"text":"#0d0d0d"},"elements":{"link":{"color":{"text":"#0d0d0d"}}}},"fontSize":"small"} /-->

<!-- wp:post-terms {"term":"category","suffix":" ","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"","excerptLength":40,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"},"padding":{"top":"0","bottom":"0"}},"typography":{"fontSize":"0.9rem"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:paragraph {"align":"right","placeholder":"Add text or blocks that will display when a query returns no results.","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<p class="has-text-align-right" style="margin-top:var(--wp--preset--spacing--30)"><a href="https://ardianpradana.com/projects/">View all →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
