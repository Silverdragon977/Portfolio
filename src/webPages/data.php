

<?php

$config = parse_ini_file('./config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT']; 

$name="Michael Howard";
    $navigationArray = [

        [
            "title" => "Homepage",   
            "src"=> $URL_BASE . "/index.php"
        ], 

        [
            "title" => "About",
            "src"=> $URL_BASE . "/src/webPages/about.php"
        ],

        [
            "title" => "Projects",
            "src"=> $URL_BASE . "/src/webPages/projects.php"
        ],
        [
            "title" => "Resume",
            "src"=> $URL_BASE . "/src/webPages/resume.pdf"
        ],
        [
            "title" => "Contact",
            "src"=> $URL_BASE . "/src/webPages/contact.php"
        ],
        [
            "title" => "Admin",
            "src"=> $URL_BASE . "/src/webPages/loginAdmin.php"
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

