<?php include_once('wp-load.php');
    global $wpdb;

    if(!isset($_SESSION))session_start();

    $rows = $wpdb->get_results("SELECT * FROM probando");
    echo json_encode($rows); ?>