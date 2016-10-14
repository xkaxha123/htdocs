<?php
try{
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=user;charset=utf8", "root", "");
        $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print "접속성공";
    }
    catch(PDOException $Exception){
        die("접속오류: ".$Exception -> getMessage());
    }
?>
