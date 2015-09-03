<?php
function list_cat(){
$categories = get_the_category();
//$categories = exclude_categoria();
$sep = ' | ';
$out = '';
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
	if ($category->cat_name=="DESTACADA" ||
	    $category->cat_name=="SILUETA"   ||
$category->cat_name=="Rápidas"  |
	    $category->cat_name=="Caracazo"  ||
	    $category->cat_name=="COLUMNA1A" ||
	    $category->cat_name=="COLUMNA2A" ||
	    $category->cat_name=="COLUMNA1B" ||
	    $category->cat_name=="COLUMNA2B" ){
	}
	else
	{
        $out .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( sprintf( __( 'click para %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $sep;
	}
    }
    echo trim( $out, $sep );
}
}
?>
