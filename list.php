<?php include('kccdb.php');
    $search = '%'.$_POST['search'].'%';
     print $search;
    if(isset($search)){
        $sql = 'select * from user where last_name like :last_name or first_name like :first_name';
        $stmh = $pdo -> prepare($sql);
        $stmh -> bindValue(':last_name', $search, PDO::PARAM_STR);
        $stmh -> bindValue(':first_name', $search, PDO::PARAM_STR);
        $stmh -> execute();
        $count = $stmh -> rowCount();
        print $count."건 입니다.";
    }
    else{
        print "검색어를 입력하세요.";
    }
?>