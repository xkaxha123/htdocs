<?php
    try{
        $pdo = new PDO('mysql:host=localhost; dbname=test1; charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        print "접속성공";
    }
    catch(PDOException $Exception){
        die("접속오류: ".$Exception->getMessage());
    }

    $id             = $_POST["id"];
    $pw             = $_POST["pw"];
    $name           = $_POST["name"];
    $phone_number   = $_POST["phone_number"];

    print $id."<br>";
    print $pw."<br>";
    print $name."<br>";
    print $phone_number."<br>";


    $sql = "insert into member(id) values(:id)";
    print $sql;
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(':id', $id);
    $stmh->execute();
?>