<?php
function framwp_bootstrap4_enqueue() {
    wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
    wp_enqueue_style( 'style','http://localhost:8888/wordpress%202/wp-content/themes/twentyfive/style.css');
}
add_action( 'wp_enqueue_scripts', 'framwp_bootstrap4_enqueue' );

function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


class Header_Walker extends Walker_Nav_Menu {

    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
    	$object = $item->object;
    	$type = $item->type;
    	$title = $item->title;
    	$description = $item->description;
    	$permalink = $item->url;

        if( $permalink && $permalink != '#' ) {
            $output .= '<a class="p-2 text-muted" href="' . $permalink . '">';
        } else {
            $output .= '<a class="p-2 text-muted" href="#" >';
        }
        
        $output .= $title;

        $output .= '</a>';
    }

}

?>