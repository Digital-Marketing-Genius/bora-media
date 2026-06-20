<?php
/**
 * Title: Testimonials
 * Slug: breezi-blog/testimonials
 * Categories: query, feature
 * Keywords: testimonials
 * Description: Testimonials section with testimonials from readers.
 */
$image_url = trailingslashit(get_template_directory_uri());
$images = [
    $image_url . "assets/image/Testimonials-1.png",
    $image_url . "assets/image/Testimonials-2.png",
    $image_url . "assets/image/Testimonials-3.png",
];

?>

<!-- wp:group {"metadata":{"name":"Testimonials","categories":["testimonial"],"patternName":"breezi-blog/testimonials"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-120","bottom":"var:preset|spacing|spacing-120","left":"var:preset|spacing|spacing-32","right":"var:preset|spacing|spacing-32"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-120);padding-right:var(--wp--preset--spacing--spacing-32);padding-bottom:var(--wp--preset--spacing--spacing-120);padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"center","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|spacing-8"}}}} -->
<h2 class="wp-block-heading alignwide has-text-align-center" style="margin-top:var(--wp--preset--spacing--spacing-8);font-style:normal;font-weight:700"><?php esc_html_e( 'What readers are saying', 'breezi-blog' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-64"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--spacing-24);margin-bottom:var(--wp--preset--spacing--spacing-64);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"right":"0","bottom":"0","left":"0","top":"0"}}},"fontSize":"p-1"} -->
<p class="has-text-align-center has-p-1-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e( 'Breezi Blog helps designers, developers and founders learn faster with clear, practical articles they can use in real projects.', 'breezi-blog' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|spacing-32","left":"var:preset|spacing|spacing-32"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|spacing-32","bottom":"var:preset|spacing|spacing-32","left":"var:preset|spacing|spacing-32","right":"var:preset|spacing|spacing-32"},"margin":{"top":"0","bottom":"0"}}},"borderColor":"neutral-100","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-border-color has-neutral-100-border-color" style="border-width:1px;border-radius:8px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-32);padding-right:var(--wp--preset--spacing--spacing-32);padding-bottom:var(--wp--preset--spacing--spacing-32);padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|spacing-16"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":34,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"100px"}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-34" style="border-radius:100px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"p-1"} -->
<h3 class="wp-block-heading has-p-1-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Maya', 'breezi-blog' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"p-2"} -->
<p class="has-p-2-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Product Designer', 'breezi-blog' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-24","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"p-1"} -->
<p class="has-p-1-font-size" style="margin-top:var(--wp--preset--spacing--spacing-24);margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e( 'Breezi Blog has become my go-to place for UI and UX tips. The articles are short, clear and always give me something I can apply in my next design.', 'breezi-blog' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|spacing-32","bottom":"var:preset|spacing|spacing-32","left":"var:preset|spacing|spacing-32","right":"var:preset|spacing|spacing-32"},"margin":{"top":"0","bottom":"0"}}},"borderColor":"neutral-100","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-border-color has-neutral-100-border-color" style="border-width:1px;border-radius:8px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-32);padding-right:var(--wp--preset--spacing--spacing-32);padding-bottom:var(--wp--preset--spacing--spacing-32);padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|spacing-16"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":34,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"100px"}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($images[1]); ?>" alt="" class="wp-image-34" style="border-radius:100px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"p-1"} -->
<h3 class="wp-block-heading has-p-1-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Anika', 'breezi-blog' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"p-2"} -->
<p class="has-p-2-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Small Business Owner', 'breezi-blog' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"var:preset|spacing|spacing-24","bottom":"0","left":"0","right":"0"}}},"fontSize":"p-1"} -->
<p class="has-p-1-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--spacing-24);padding-right:0;padding-bottom:0;padding-left:0"><em><?php esc_html_e( 'Breezi Blog makes complex topics feel simple. Every article breaks things down step by step, so I finish reading with direction and something practical to try immediately.', 'breezi-blog' ); ?></em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|spacing-32","bottom":"var:preset|spacing|spacing-32","left":"var:preset|spacing|spacing-32","right":"var:preset|spacing|spacing-32"},"margin":{"top":"0","bottom":"0"}}},"borderColor":"neutral-100","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-border-color has-neutral-100-border-color" style="border-width:1px;border-radius:8px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-32);padding-right:var(--wp--preset--spacing--spacing-32);padding-bottom:var(--wp--preset--spacing--spacing-32);padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|spacing-16"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":34,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"100px"}}} -->
<figure class="wp-block-image size-full has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($images[2]); ?>" alt="" class="wp-image-34" style="border-radius:100px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"p-1"} -->
<h3 class="wp-block-heading has-p-1-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Kristin', 'breezi-blog' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"p-2"} -->
<p class="has-p-2-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Front-end Developer', 'breezi-blog' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-24","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"p-1"} -->
<p class="has-p-1-font-size" style="margin-top:var(--wp--preset--spacing--spacing-24);margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php esc_html_e( 'Reading Breezi Blog feels like learning from a friendly teammate. The guides, checklists and examples show what to do next, so I move projects forward faster and with confidence.', 'breezi-blog' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->