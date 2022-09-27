<?php

class Redirect
{
    public static function to($location = false)
    {
        if (!$location) {
            return;
        }

        if (!is_numeric($location)) {
            header('Location: ' . $location);
            exit();
        }

        switch ($location) {
            case 404:
                header('HTTP/1.0 404 Not Found');
                include FRONTEND_INCLUDE_ERROR . '404.php';
                exit();
            break;
        }
    }
}
