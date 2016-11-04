<?php
    require_once 'dbcon.php';
    
    $sql = "SELECT * FROM bard";
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
    $result = $stmh -> fetchAll();

?>

<html>
    <head>
        <title>20518 정태웅</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th scope="col"><span>번호</span></th>
                    <th scope="col"><span>제목</span></th>
                    <th scope="col"><span>작성자</span></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row){ ?>
                <tr>
                    <td><?= $row['idx']?><td>
                    <td><a href="view.php?idx=<?= $row['idx'] ?>"><?= $row['title']?></a></td>
                    <td><?= $row['name']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
    </body>
</html>