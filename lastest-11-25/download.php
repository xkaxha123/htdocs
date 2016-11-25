<?php
    require_once 'inc/header.php';
    require_once 'inc/dbcon.php';

    $file_name = $_GET['file'];
    $file_path = "/upload/".$file_name;
    $file_tmp  = strstr($file_name, '^');
    $file_down = substr($file_tmp, 2);

    header('Content-Type: file:unknown');
    header('Content-Disposition: attachment; filename='.$file_name);
    header('Content-Length: '.filesize($file_path));
    header('Content-Transfer-Encoding: binary');
    header('Pragma: public');
    header('Expires: 0');
    flush();

    if ($fp = fopen($file_path, "r")){print fread($fp, filesize($file_path));}
    fclose($fp);

    header('Location: ./sub1.php');

?>