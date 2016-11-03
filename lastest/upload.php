<?php
    $file = $_FILES['upload']['name'];
    $file_dir = $_SERVER['DOCUMENT_ROOT']."\\upload\\";
    $file_path = $file_dir.md5(microtime()).$file;
    print "파일이름: ".$file;
    print "<br>경로: ".$file_dir;
    print "<br>시간: ".microtime();
    //print_r($_SERVER);
    if($_FILES['upload']['size'] < 1000000000000000000)
    {
        move_uploaded_file($_FILES['upload']['tmp_name'],$file_path);
    }
    else
    {
        echo "<script>alert('용량초과')</script>";
    }
?>