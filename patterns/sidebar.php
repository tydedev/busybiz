<?php

/**
 * Sidebar
 * Title: Sidebar
 * Slug: busybiz/sidebar
 * Categories: featured
 * Block Types: core/group
 * Description: A Sidebar.
 */

?>

<!-- wp:group {"metadata":{"categories":["featured"],"patternName":"busybiz/sidebar","name":"Sidebar"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"full","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}}},"backgroundColor":"light","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignfull has-light-background-color has-background" style="border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-link-color">Last Posts</h4>
<!-- /wp:heading -->

<!-- wp:query {"queryId":36,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true,"fontSize":"small"} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"fontSize":"x-small"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}}},"backgroundColor":"light","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignfull has-light-background-color has-background" style="border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-link-color">Last Comments</h4>
<!-- /wp:heading -->

<!-- wp:latest-comments {"commentsToShow":3,"displayAvatar":false,"displayExcerpt":false,"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->