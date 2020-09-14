<?php

/*
    Pattern:
        "HTTP_METHOD::REQUEST_URI" => "{Sub-Namespace\}Controller::Method"

    example:
        "GET::/" => "HomepageController::showHomepage"
        "GET::/admin" => "Admin\LoginController::login"
*/

$routes = [
    "GET::/" => "HomepageController::showHomepage",
    "GET::/users" => "UserController::showUsers"
];