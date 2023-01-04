<?php

function alpha_bootstrapping(){
   load_theme_textdomain("alpha");
   add_theme_support("post-thumbnails");
   add_theme_support("title-tag");
   register_nav_menu( "topmenu", __("Top Menu", "alpha") );
   register_nav_menu("footermenu", __("Footer Menu", "alpha"));
}
add_action("after_setup_theme", "alpha_bootstrapping");


function alpha_assets(){
   wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
   wp_enqueue_style("alpha_style", get_stylesheet_uri( ));
   wp_enqueue_style("featherlight_style", "//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css");

   wp_enqueue_script( "featherlight_script", "//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js", array("jquery"), "1.0", true );
}
add_action("wp_enqueue_scripts", "alpha_assets");


function alpha_sidebar(){
   register_sidebar(
      array(
         'name'          => __( 'Alpha Footer', 'alpha' ),
         'id'            => 'sidebar-1',
         'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
         'before_widget' => '<section id="%1$s" class="widget %2$s">',
         'after_widget'  => '</section>',
         'before_title'  => '<h2 class="widgettitle">',
         'after_title'   => '</h2>',
      )
   );
   register_sidebar(
      array(
         'name'          => __( 'Alpha Sidebar', 'alpha' ),
         'id'            => 'sidebar-2',
         'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
         'before_widget' => '<section id="%1$s" class="widget %2$s">',
         'after_widget'  => '</section>',
         'before_title'  => '<h2 class="widgettitle">',
         'after_title'   => '</h2>',
      )
   );
}
add_action("widgets_init", "alpha_sidebar");

function alpha_menu_list_class($classes , $item){
   $classes[] = "list-inline-item";
   return $classes;
}
add_filter( "nav_menu_css_class", "alpha_menu_list_class", 10, 2 );


