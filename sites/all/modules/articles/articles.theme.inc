<?php
 /* i.e sites/all/themes/custom/{current_theme_name}/templates/articles
 * current_theme_name = fiction 
 */
function articles_theme() {
    $path_to_theme = drupal_get_path('theme', variable_get('theme_default', 'bartik'));
    $themes = array(); 
    $themes['articles_list'] = array(
        'template' => 'articles-list',
        'path' => $path_to_theme . '/templates/articles/', 
        //'path' => '/sites/all/themes/bartik/templates/articles/', 
    );

    return $themes;
}