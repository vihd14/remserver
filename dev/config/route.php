<?php
/**
 * Configuration file for routes.
 */
return [
    // Load these routefiles in order specified and optionally mount them
    // onto a base route.
    "routeFiles" => [
        [
            // Routes for the REM server
            "mount" => "api",
            "file" => __DIR__ . "/route/remserver.php",
        ],
        [
            // Keep this last since its a catch all
            "mount" => null,
            "file" => __DIR__ . "/route/404.php",
        ]
    ],
];
