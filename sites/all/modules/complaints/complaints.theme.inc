<?php
function complaints_theme() {
    $path_to_theme = drupal_get_path('theme', variable_get('theme_default', 'bartik'));
    $themes = array(); 
    $themes['complaints_list'] = array(
        'template' => 'complaints-list',
        'path' => $path_to_theme . '/templates/complaints/', 
    );

    return $themes;
}