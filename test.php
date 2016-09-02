<?php
    //phpinfo();
?>
<!doctype html>
<html lang = "en">
    <<head>
        <meta charset = "utf-8">
    <title>엉덩이 연구 논문</title>
    <style type="text/css">
        .brcolor{
            background-color: bisque;}
        .color99{
            background-color: red;
            color: white;}
    </style>
    </head>
    <body>
        <ul>
            <li>1th</li>
                <h1>김햄준 엉덩이는 퍼스트 힙이다.</h1>
            <li>2nd</li>
                <h2>점승리 엉덩이는 세컨드 힙이다.</h1>
            <li>3rd</li>
                <h3>이륙구 엉덩이는 써드   힙이다.</h3>
            <li>4th</li>
                <?php
                    print PHP_VERSION."<br>";
                    print PHP_OS."<br>";
                    define("hello", "안녕하냐?");
                    print hello."<br>";
                    print __DIR__;
                ?>
            <li>5th</li>
            <p class = "color99">
                <?php
                for($i = 1; $i < 10; $i++){
                    print $i."단<br>";
                    for($j = 1; $j < 10; $j++){
                       print $i."x".$j."=".$i * $j."<br>";
                    }
                    print "<br>";
                }
                
                $a = array("월", "화", "수", "목", "금");
                foreach($a as $value){
                    print $value;
                    print "<br>";
                }
                ?>
            </p>
        </ul>
    </body>
</html>