<?php

/**
 * Default footer
 * Title: Footer
 * Slug: busybiz/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with site title, links, and copyright. This is the default footer with dynamic current year, and site title.
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|gray","width":"1px"},"right":{},"bottom":{},"left":{}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div
  class="wp-block-group"
  style="
    border-top-color: var(--wp--preset--color--gray);
    border-top-width: 1px;
    padding-top: var(--wp--preset--spacing--40);
    padding-right: var(--wp--preset--spacing--40);
    padding-bottom: var(--wp--preset--spacing--40);
    padding-left: var(--wp--preset--spacing--40);
  "
>
  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|40"}}} -->
  <div
    class="wp-block-group alignwide"
    style="padding-top: 0; padding-bottom: 0; padding-left: 0"
  >
    <!-- wp:columns -->
    <div class="wp-block-columns">
      <!-- wp:column {"width":"33.33%"} -->
      <div class="wp-block-column" style="flex-basis: 33.33%">
        <!-- wp:site-title {"level":5} /-->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"width":"33.33%"} -->
      <div class="wp-block-column" style="flex-basis: 33.33%"></div>
      <!-- /wp:column -->

      <!-- wp:column {"width":"33.33%"} -->
      <div class="wp-block-column" style="flex-basis: 33.33%"></div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","orientation":"horizontal"}} -->
    <div class="wp-block-group">
      <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-group">
        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">
          <?php echo get_bloginfo( 'name' ); ?>
         &copy; 
          <?php echo date('Y'); ?> - All rights reserved.
        </p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
      <p class="has-small-font-size">
        BusyBiz theme developed by <a href="https://tydedev.it" rel="nofollow">Tydedev</a>
      </p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
