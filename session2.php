<?php
    //require("testsession.php");
    session_start();
?>

<html>
    <head>
        <meta charset = "utf-8">
        <title></title>
    </head>
    <body>
        <?php
            print "이름: ".$_SESSION["name"]."<br>";
            print "등급: ".$_SESSION["level"]."<br>";
        ?>
    </body>
</html>