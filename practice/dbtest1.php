<?php
    try{
        $pdo = new PDO('mysql:host = localhost; dbname = kcc; charset = utf-8', 'root', '');
        print "접속성공";
        $pdo = null;
    }
    catch(PDOException $Exception){
        die("접속오류: ".$Exception -> getMessage());
    }
?>