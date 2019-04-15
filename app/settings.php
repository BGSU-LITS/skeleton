<?php
/**
 * Application Settings
 * @author John Kloor <kloor@bgsu.edu>
 * @copyright 2019 Bowling Green State University Libraries
 * @license MIT
 */

use Symfony\Component\Yaml\Yaml;

// Setup the default settings for the application.
$settings = [
    // Application settings.
    'app' => [
        // Whether to enable debug information.
        'debug' => false,

        // Path to log file, if any.
        'log' => false
    ],

    // Template settings.
    'template' => [
        // Path to search for templates before this package's templates.
        'path' => false,

        // Filename of template that defines a page. Default: page.html.twig
        'page' => false,

        // Name of the site for the template.
        'site' => false,

        // Menu for the site in the template.
        'menu' => false
    ],
];

// Check if a config.yaml file exists.
$file = dirname(__DIR__) . '/config.yaml';

if (file_exists($file)) {
    // If so, load the settings from that file.
    $settings = array_replace_recursive(
        $settings,
        Yaml::parse(file_get_contents($file))
    );
}

// Return the complete settings array.
return $settings;
