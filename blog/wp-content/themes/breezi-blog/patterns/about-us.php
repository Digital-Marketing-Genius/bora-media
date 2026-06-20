<?php
/**
 * Title: About Us
 * Slug: breezi-blog/about-us
 * Categories: text, columns
 * Keywords: about, intro
 * Description: Short introduction to the blog with image and text.
 */
$image_url = trailingslashit(get_template_directory_uri());
$images = [
    $image_url . "assets/image/team-meeting.jpg",
];

?>

<!-- wp:group {"metadata":{"categories":["about"],"patternName":"breezi-blog/about-us","name":"About us"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-120","bottom":"var:preset|spacing|spacing-120","left":"var:preset|spacing|spacing-32","right":"var:preset|spacing|spacing-32"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" id="about" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-120);padding-right:var(--wp--preset--spacing--spacing-32);padding-bottom:var(--wp--preset--spacing--spacing-120);padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:gallery {"linkTo":"none","sizeSlug":"full"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":32,"sizeSlug":"full","linkDestination":"none","className":"is-style-default","style":{"border":{"radius":"10px"},"color":[],"spacing":{"margin":{"right":"0","left":"0"}}}} -->
<figure class="wp-block-image size-full has-custom-border is-style-default" style="margin-right:0;margin-left:0"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-32" style="border-radius:10px"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"50%","layout":{"type":"constrained","contentSize":"","justifyContent":"left","wideSize":""}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"top":"var:preset|spacing|spacing-8","right":"0","left":"0","bottom":"var:preset|spacing|spacing-32"}}}} -->
<h2 class="wp-block-heading" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--spacing-8);padding-right:0;padding-bottom:var(--wp--preset--spacing--spacing-32);padding-left:0"><?php esc_html_e( 'Ideas, stories and lessons from campaigns and experiments', 'breezi-blog' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-40"}}},"fontSize":"p-1"} -->
<p class="has-text-align-left has-p-1-font-size" style="margin-top:var(--wp--preset--spacing--spacing-24);margin-bottom:var(--wp--preset--spacing--spacing-40"><?php esc_html_e( 'Bora Media shares practical articles on design, marketing campaigns, A/B Testings, website development and content strategy to help you create better digital experiences. Expect honest insights, step-by-step guides and examples from real projects.', 'breezi-blog' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->