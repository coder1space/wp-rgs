function random_gallery_shortcode( $atts ){
    $ids_array  = explode(",", $atts['ids']);
    $ids_array  = array_values($ids_array);
    $min        = tag_escape($atts['min']);
    $ids_array  = array_slice($ids_array, 0, rand($min, (count($ids_array))));
    
    $ids        = implode(",", $ids_array);
    $columns    = $atts['columns'];
    $link       = $atts['link'];
    $orderby    = $atts['orderby'];
    $size       = $atts['size'];
    
    echo do_shortcode('['
            .'gallery ids="'. $ids .'" '
            .'columns="'. $columns .'" '
            .'link="'. $link .'" '
            .'orderby="'. $orderby .'" '
            .'size="'. $size .'"'
        .']');
}
add_shortcode('random_gallery', 'random_gallery_shortcode');
