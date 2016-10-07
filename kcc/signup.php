<?php include("kccdb.php");
    $kname                  = $_POST["kname"];
    $ename                  = $_POST["ename"];

    $birth_year             = $_POST["birth_year"];
    $birth_month            = $_POST["birth_month"];
    $birth_day              = $_POST["birth_day"];

    $id                     = $_POST["id"];
    $pw                     = $_POST["password"];
    $check_pw               = $_POST["check_password"];

    $home_phone             = $_POST["home_phone"];
    $home_front_num         = $_POST["front_num"];
    $home_back_num          = $_POST["back_num"];

    $cellphone              = $_POST["cellphone"];
    $cellphone_front_num    = $_POST["cellphone_front_num"];
    $cellphone_back_num     = $_POST["cellphone_back_num"];

    $sms_receive            = $_POST["sms_receive"];
    $dm_address             = $_POST["dm_address"];
    $email                  = $_POST["email"];

    $home_zonecode          = $_POST["home_zonecode"];
    $home_address           = $_POST["home_address"];
    $home_address2          = $_POST["home_address2"];
    
    $workplace              = $_POST["workplace"];
    $job_name               = $_POST["jobname"];
    $position               = $_POST["position"];
    
    $workplace_zonecode     = $_POST["workplace_zonecode"];
    $workplace_address      = $_POST["workplace_address"];
    $workplace_address2     = $_POST["workplace_address2"];

    $workplace_phone        = $_POST["workplace_phone"];
    $workplace_front_num    = $_POST["workplace_front_num"];
    $workplace_back_num     = $_POST["workplace_back_num"];

    $workplace_fax          = $_POST["workplace_fax"];
    $workplace_fax_front    = $_POST["workplace_fax_front"];
    $workplace_fax_back     = $_POST["workplace_fax_back"];

    $marry_check            = $_POST["marry_check"];
    $marry_year             = $_POST["marry_year"];
    $marry_month            = $_POST["marry_month"];
    $marry_day              = $_POST["marry_day"];

    print "회원정보:<br>이름: ".$kname."<br>영문이름:".$ename;
    print "<br>당신의 IP: ".$_SERVER["REMOTE_ADDR"];
    $sql = "insert into user";
    $stmh = $pdo -> prepare($sql);
    $stmh -> bindValue(':last_name', $search, PDO::PARAM_STR);
    $stmh -> bindValue(':first_name', $search, PDO::PARAM_STR);
    $stmh -> execute();
?>