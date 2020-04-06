<?php
/**
 * ASU-Research-Data-WordPress-Child-Theme functions and definitions
 *
 * @author ASU Knowledge Enterprise
 *
 * @package asu-research-data-wordpress-child
 */

 // Remove Pages from search results (only return Post results)
function exclude_pages_from_search($query) {
    if ( $query->is_main_query() && is_search() ) {
        $query->set( 'post_type', 'post' );
    }
    return $query;
}
add_filter( 'pre_get_posts','exclude_pages_from_search' );
