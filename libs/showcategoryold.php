<?php 

// original 

function show_category_posts( $atts ){

        extract(shortcode_atts(array(
                'cat'=> ''
        ), $atts));

        query_posts('cat='.$cat.'&orderby=date&order=ASC&posts_per_page=-1');

        if ( have_posts() ){
                $content = '<ul>';
                while ( have_posts() ){
                        the_post();
                        $content .= the_title('<li><a href="'.get_permalink().'">', '</a></li>', true);
                        previous_image_link();
                        the_excerpt();
                }
                $content .= '</ul>';
        }

        //Reset query
        wp_reset_query();

        return $content;
}

add_shortcode('mostrar_cat', 'show_category_posts');


?>