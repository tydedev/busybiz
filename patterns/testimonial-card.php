<?php

/**
 * Testimonial Card
 * Title: Testimonial Card
 * Slug: busybiz/testimonial-card
 * Categories: featured
 * Block Types: core/group
 * Description: A testimonial card with an image, name, and quote.
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"categories":["featured"],"patternName":"busybiz/testimonial-card","name":"Testimonial Card"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}}},"layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group" style="border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"id":135,"width":"76px","height":"auto","sizeSlug":"large","linkDestination":"none","align":"center","style":{"border":{"radius":{"topLeft":"100%","topRight":"100%","bottomLeft":"100%","bottomRight":"100%"}}}} -->
<figure class="wp-block-image aligncenter size-large is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pattern-placeholders/portrait.png" class="wp-image-135" style="border-top-left-radius:100%;border-top-right-radius:100%;border-bottom-left-radius:100%;border-bottom-right-radius:100%;width:76px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">Jane Doe Says</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">“We were looking for a strong visual direction, not just ‘nice graphics’. What we got was a well-thought-out design system that elevated our brand and made everything feel more professional and coherent.”</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->