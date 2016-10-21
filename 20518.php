<?php
    try{
        $pdo = new PDO('mysql:host=localhost; dbname=test1; charset=utf8', 'root', '');
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    catch(PDOException $Exception){
        die("접속오류: ".$Exception -> getMessage());
    }
?>
<html>
    <head>
        <title>20518정태웅</title>
    </head>
    <body>
        <form name="form1" action="list.php" method="post">
            아이디<input type="text" name="id"><br>
            비밀번호<input type="text" name="pw"><br>
            이름<input type="text" name="name"><br>
            핸드폰 번호<input type="text" name="phone_number"><br>
            <input type="submit" id="next" value="다음">
        </form>
    </body>
</html>