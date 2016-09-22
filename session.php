<?php
    session_start();
    $count = 1;
    if(isset($_SESSION["count"])){
        $count = $_SESSION["count"];
        $count++;
    }
    $_SESSION["count"] = $count;
?>

<!doctype html>
<html>
    <head>
        <title>세션 연습</title>
    </head>
    <body>
        <?php
            /*
            if($count == 1){
                print "첫 방문입니다.<br>";
            }
            else{
                print "당신의 방문은 ".$count"회 째입니다.";
            }
            */
            
            if($count == 1){
        ?>
        첫 방문입니다.<br>
        <?php
            else{
                
            }
        ?>
    </body>
</html>