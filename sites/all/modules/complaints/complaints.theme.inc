<?php
 /* i.e sites/all/themes/custom/{current_theme_name}/templates/articles
 * current_theme_name = fiction 
 */
function complaints_theme() {
    $path_to_theme = drupal_get_path('theme', variable_get('theme_default', 'bartik'));
    $themes = array(); 
    $themes['complaints_list'] = array(
        'template' => 'complaints-list',
        'path' => $path_to_theme . '/templates/complaints/', 
        //'path' => '/sites/all/themes/bartik/templates/articles/', 
    );

    return $themes;
}