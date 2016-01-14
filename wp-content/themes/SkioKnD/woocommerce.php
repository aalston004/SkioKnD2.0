function skio_knd_wrapper_start() {  
    echo '&lt;div id="primary" class="content-area"&gt;';
}
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
add_action( 'woocommerce_before_main_content', 'skio_knd_wrapper_start', 10 ); 
 
function skio_knd_wrapper_end() {
    echo '&lt;/div&gt;';
}
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );  
add_action( 'woocommerce_after_main_content', 'skio_knd_wrapper_end', 10 );
