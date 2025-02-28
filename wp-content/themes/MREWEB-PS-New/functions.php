<?php
$_DIR = get_bloginfo('template_directory') . '/';
$_URL = site_url() . '/';
$pageURl = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
add_theme_support('post-thumbnails');
register_nav_menus(
    array(
        'topTreeMenu' => __('منوی اصلی سایت'),
        'footerMenu' => __('منو فوتر سایت')
    )
);

function wpb_total_posts() {
    $total = wp_count_posts()->publish;
    echo $total;
}
/*unction dequeue_jquery_migrate( $scripts ) {
	if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
		$scripts->registered['jquery']->deps = array_diff(
			$scripts->registered['jquery']->deps,
			[ 'jquery-migrate' ]
		);
	}
}
add_action( 'wp_default_scripts', 'dequeue_jquery_migrate' );*/
function taxonomy_checklist_checked_ontop_filter($args)
{
    $args['checked_ontop'] = false;
    return $args;
}
add_filter('wp_terms_checklist_args', 'taxonomy_checklist_checked_ontop_filter');
//add_action( 'init', 'register_my_menus' );
$nav_cache = '';
function filter_menu_items($menu){
    global $nav_cache;
    $nav_cache = $menu;
    $a = array('href="#"',  'خانه');
    $b = array(
        'href="javascript:void(0)"',
        '<i class="fa fa-home"></i>'
    );
    $menu = str_replace($a, $b, $menu);
    return $menu;
}
add_filter('wp_nav_menu_items', 'filter_menu_items');
function _image($source, $size)
{
    global $_DIR, $_URL;
    require_once(TEMPLATEPATH . '/Zebra_Image.php');
    $image = new Zebra_Image();
    if (!$source) {
        $source = WP_CONTENT_DIR . '/uploads/no-photo.jpg';
    } else {
        $source = str_replace($_URL . 'wp-content/', WP_CONTENT_DIR . '/', $source);
    }
    $image->source_path = $source;
    $file_name = basename($source);
    $image->target_path = TEMPLATEPATH . '/cache/[' . $size[0] . 'x' . $size[1] . ']' . $file_name;
    $image->jpeg_quality = 100;
    $image->preserve_aspect_ratio = true;
    $image->enlarge_smaller_images = true;
    $image->preserve_time = true;
    if (!file_exists(TEMPLATEPATH . '/cache/[' . $size[0] . 'x' . $size[1] . ']' . $file_name)) {
        $image->resize($size[0], $size[1], ZEBRA_IMAGE_CROP_CENTER);
    }
    return $_DIR . 'cache/' . '[' . $size[0] . 'x' . $size[1] . ']' . $file_name;
}
function _jDate($date)
{
    $date = date_parse($date);
    $year = $date['year'];
    $month = $date['month'];
    $day =  $date['day'];
    $date= jdate('Y-m-d', strtotime($year . '-' . $month . '-' . $day));
    $date=str_ireplace("۱","1",$date);
    $date=str_ireplace("۲","2",$date);
    $date=str_ireplace("۳","3",$date);
    $date=str_ireplace("۴","4",$date);
    $date=str_ireplace("۵","5",$date);
    $date=str_ireplace("۶","6",$date);
    $date=str_ireplace("۷","7",$date);
    $date=str_ireplace("۸","8",$date);
    $date=str_ireplace("۹","9",$date);
    $date=str_ireplace(".","0",$date);
    $date=str_ireplace("۰","",$date);
    return $date;
}
function wp_bootstrap_pagination($args = array())
{
    $defaults = array(
        'range' => 4,
        'custom_query' => FALSE,
        'previous_string' => __('Previous', 'text-domain'),
        'next_string' => __('Next', 'text-domain'),
        'before_output' => '<ul class="wd-navigation mt-20">',
        'after_output' => '</ul>'
    );
    $args = wp_parse_args($args, apply_filters('wp_bootstrap_pagination_defaults', $defaults));
    $args['range'] = (int)$args['range'] - 1;
    if (!$args['custom_query'])
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int)$args['custom_query']->max_num_pages;
    $page = intval(get_query_var('paged'));
    $ceil = ceil($args['range'] / 2);

    if ($count <= 1)
        return FALSE;

    if (!$page)
        $page = 1;

    if ($count > $args['range']) {
        if ($page <= $args['range']) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ($page >= ($count - $ceil)) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ($page >= $args['range'] && $page < ($count - $ceil)) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }

    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr(get_pagenum_link($previous));

    $firstpage = esc_attr(get_pagenum_link(1));

    if (!empty($min) && !empty($max)) {
        for ($i = $min; $i <= $max; $i++) {
            if ($page == $i) {
                $echo .= '<li class="nav-item active"><span class="">' . str_pad((int)$i, 2, '0', STR_PAD_LEFT) . '</span></li>';
            } else {
                $echo .= sprintf('<li><a class="nav-item" href="%s">%002d</a></li>', esc_attr(get_pagenum_link($i)), $i);
            }
        }
    }

    $next = intval($page) + 1;
    $next = esc_attr(get_pagenum_link($next));
    if ($next && ($count != $page))
        $echo .= '<li><a href="' . $next . '" title="' . __('next', 'text-domain') . '">' . $args['next_string'] . '</a></li>';

    $lastpage = esc_attr(get_pagenum_link($count));

    if (isset($echo))
        echo $args['before_output'] . $echo . $args['after_output'];
}
function customize_wp_bootstrap_pagination($args)
{
    $args['previous_string'] = 'صفحه قبل';
    $args['next_string'] = 'صفحه بعد';
    return $args;
}
add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }
    else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');
function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 بازدید";
    }
    return $count.' بازدید';
}
/*// remove header links
add_action('init', 'tjnz_head_cleanup');
function tjnz_head_cleanup() {
    remove_action( 'wp_head', 'feed_links_extra', 3 );                      // Category Feeds
    remove_action( 'wp_head', 'feed_links', 2 );                            // Post and Comment Feeds
    remove_action( 'wp_head', 'rsd_link' );                                 // EditURI link
    remove_action( 'wp_head', 'wlwmanifest_link' );                         // Windows Live Writer
    remove_action( 'wp_head', 'index_rel_link' );                           // index link
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );              // previous link
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );               // start link
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );   // Links for Adjacent Posts
    remove_action( 'wp_head', 'wp_generator' );                             // WP version
    if (!is_admin()) {
        wp_deregister_script('jquery');                                     // De-Register jQuery
        wp_register_script('jquery', '', '', '', true);                     // Register as 'empty', because we manually insert our script in header.php
    }
}
// remove WP version from RSS
add_filter('the_generator', 'tjnz_rss_version');*/
function tjnz_rss_version() { return ''; }
function getChildrenCategories($parentId){
    return get_categories(
        array(
            'child_of' => $parentId,
            'hide_empty' => false,
            'orderby' => 'id',
            'order' => 'ASC',
        )
    );
}
function categoryPostCount($category) {
    if(is_string($category)) {
        $catID = get_cat_ID($category);
    }
    elseif(is_numeric($category)) {
        $catID = $category;
    } else {
        return 0;
    }
    $cat = get_category($catID);
    return $cat->count;
}
add_filter('comment_form_default_fields', 'unset_url_field');
function unset_url_field($fields){
    if(isset($fields['url']))
        unset($fields['url']);
    return $fields;
}
function wpb_tag_cloud() {
    $tags = get_tags();
    $args = array(
        'smallest'                  => 10,
        'largest'                   => 22,
        'unit'                      => 'px',
        'number'                    => 10,
        'format'                    => 'list',
        'separator'                 => " ",
        'orderby'                   => 'count',
        'order'                     => 'DESC',
        'show_count'                => 1,
        'echo'                      => 0
    );
    $tag_string = wp_tag_cloud( $tags, $args );
    return $tag_string;

}
// Add a shortcode so that we can use it in widgets, posts, and pages
add_shortcode('wpb_popular_tags', 'wpb_tag_cloud');
// Enable shortcode execution in text widget
add_filter ('widget_text', 'do_shortcode');
function addSocialMediaLinks(){
    echo '<ul>';
    if(get_field('FaceBook' , 84 )){
        echo '<li><a target="_blank" class="facebook-color" href="'.get_field('FaceBook' , 84 ).'"><i class="fa fa-facebook"></i></a></li>';
    }
    if(get_field('Twitter' , 84 )){
        echo '<li><a target="_blank" class="twitter-color" href="'.get_field('Twitter' , 84 ).'"><i class="fa fa-twitter"></i></a></li>';
    }
    if(get_field('GooglePlus' , 84 )){
        echo '<li><a target="_blank" class="google-color" href="'.get_field('GooglePlus' , 84 ).'"><i class="fa fa-google-plus"></i></a></li>';
    }
    if(get_field('Telegram' , 84 )){
        echo '<li><a target="_blank" class="twitter-color" href="'.get_field('Telegram' , 84 ).'"><i class="fa fa-telegram"></i></a></li>';
    }
    if(get_field('Instagram' , 84 )){
        echo '<li><a target="_blank" class="youtube-color" href="'.get_field('Instagram' , 84 ).'"><i class="fa fa-instagram"></i></a></li>';
    }
    if(get_field('Soroosh' , 84 )){
        echo '<li><a target="_blank" class="vimeo-color" href="'.get_field('Soroosh' , 84 ).'"><i class="fa fa-twitter-square"></i></a></li>';
    }
    if(get_field('Eita' , 84 )){
        echo '<li><a target="_blank" class="soundcloud-bg" href="'.get_field('Eita' , 84 ).'"><i class="fa fa-ebay"></i></a></li>';
    }
    if(get_field('Emai' , 84 )){
        echo '<li><a target="_blank" href="'.get_field('Emai' , 84 ).'"><i class="fa fa-envelope"></i></a></li>';
    }
    echo '</ul>';
}


add_filter( 'wpseo_schema_graph_pieces', 'remove_breadcrumbs_from_schema', 11, 2 );
add_filter( 'wpseo_schema_webpage', 'remove_breadcrumbs_property_from_webpage', 11, 1 );
function remove_breadcrumbs_from_schema( $pieces, $context ) {
    return \array_filter( $pieces, function( $piece ) {
        return ! $piece instanceof \Yoast\WP\SEO\Generators\Schema\Breadcrumb;
    } );
}
function remove_breadcrumbs_property_from_webpage( $data ) {
    if (array_key_exists('breadcrumb', $data)) {
        unset($data['breadcrumb']);
    }
    return $data;
}








?>