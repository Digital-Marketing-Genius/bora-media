<?php
/**
 * Title: Template Archive
 * Slug: breezi-blog/template-archive
 * Categories: template
 * Inserter: false
 */
?>

<!-- wp:group {"metadata":{"name":"All Archives"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"archive","textAlign":"center","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-64","bottom":"var:preset|spacing|spacing-64"}}},"fontSize":"h2"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|spacing-32","left":"var:preset|spacing|spacing-32","bottom":"var:preset|spacing|spacing-120"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--spacing-32);padding-bottom:var(--wp--preset--spacing--spacing-120);padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"100%","style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:100%"><!-- wp:query {"queryId":39,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|spacing-24","top":"0","left":"0","right":"0"},"padding":{"bottom":"0","top":"0","right":"0","left":"0"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|spacing-16","right":"0","bottom":"var:preset|spacing|spacing-24","left":"0"}}},"textColor":"heading","fontSize":"h6"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:post-author-name /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"p-2"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-48","bottom":"var:preset|spacing|spacing-48"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--spacing-48);margin-bottom:var(--wp--preset--spacing--spacing-48)"/>
<!-- /wp:separator -->

<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"p-1","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->