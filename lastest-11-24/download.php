<?
    $idx = $_GET['idx'];
    
    $sql = "SELECT * FROM notice WHERE idx = :idx";
    $stmt = $pdo -> prepare($sql);
    $stmt -> bindValue(":idx", $idx);
    $stmt -> execute();

    $result = $stmt -> fetch();

    $file = $result['file'];
    $file_name = urlencode($file_path);
    $file_path = $result['file_path'];

    header('Content-Type: application/x-octetstream');
    header('Content-Length: '.filesize($file_path));
    header('Content-Disposition: attachment; filename='.$file_name);
    header('Content-Transfer-Encoding: binary');

    $fp = fopen($file_path, "r");
    fpassthru($fp);
    fclose($fp);

    header('Location: ./sub1.php');
?>