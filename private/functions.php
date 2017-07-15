<?php
    function url_for($script_path) {
        // add the leading '/' if not present
        if($script_path[0] != '/') {
            $script_path = '/' . $script_path;
        }
        return WWW_ROOT . $script_path;
    }

    function u($string="") {
        return urlencode($string);
    }

    function raw_u($string="") {
        return rawurlencode($string);
    }

    function h($string="") {
        return htmlspecialchars($string);
    }

    function error_404(){
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        // Can redirect to a custom 404 page from here.  Not this time though
        exit();
    }

    function error_500(){
        header($_SERVER["SERVER_PROTOCOL"] . " 505 Internal Server Error");
        // Can redirect to a custom 404 page from here.  Not this time though
        exit();
    }

    function redirect_to($location) {
        header("Location: " . $location);
        exit;
    }
?>