<?php

// swiper
function swiper(){
    wp_register_style(
        "swiper-css",
        "https://unpkg.com/swiper@8/swiper-bundle.min.css"
    );
    wp_enqueue_style( 'swiper-css' );

    wp_enqueue_script(
        "swiper-js",
        "https://unpkg.com/swiper@8/swiper-bundle.min.js",
        array(),
        false,
        true
    );

    wp_enqueue_script('swiper-bundle03','https://unpkg.com/swiper/swiper-bundle.js', array(), '1.0', true);
    wp_enqueue_script('swiper-bundle04','https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '1.0', true,);
}
add_action( 'wp_enqueue_scripts', 'swiper' );



// CSS,JavaScript
function my_scripts() {
    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style('gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('Unna', 'https://fonts.googleapis.com/css2?family=Unna:wght@400;700&display=swap');
    wp_enqueue_style('swiper-bundle-min', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('swiper-bundle', 'https://unpkg.com/swiper/swiper-bundle.css');

    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset__css/reset.css');
    if(is_page('service')){
    wp_enqueue_style( 'service', get_template_directory_uri() . '/css/Service__css/Service.css');
    }elseif(is_page('about')){
    wp_enqueue_style('about2', get_template_directory_uri() . '/css/About__css/About.css');
    }elseif(is_page('works')){
    wp_enqueue_style( 'works', get_template_directory_uri() . '/css/Works__css/Works__mainpage.css');
    }elseif(is_page('contact')){
    wp_enqueue_style( 'contact', get_template_directory_uri() . '/css/Contact__css/Contact.css');
    }elseif(is_page(array('Cafe','building','Dogrun','Englishschool','Kindergarden', 'Myportfolio','Officedesign','Profilesite','Sneakers','Travel'))){
    wp_enqueue_style( 'sub-page', get_template_directory_uri() . '/css/Works__css/Works__subpage.css');
    }elseif(is_home() || is_front_page()){
    wp_enqueue_style( 'style', get_template_directory_uri() .'/style.css');
    }elseif(is_single()){
      wp_enqueue_style( 'single-works', get_template_directory_uri() . '/css/Works__css/Works__subpage.css');
    }
    wp_enqueue_script('javascript', get_template_directory_uri() . '/javascript/main.js', array(), '1.0', true);

}
    add_action( 'wp_enqueue_scripts', 'my_scripts' );



    function mvwpform_autop_filter() {
      if ( class_exists( 'MW_WP_Form_Admin' ) ) {
        $mw_wp_form_admin = new MW_WP_Form_Admin();
        $forms = $mw_wp_form_admin->get_forms();
        foreach ( $forms as $form ) {
          add_filter( 'mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false' );
        }
      } 
    }
    mvwpform_autop_filter();
    


    // カスタム投稿タイプ
    function cpt_register_works(){
      $labels=[
        "singular_name" => "works",
        "edit_item" => "works",
      ];
      $args=[
        // サイドバーにworksを追加する
        "label" => "Works",
        "labels" => "$labels",
        "description" => "",
        "public" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "map_meta_cap" => true,
        "hierachical" => true,
        "rewrite" => ["slug" => "works","with_front"=> true],
        "query_var" => true,
        // サイドバーにメニューを表示する位置
        "menu_position" => 5,
        "supports" =>["title","editor","thumbnail"],
      ];
      register_post_type("works",$args);

    }
    add_action("init","cpt_register_works");


    // カテゴリーを追加
    function cpt_register_dep(){
      $labels=[
        "singular_name" => "dep",
      ];
      $args=[
        "label" => "カテゴリー",
        "labels" => "$labels",
        "publicly_queryable" =>true,
        "hierachical" => true,
        "show_in_menu" => true,
        "query_var" => true,
        "rewrite" => ["slug" => "dep","with_front"=> true],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "dep",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
      ];
      register_taxonomy("dep",["works"],$args);

    }
    add_action("init","cpt_register_dep");



  
    function change_posts_per_page($query) {
      if ( is_admin() || ! $query->is_main_query() )
          return;
  
      if ( $query->is_page('works') ) {
          $query->set( 'posts_per_page', '30' );
      }
  }
  add_action( 'pre_get_posts', 'change_posts_per_page' );

?>

