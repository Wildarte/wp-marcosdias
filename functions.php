<?php

    function wp_insert_scripts(){

        wp_enqueue_script('m-jquery', get_template_directory_uri().'/assets/js/jquery-3.6.0.min.js',[], '1.0', true);
        wp_enqueue_script('jquery-mask', get_template_directory_uri().'/assets/js/jquery.mask.min.js',[], '1.0', true);
        wp_enqueue_script('owl-carousel-js', get_template_directory_uri().'/assets/js/owl.carousel.min.js',[], '1.0', true);
        wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js',[], '1.0', true);
        wp_enqueue_script('script-office2', get_template_directory_uri().'/assets/js/script-office2.js',[], '1.0', true);
        wp_enqueue_script('map-script', get_template_directory_uri().'/assets/js/map-script.js',[], '1.0', true);


        //====== styles =================
        wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', [], '1.0', 'all');
        wp_enqueue_style('owl-theme-default', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', [], '1.0', 'all');
        wp_enqueue_style('m-carousel', get_template_directory_uri().'/assets/css/m-carousel.css', [], '1.0', 'all');
        wp_enqueue_style('reset', get_template_directory_uri().'/assets/css/reset.css', [], '1.0', 'all');
        wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', [], '1.0', 'all');
        wp_enqueue_style('post', get_template_directory_uri().'/assets/css/post.css', [], '1.0', 'all');
        wp_enqueue_style('map-style', get_template_directory_uri().'/assets/css/map-style.css', [] ,'1.0', 'all');
        
    }
    add_action('wp_enqueue_scripts', 'wp_insert_scripts');

    // Funções para Limpar o Header
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0 );
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');


    // Habilitar Menus
    add_theme_support('menus');

    //add support to thumbnail post
    add_theme_support( 'post-thumbnails', ['post']);


    //add custom length to excerpt
    function my_excerpt_length($length){
        return 20;
    }
    add_filter('excerpt_length', 'my_excerpt_length');
    
    //function for custom excerpt read more
    function wpdocs_excerpt_more( $more ) {
        return '...';
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

    // gerenciamento de logo
    function ed_custom_logo() {
        add_theme_support('custom-logo'); 
    }
    add_action('after_setup_theme', 'ed_custom_logo'); // carrega parametros de suporte do tema

    function register_my_menu(){
        register_nav_menus([
            'menu-principal' => __('Menu Principal'),
            'menu-rodape' => __('Menu Rodapé')
        ]);
    }
    add_action('init', 'register_my_menu');


    add_theme_support('custom-fields');

    
    //get name term by slug term
    function get_nameterm_by_slugterm($slugTerm){
        $get_id_term_query = [
            'taxonomy' => 'category',
            'hide_empty' => false,
            'slug' => $slugTerm,
        ];
        $get_id_term = get_terms($get_id_term_query);

        if($get_id_term){
            return $get_id_term[0]->name;
            echo "retornou true";
        }else{
            false;
            echo "retornou false";
        }
    }


    //funcao que atribui um valor para ranking de posts 
    function wpb_set_count_post($postID, $val){
        $count_key_post = 'wpb_count_post';
        $contagem = get_post_meta($postID, $count_key_post, true);
        if($contagem == ''){
            delete_post_meta(155, $count_key_post);
            add_post_meta(155, $count_key_post, '1');
            echo "caiu no if"."<br>";
            echo "valor da variavel contagem: ".$contagem;
        }else{
            update_post_meta($postID, $count_key_post, $val);
            echo "nao caiu no if"."<br>";
        }
    }

    //function for count view more popular posts
    function wpb_set_post_views($postID) {
        $count_key = 'wpb_post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        }else{
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }




   /** Pagination */
    function pagination_funtion() {
        // Get total number of pages
        global $wp_query;
        $total = $wp_query->max_num_pages;
        // Only paginate if we have more than one page                   
        if ( $total > 1 )  {
            // Get the current page
            if ( !$current_page = get_query_var('paged') ){ 
                $current_page = 1;
            };
                            
            $big = 999999999;
            // Structure of "format" depends on whether we’re using pretty permalinks
            $permalink_structure = get_option('permalink_structure');
            $format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/';
            echo paginate_links(array(
                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                'format' => $format,
                'current' => $current_page,
                'total' => $total,
                'mid_size' => 2,
                'type' => 'list'
            ));
        }
    }
    /** END Pagination */

  //Exclude pages from WordPress Search
  /*
    if (!is_admin()) {
        function wpb_search_filter($query) {
            if ($query->is_search) {
                $query->set('post_type', 'post');
            }
            return $query;
        }
        add_filter('pre_get_posts','wpb_search_filter');
    }
    */  


    function get_id_by_template_name($template_name){

        $page = "";

        $pages = get_pages(array(
            'meta_key' => '_wp_page_template',
            'meta_value' => $template_name
        ));
        foreach($pages as $page){
            return   $page->ID;
        }
    }

    include('admin/postfield.php');
    include('admin/fieldsSMTP.php');



    

?>