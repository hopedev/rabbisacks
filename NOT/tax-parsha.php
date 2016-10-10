<?php

$labels = array(
        "name" => "Parshot",
        "label" => "Parshot",
        );

    $args = array(
        "labels" => $labels,
        "hierarchical" => false,
        "label" => "Parshot",
        "show_ui" => true,
        "query_var" => true,
        "rewrite" => array( 'slug' => 'parsha', 'with_front' => true ),
        "show_admin_column" => false,
    );
    register_taxonomy( "parsha", array( "post" ), $args );