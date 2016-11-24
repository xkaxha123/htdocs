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
        $file = $_FILES['upload']['name'];
        $file_dir = $_SERVER['DOCUMENT_ROOT']."\\upload\\";
        $file_path = $file_dir.md5(microtime()).$file;
        
        if($_FILES['upload']['size'] < 1000000000000000000){move_uploaded_file($_FILES['upload']['tmp_name'], $file_path);}
        else{echo "<script>alert('용량초과')</script>"; header('Location: ./sub1.php');}
        
        $sql = "INSERT INTO notice (title, content, date, file, file_path, count) VALUES (:title, :content, :now, :file, :file_path, :count)";

        $stmh = $pdo -> prepare($sql);
        $stmh -> bindValue(":title", $title);
        $stmh -> bindValue(":content", $content);
        $stmh -> bindValue(":now", $now);
        $stmh -> bindValue(":file", $file);
        $stmh -> bindValue(":file_path", $file_path);
        $stmh -> bindValue(":count", $count);
        $stmh -> execute();
    }
    header('Location: ./sub1.php');
?>