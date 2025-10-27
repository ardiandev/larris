<?php
/**
 * Title: About Page
 * Slug: larris/about
 * Categories: featured
 * Viewport width: 1400
 * Description: Full page of About Page
 *
 * @package Larris
 */

?>
<!-- wp:template-part {"slug":"header","theme":"larris","tagName":"header"} /-->

<!-- wp:group {"style":{"dimensions":{"minHeight":"85vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:85vh"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<h1 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--50)">About</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Hi there, my name is Ardian.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>I'm a dedicated WordPress theme and plugin developer based in Jakarta, Indonesia. When I'm not coding, I'm at home with my wonderful wife, beautiful daughter, and handsome son.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This website is the hub for my personal web development journey. I use it to share my latest projects, valuable code snippets, and in-depth tutorials on WordPress plugin development.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Are you interested in seeing what I build? Please head over to the <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" data-type="page" data-id="297">Projects Page</a>to explore my custom themes and plugins, including those I develop to extend WordPress core functionality.</p>

<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Thanks for stopping by!</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"larris","tagName":"footer"} /-->