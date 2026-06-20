<?php
/**
 * Title: Posts grid
 * Slug: breezi-blog/posts-grid
 * Categories: query, feature
 * Keywords: posts, blog, grid, archive
 * Description: A grid of recent posts for use on the blog page.
 */
?>

<!-- wp:group {"metadata":{"name":"Post Grid"},"align":"wide","style":{"spacing":{"padding":{"left":"var:preset|spacing|spacing-32","right":"var:preset|spacing|spacing-32","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:0;padding-right:var(--wp--preset--spacing--spacing-32);padding-bottom:0;padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"center","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|spacing-8"}}}} -->
<h2 class="wp-block-heading alignwide has-text-align-center" style="margin-top:var(--wp--preset--spacing--spacing-8);font-style:normal;font-weight:700"><?php esc_html_e( 'Fresh stories & insights', 'breezi-blog' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-64"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--spacing-24);margin-bottom:var(--wp--preset--spacing--spacing-64);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"right":"0","bottom":"0","left":"0","top":"0"}}},"fontSize":"p-1"} -->
<p class="has-text-align-center has-p-1-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e( 'Read what we’ve been writing about this week.', 'breezi-blog' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-16","padding":{"bottom":"var:preset|spacing|spacing-32"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--spacing-32)"><!-- wp:post-featured-image {"isLink":true,"height":"220px","style":{"border":{"radius":"10px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-8","margin":{"top":"var:preset|spacing|spacing-16"}}}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--spacing-16)"><!-- wp:post-date {"fontSize":"p-3"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"p-1"} /-->

<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":10,"fontSize":"p-2"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"fontSize":"p-2","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->