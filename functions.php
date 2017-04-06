<?php 

/*=============Load CSS jS dynamically ===============*/
function Load_Css_JS(){

	/*=============All Css===============*/
    wp_enqueue_style('awesome',get_template_directory_uri().'/Assets/css/font-awesome.min.css',array(),'v1.5012','all');
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/Assets/css/bootstrap.min.css',array(),'v1.5012','all');
    wp_enqueue_style('style',get_template_directory_uri().'/Assets/css/style.css',array(),'v1.5012','all');
    wp_enqueue_style('responsive',get_template_directory_uri().'/Assets/css/responsive.css',array(),'v1.5012','all');


	/*=============All Js===============*/
    wp_enqueue_script('bootstrap.min', get_template_directory_uri().'/Assets/js/bootstrap.min.js',array('jquery'),'v1.78', true);
    wp_enqueue_script('custom', get_template_directory_uri().'/Assets/js/custom.js',array('jquery'),'v1.78', true);
}
add_action('wp_enqueue_scripts','Load_Css_JS');
