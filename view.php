<?php
    $name = $_POST["onname"];
    $content = $_POST["bonmun"];
?>
<html>
    <head>
    <body>
        <?php
            print $name."님 환영합니다.";
            print nl2br($content);
            if(isset($_POST[hobby])){
                $hobby = implode("와", $_POST["hobby"]);
                print "당신의 취미는".hobby."입니다";
            }else{
                print "취미가 없으시군요.";
            }
        ?>
    </body>
    </head>
</html>