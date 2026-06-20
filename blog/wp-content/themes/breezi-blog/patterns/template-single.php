<?php
/**
 * Title: Template single
 * Slug: breezi-blog/template-single
 * Categories: pages
 * Keywords: post, single
 */
?>

<!-- wp:group {"metadata":{"name":"Single Page Layout"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-64","bottom":"var:preset|spacing|spacing-120","left":"var:preset|spacing|spacing-32","right":"var:preset|spacing|spacing-32"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-64);padding-right:var(--wp--preset--spacing--spacing-32);padding-bottom:var(--wp--preset--spacing--spacing-120);padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:post-title {"level":1,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"h2"} /-->

<!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-32","bottom":"var:preset|spacing|spacing-32"}}}} /-->

<!-- wp:post-content /-->

<!-- wp:group {"metadata":{"categories":["posts"],"patternName":"breezi-blog/author-box","name":"Author Box"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-40","bottom":"var:preset|spacing|spacing-40","left":"0px","right":"0px"},"margin":{"top":"var:preset|spacing|spacing-32"}},"border":{"radius":"15px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:15px;margin-top:var(--wp--preset--spacing--spacing-32);padding-top:var(--wp--preset--spacing--spacing-40);padding-right:0px;padding-bottom:var(--wp--preset--spacing--spacing-40);padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Navigation"},"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|spacing-48","bottom":"var:preset|spacing|spacing-64"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--spacing-48);margin-bottom:var(--wp--preset--spacing--spacing-64);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|spacing-140"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"linkLabel":true,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} /-->

<!-- wp:post-navigation-link {"textAlign":"left","showTitle":true,"linkLabel":true,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:comments {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-comments" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:comments-title {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|spacing-40","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"h5"} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|spacing-16"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:avatar {"size":40} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-8","margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:comment-author-name {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|spacing-16"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:comment-date /-->

<!-- wp:comment-edit-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content {"fontSize":"p-2"} /-->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-40","bottom":"var:preset|spacing|spacing-40"}}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--spacing-40);margin-bottom:var(--wp--preset--spacing--spacing-40)"/>
<!-- /wp:separator -->

<!-- wp:comment-reply-link /-->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"h5"} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->