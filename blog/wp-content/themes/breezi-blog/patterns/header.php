<?php
/**
 * Title: Header
 * Slug: breezi-blog/header
 * Categories: header
 */
?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'breezi-blog'); ?></a>

<!-- wp:group {"metadata":{"name":"Header","categories":["header"],"patternName":"breezi-blog/header"},"align":"wide","style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|spacing-32","left":"var:preset|spacing|spacing-32"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"
    style="padding-right:var(--wp--preset--spacing--spacing-32);padding-left:var(--wp--preset--spacing--spacing-32)">
    <!-- wp:group {"metadata":{"patternName":"breezi-blog/header","name":"Header"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-24","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background-white"}}}},"textColor":"background-white","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-background-white-color has-text-color has-link-color"
        style="margin-top:var(--wp--preset--spacing--spacing-24);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:group {"className":"alignwide","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-16","bottom":"var:preset|spacing|spacing-16","left":"var:preset|spacing|spacing-32","right":"var:preset|spacing|spacing-16"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"100px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignwide"
            style="border-radius:100px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-16);padding-right:var(--wp--preset--spacing--spacing-16);padding-bottom:var(--wp--preset--spacing--spacing-16);padding-left:var(--wp--preset--spacing--spacing-32)">
            <!-- wp:site-title {"fontSize":"h5"} /-->

            <!-- wp:navigation {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-40"},"typography":{"textDecoration":"none"}},"layout":{"type":"flex","justifyContent":"center"}} -->
            <!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

            <!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

            <!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->

            <!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->