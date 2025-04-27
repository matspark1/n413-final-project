<?php

function init_edit_css()
{
    add_editor_style("style.css");
}

add_action("after_setup_theme", "init_edit_css");

function init_view_css()
{
    wp_enqueue_style("final-style", get_stylesheet_directory_uri() . "/style.css");
}

add_action("wp_enqueue_scripts", "init_view_css");
