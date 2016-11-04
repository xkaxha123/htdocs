<?php
    require_once 'dbcon.php';

    $title = $_POST['title'];
    $name  = $_POST['name'];
    $idx = $_POST['idx'];

    $sql = "UPDATE bard SET title=:title,name=:name WHERE idx=:idx";
    $stmh = $pdo -> prepare($sql);
    $stmh -> bindValue(":title", $title);
    $stmh -> bindValue(":name", $name);
    $stmh -> bindValue(":idx", $idx);
    $stmh -> execute();

    header('Location: list.php');
?>