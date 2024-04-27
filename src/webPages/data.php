

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
            "data" => "<pre><p>
                    Hello! 

                        My name is Michael Howard, I am currently working towards a Computer Science Bachloers degree
                    from Bemidji State University in Minnesota. I enjoy riding my bike around town, watching TV and movies,
                    and cooking in my spare time. 
            </p></pre>
            "
        ],
        [
            "data" => "<pre><p>
            <b><u>Pre-College Education</u></b>

            I started school in Winsted, MN at Holy Trinity from kindergarten to 4th grade.
            Then I transfered to Lester Prairie High in the neighboring city. There I
            graduated in 2016.

            
            <b><u>Jobs</u></b>

            I started working at a few fast food places for a short while before working
            at my local grocery store Glenn's Supervalu. This grocery store is in a small
            town of around 2000 people. This meant that I had to work in many different
            positions such as a bagger, carryout, stocker, and janitor. I left there after
            3 years to get a bachlors degree in CS.


            <b><u>Bemidji State University</u></b>

            I started at BSU in late 2020. I started taking a few classes to ease into 
            academic life again. Now I am a full time student and plan to graduate soon.
            
            
            </p></pre>"
        ],
        [
            "data" => "<pre><p>
            <b><u>Skills</u></b>

                I picked up a bunch of social skills from my 3 years of working at my 
            local grocery store.

                I have used computers from a young age and have lots of experience in
            microsoft products such as excel, word, and powerpoint. While at college
            I have brought my typing speed up from 20wpm to 60wpm.

                The most noteable skills that I have are around programming though.
            I have spent time learning HTML, CSS, Javascript, PHP, MySql, Python,
            C++, Java, git, powershell, and GNU tools such as Bash and Nano.
            
            </p></pre>"
        ]
    ];

