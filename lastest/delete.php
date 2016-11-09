<?php
    require_once 'inc/header.php';
    require_once 'inc/dbcon.php';

    $idx = $_GET['idx'];
    
    $sql = "DELETE FROM notice WHERE idx=:idx";

    $stmh = $pdo -> prepare($sql);
    $stmh -> bindValue(":idx", $idx);
    $stmh -> execute();

    header('Location: ./sub1.php');
?>