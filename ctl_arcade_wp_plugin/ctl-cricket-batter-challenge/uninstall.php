<?php
    global $wpdb;

    $wpdb->query( "DELETE FROM " . $wpdb->prefix .
        "ctl_arcade_games WHERE game_plugin_dir = 'ctl-cricket-batter-challenge'");
    $wpdb->query( "DELETE FROM " . $wpdb->prefix .
        "ctl_arcade_scores WHERE game_plugin_dir = 'ctl-cricket-batter-challenge'");
    $wpdb->query( "DELETE FROM " . $wpdb->prefix .
        "ctl_arcade_ratings WHERE game_plugin_dir = 'ctl-cricket-batter-challenge'");

    delete_option('ctl-cricket-batter-challenge_do_activation_redirect');