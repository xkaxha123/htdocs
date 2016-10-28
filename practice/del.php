<?php
    include("kccdb.php");
    $sql = "delete from member where idx='{$_POST['idx']}'";
    $pdo -> query($sql);
?>
<script>
    location.href="list1.php";
</script>