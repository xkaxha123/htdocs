<?php
    require_once 'dbcon.php';
    
    $idx = $_GET['idx'];
    $sql = "SELECT * FROM bard WHERE idx = :idx";
    $stmh = $pdo -> prepare($sql);
    $stmh -> bindValue(":idx", $idx);
    $stmh -> execute();

    $result = $stmh -> fetch();

    print "제목: ".$result['title'];
    print "<br>작성자: ".$result['name'];
?>
<html>
    <head>
        <title>20518 정태웅</title>
    </head>
    <body>
        <a href="delete.php">삭제</a>
        <a href="update.php?idx=<?= $idx ?>">수정</a>
    </body>
</html>