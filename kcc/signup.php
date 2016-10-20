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
    $email_front            = $_POST["email_front"];
    $email_back             = $_POST["email_back"];

    $home_zonecode          = $_POST["home_zonecode"];
    $home_address           = $_POST["home_address"];
    $home_address2          = $_POST["home_address2"];
    
    $workplace              = $_POST["workplace"];
    $job_name               = $_POST["jobname"];
    $position               = $_POST["position"];
    $email_front            = $_POST["email_front"];
    $email_back             = $_POST["email_back"];
    
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
    
    print "<br>회원정보:<br>이름: ".$kname;
    print "<br>영문이름:".$ename;
    print "<br>SMS수신여부: ".$sms_receive;
    print "<br>DM발송처: ".$dm_address;
    print "<br>결혼여부: ".$marry_check;
    print "<br>Email: ".$email_front."@".$email_back;
    print "<br>당신의 IP: ".$_SERVER["REMOTE_ADDR"];
    
    $email = $email_front."@".$email_back;
        
    $sql = "INSERT INTO member (kname, ename, birth_year, birth_month, birth_day, id, pw, check_pw, home_phone, home_front_num, home_back_num, cellphone, cellphone_front_num, cellphone_back_num, sms_receive, dm_address, email, home_zonecode, home_address, home_address2, workplace, job_name, position, workplace_zonecode, workplace_address, workplace_address2, workplace_phone, workplace_front_num, workplace_back_num, workplace_fax, workplace_fax_front, workplace_fax_back, marry_check, marry_year, marry_month, marry_day) VALUES ($kname, $ename, $birth_year, $birth_month, $birth_day, $id, $pw, $check_pw, $home_phone, $home_front_num, $home_back_num, $cellphone, $cellphone_front_num, $cellphone_back_num, $sms_receive, $dm_address, $email, $home_zonecode, $home_address, $home_address2, $workplace, $job_name, $position, $workplace_zonecode, $workplace_address, $workplace_address2, $workplace_phone, $workplace_front_num, $workplace_back_num, $workplace_fax, $workplace_fax_front, $workplace_fax_back, $marry_check, $marry_year, $marry_month, $marry_day)";

    print $sql;   
    $stmh = $pdo -> query($sql);
?>