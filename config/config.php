<?php
    function get_protocol() {
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            return "https://";
        } else {
            return "http://";
        }
    }

    $protocol = get_protocol();
    $host = $_SERVER['HTTP_HOST'];
    $project_folder = '/tskmgr/';
    define('BASE_URL', $protocol . $host . $project_folder);
