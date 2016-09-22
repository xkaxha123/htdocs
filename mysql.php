<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            /*  mysql 함수
            $con = mysql_connect('localhost', 'root', '') or die("접속 실패");
            print "접속 성공";
            mysql_select_db('php');
            mysql_close($con);
            */
            
            /*  mysqli 함수
            $mysqli = new mysqli('localhost', 'root', '', 'php');
            if($mysqli -> connect_error){die("접속 실패");}
            print "접속 성공";
            $mysqli -> close();
            */
        
            $pdo = new PDO('mysql: host = localhost; dbname = php; charset = utf8', 'root', '');
            print "접속 성공";
            $pdo = null;
        ?>
    </body>
</html>