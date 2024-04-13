
<?php include_once(APP_ROOT . "/src/webPages/data.php"); ?>
<!---Navigation Bar------------------------------------------------->
        <nav>
            <ul>
                <?php foreach ($navigationArray as $nav){ ?>
                    <li> <a href="<?php echo $nav["src"]?>"> <?php echo(" | " . $nav["title"] . " | " )  ?></a></li>
                <?php }  ?>
            </ul>
        </nav>   
    <br><br>  
<!------------------------------------------------------------------>