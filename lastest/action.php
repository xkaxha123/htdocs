<?php
    require_once 'inc/header.php';
    require_once 'inc/dbcon.php';

    $idx = $_POST['idx'];
    
    if(isset($idx))
    {
        $title = $_POST['title'];
        $content = $_POST['content'];
        
        $sql = "UPDATE notice SET title=:title, content=:content WHERE idx=:idx";
        
        $stmh = $pdo -> prepare($sql);
        $stmh -> bindValue(":title", $title);
        $stmh -> bindValue(":content", $content);
        $stmh -> bindValue(":idx", $idx);
        $stmh -> execute();
    }
    else
    {
        $title = $_POST["title"];
        $content = $_POST["content"];
        $now = date("Y-m-d");
        $count = 0;

        $sql = "INSERT INTO notice (title, content, date, count) VALUES (:title, :content, :now, :count)";

        $stmh = $pdo -> prepare($sql);
        $stmh -> bindValue(":title", $title);
        $stmh -> bindValue(":content", $content);
        $stmh -> bindValue(":now", $now);
        $stmh -> bindValue(":count", $count);
        $stmh -> execute();
    }

    header('Location: ./sub1.php');
?>