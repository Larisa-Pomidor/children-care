<?php

add_action('init', 'theme_support');
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');

function style_theme()
{
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('flaticons', get_template_directory_uri() . '/assets/fonts/flaticons/flaticon.css');
    wp_enqueue_style('glyphicons', get_template_directory_uri() . '/assets/fonts/glyphicons/bootstrap-glyphicons.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700,800%7CAlegreya+Sans:700,900');

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('funtime', get_template_directory_uri() . '/assets/css/funtime.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
    wp_enqueue_style('pretty-photo', get_template_directory_uri() . '/assets/css/prettyPhoto.css');
    wp_enqueue_style('layerslider', get_template_directory_uri() . '/assets/css/layerslider.css');

    wp_enqueue_style('skin', get_template_directory_uri() . '/assets/js/layerslider/skins/v5/skin.css');
}

function scripts_theme()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-2.2.3.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('j-isotop', get_template_directory_uri() . '/assets/js/jquery.isotope.js');
    wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js');
    wp_enqueue_script('prefixfree', get_template_directory_uri() . '/assets/js/prefixfree.js');

    wp_enqueue_script('greensock', get_template_directory_uri() . '/assets/js/layerslider/js/greensock.js');
    wp_enqueue_script('lslider-load', get_template_directory_uri() . '/assets/js/layerslider/js/layerslider.load.js');
    wp_enqueue_script('lslider-trans', get_template_directory_uri() . '/assets/js/layerslider/js/layerslider.transitions.js');
    wp_enqueue_script('lslider-kreature', get_template_directory_uri() . '/assets/js/layerslider/js/layerslider.kreaturamedia.jquery.js');

    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/main.js');
}

function theme_support()
{
    add_theme_support('post-thumbnails', array('post', 'services', 'feedback', 'team'));
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
}


add_filter('upload_mimes', 'svg_upload_allow');

function svg_upload_allow($mimes)
{
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    } else {
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));
    }

    if ($dosvg) {
        if (current_user_can('manage_options')) {

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        } else {
            $data['ext']  = false;
            $data['type'] = false;
        }
    }

    return $data;
}

add_action('init', 'register_services');
add_action('init', 'register_feedback');
add_action('init', 'register_team');

function register_services()
{
    register_post_type('services', [
        'taxonomies' => [], // post related taxonomies
        'label'  => null,
        'labels' => [
            'name'               => 'Services', // name for the post type.
            'singular_name'      => 'Service', // name for single post of that type.
            'add_new'            => 'Add New Service', // to add a new post.
            'add_new_item'       => 'Adding Services', // title for a newly created post in the admin panel.
            'edit_item'          => 'Edit Services', // for editing post type.
            'new_item'           => 'New Service', // new post's text.
            'view_item'          => 'See Services', // for viewing this post type.
            'search_items'       => 'Search Services', // search for these post types.
            'not_found'          => 'Not Found', // if search has not found anything.
            'parent_item_colon'  => '', // for parents (for hierarchical post types).
            'menu_name'          => 'Services', // menu name.
        ],
        'description'         => 'Возрастные группы детей, для которых предоставляюися услуги',
        'public'              => true,
        'show_in_menu'        => true, // whether to in admin panel menu
        'show_in_rest'        => true, // Add to REST API. WP 4.7.
        'rest_base'           => null, // $post_type. WP 4.7.
        'menu_position'       => 4,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'thumbnail'],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
}

function register_feedback()
{
    register_post_type('feedback', [
        'taxonomies' => [], // post related taxonomies
        'label'  => null,
        'labels' => [
            'name'               => 'Feedback', // name for the post type.
            'singular_name'      => 'Feedback', // name for single post of that type.
            'add_new'            => 'Add New Feedback', // to add a new post.
            'add_new_item'       => 'Adding Feedback', // title for a newly created post in the admin panel.
            'edit_item'          => 'Edit Feedback', // for editing post type.
            'new_item'           => 'New Feedback', // new post's text.
            'view_item'          => 'See Feedback', // for viewing this post type.
            'search_items'       => 'Search Feedback', // search for these post types.
            'not_found'          => 'Not Found', // if search has not found anything.
            'parent_item_colon'  => '', // for parents (for hierarchical post types).
            'menu_name'          => 'Feedback', // menu name.
        ],
        'description'         => 'Отзывы родителей',
        'public'              => true,
        'show_in_menu'        => true, // whether to in admin panel menu
        'show_in_rest'        => true, // Add to REST API. WP 4.7.
        'rest_base'           => null, // $post_type. WP 4.7.
        'menu_position'       => 4,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'thumbnail'],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
}

function register_team()
{
    register_post_type('team', [
        'taxonomies' => [], // post related taxonomies
        'label'  => null,
        'labels' => [
            'name'               => 'Team', // name for the post type.
            'singular_name'      => 'Team Member', // name for single post of that type.
            'add_new'            => 'Add New Team Member', // to add a new post.
            'add_new_item'       => 'Adding Team Member', // title for a newly created post in the admin panel.
            'edit_item'          => 'Edit Team Member', // for editing post type.
            'new_item'           => 'New Team Member', // new post's text.
            'view_item'          => 'See Team Member', // for viewing this post type.
            'search_items'       => 'Search Team Member', // search for these post types.
            'not_found'          => 'Not Found', // if search has not found anything.
            'parent_item_colon'  => '', // for parents (for hierarchical post types).
            'menu_name'          => 'Team', // menu name.
        ],
        'description'         => 'Воспитатели детского сада',
        'public'              => true,
        'show_in_menu'        => true, // whether to in admin panel menu
        'show_in_rest'        => true, // Add to REST API. WP 4.7.
        'rest_base'           => null, // $post_type. WP 4.7.
        'menu_position'       => 4,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => ['title', 'editor', 'thumbnail'],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ]);
}
