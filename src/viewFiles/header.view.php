<?php
// session_start();
// Path Configuring   //////////////////////////////////////
$user = $_SESSION['$user'];

?>
<body>
    <div id="wrapper">
    <header id="banner-container">
        <div id="overlay-div">
            <img id="profileImage" src="./Images/bankIcon.jpg">
            <h1>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo "Welcome " . $user ?></h1>
        </div>

        <img id="banner" src="src/Images/banner.jpg" alt="Banner Image">

    </header>

    <br>