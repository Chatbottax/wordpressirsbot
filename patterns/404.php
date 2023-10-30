<?php
/**
 * Title: A 404 page
 * Slug: enroute/404
 * Inserter: no
 */
?>
<!-- wp:heading {"textAlign":"left","level":1,"fontSize":"medium","anchor":"oops-that-page-can-t-be-found"} -->
<h1 class="wp-block-heading has-text-align-left has-medium-font-size" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'Oops! That page can’t be found.', 'enroute' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'enroute' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"enroute/search"} /-->
