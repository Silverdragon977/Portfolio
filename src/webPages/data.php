

<?php

$config = parse_ini_file('./config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT']; 

$name="Michael Howard";
    $navigationArray = [

        [
            "title" => "Homepage",   
            "src"=> $APP_ROOT . "/index.php"
        ], 

        [
            "title" => "About",
            "src"=> $APP_ROOT . "/src/webPages/about.php"
        ],

        [
            "title" => "Projects",
            "src"=> $APP_ROOT . "/src/webPages/projects.php"
        ],
        [
            "title" => "Resume",
            "src"=> $URL_BASE . "/src/webPages/resume.pdf"
        ],
        [
            "title" => "Contact",
            "src"=> $APP_ROOT . "/src/webPages/contact.php"
        ],
        [
            "title" => "Admin",
            "src"=> $APP_ROOT . "/src/webPages/admin.php"
        ],
    ];

    $aboutText = [
        [
            "data" => "Personal Intro Here"
        ],
        [
            "data" => "Education Here"
        ],
        [
            "data" => "Skills and Awards Here"
        ]
    ];

