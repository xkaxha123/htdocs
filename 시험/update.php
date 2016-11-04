<?php
    require_once 'dbcon.php';

    $idx = $_GET['idx'];
    print htmlspecialchars($idx);
?>
<html>
    <head>
        <title>20518 정태웅</title>
    </head>
    <body>
        <form name="form1" action="action.php" method="post">
            제목<input type="text" name="title"><br>
            작성자<input type="text" name="name" ><br>
            <input type="hidden" name="idx" value="<?=$idx?>">
            <input type="submit" value="작성">
        </form>
    </body>
</html>