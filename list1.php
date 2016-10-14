<?php
    include('kccdb.php');
    $sql = 'SELECT * FROM member';
    $stmh = $pdo -> prepare($sql);
    $stmh -> execute();
    $result = $stmh -> fetchAll();
?>
<table border="1">
    <caption>사용자 정보</caption>
    <thead>
        <tr>
            <th scope="row">이름</th>
            <th scope="row">ID</th>
        </tr>
    </thead>
    <?php foreach($result as $row){ ?>
    <tbody>
        <tr>
            <form action = "del.php" method = "post">
            <input type = "hidden" value = <?=$row['idx']?>
            <td><?= $row['name'] ?></td>
            <td><?= $row['id'] ?></td>
        </tr>
    </tbody>
    <?php } ?>
</table>



