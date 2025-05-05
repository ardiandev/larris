<?php
/**
 * Title: Homepage
 * Slug: larris/homepage
 * Categories: banner
 */
?>

<!-- wp:template-part {"slug":"header"} /-->
<!-- wp:pattern {"slug":"larris/hero"} /-->
<!-- wp:group {"style":{"dimensions":{"minHeight":"65vh"},"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"30px","bottom":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:65vh;margin-top:30px;margin-bottom:30px"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0">Projects</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This collection showcases my WordPress projects, including custom blocks, block-based themes, and editor enhancements. Most were developed for personal exploration or testing purposes, so they might not be fully optimized for all environments. You can find the full list and source code <a href="https://github.com/ardiandev">on my GitHub.</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:create-block/larris-github-showcase {"repoLink":"https://github.com/ardiandev/larris","repoData":{"name":"larris","description":" A custom WordPress block theme named Larris, designed for flexibility, modern styling, and full site editing.","stars":0,"forks":0,"api_url":"https://api.github.com/repos/ardiandev/larris"},"repoPage":"http://localhost/wptest/projects/"} /-->

<!-- wp:create-block/larris-github-showcase {"repoLink":"https://github.com/ardiandev/larris-form","repoData":{"name":"larris-form","description":"A simple WordPress contact form block with AJAX, math-based CAPTCHA, and spam protection. ","stars":0,"forks":0,"api_url":"https://api.github.com/repos/ardiandev/larris-form"}} /-->

<!-- wp:create-block/larris-github-showcase {"repoLink":"https://github.com/ardiandev/larris-github-showcase","repoData":{"name":"larris-github-showcase","description":"A WordPress block plugin that fetches and displays GitHub repository details like name, stars, forks, and description. Easily integrate repository info into your WordPress site with a user-friendly interface.","stars":0,"forks":0,"api_url":"https://api.github.com/repos/ardiandev/larris-github-showcase"}} /-->

<!-- wp:create-block/larris-github-showcase {"repoLink":"https://github.com/ardiandev/larris-cache-control","repoData":{"name":"larris-cache-control","description":"A lightweight WordPress plugin to toggle and auto-clear theme pattern cache during development.","stars":0,"forks":0,"api_url":"https://api.github.com/repos/ardiandev/larris-cache-control"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"larris/blog-post"} /-->
<!-- wp:template-part {"slug":"footer"} /-->



