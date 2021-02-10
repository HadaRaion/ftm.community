<?php

function ftm_community_files()
{
    if (strstr($_SERVER['SERVER_NAME'], 'ftm-community.local')) {
        wp_enqueue_script('main-ftm_community-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
      } else {
        wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.9b3487130734ffb5cf3d.js'), NULL, '1.0', true);
        wp_enqueue_script('main-ftm_community-js', get_theme_file_uri('/bundled-assets/scripts.aa4c50f2616a1c8d6e4a.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.aa4c50f2616a1c8d6e4a.css'));
      }
      
    wp_localize_script('main-ftm_community-js', 'ftm_communityData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));
}

add_action('wp_enqueue_scripts', 'ftm_community_files');

function ftm_community_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ftm_community_features');


// Redirect subscriber accounts out of admin and onto homepage
add_action('admin_init', 'redirectSubsToFrontend');

function redirectSubsToFrontend()
{
    $ourCurrentUser = wp_get_current_user();

    if (count($ourCurrentUser->roles) == 1 and $ourCurrentUser->roles[0] == 'subscriber') {
        wp_redirect(site_url('/'));
        exit;
    }
}

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}


// add_action('after_setup_theme', 'remove_admin_bar');
// function remove_admin_bar() {
//     if (!current_user_can('administrator') && !current_user_can('manager')) {
//     show_admin_bar(false);
//     }
// }


// add_action('wp_loaded', 'noSubsAdminBar');

// function noSubsAdminBar()
// {
//     $ourCurrentUser = wp_get_current_user();

//     if (count($ourCurrentUser->roles) == 1 and $ourCurrentUser->roles[0] == 'subscriber') {
//         show_admin_bar(false);
//     }
// }


add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {
  $exclude_filters[] = 'themes/ftm-community/node_modules';
  return $exclude_filters;
});