<?php include("kccdb.php");
    $kname                  = $_POST["kname"];
    $ename                  = $_POST["ename"];

    $id                     = $_POST["id"];
    $pw                     = $_POST["password"];
    $check_pw               = $_POST["check_password"];

    $home_phone             = $_POST["home_phone"]."-".$_POST["front_num"]."-".$_POST["back_num"];
    $cellphone              = $_POST["cellphone"]."-".$_POST["cellphone_front_num"]."-".$_POST["cellphone_back_num"];
    $workplace_phone        = $_POST["workplace_phone"]."-".$_POST["workplace_front_num"]."-".$_POST["workplace_back_num"];
    $workplace_fax          = $_POST["workplace_fax"]."-".$_POST["workplace_fax_front"]."-".$_POST["workplace_fax_back"];

    $sms_receive            = $_POST["sms_receive"];
    $dm_address             = $_POST["dm_address"];
    $marry_check            = $_POST["marry_check"];

    $workplace              = $_POST["workplace"];
    $job_name               = $_POST["jobname"];
    $position               = $_POST["position"];
    $email                  = $_POST["email_front"]."@".$_POST["email_back"];

    $home_zonecode          = $_POST["home_zonecode"];
    $home_address           = $_POST["home_address"];
    $home_address2          = $_POST["home_address2"];
    
    $workplace_zonecode     = $_POST["workplace_zonecode"];
    $workplace_address      = $_POST["workplace_address"];
    $workplace_address2     = $_POST["workplace_address2"];

    $marry_day              = $_POST["marry_year"].$_POST["marry_month"].$_POST["marry_day"];
    $birth_day              = $_POST["birth_year"].$_POST["birth_month"].$_POST["birth_day"];
    
    $sql ="INSERT INTO member (kname, ename, id, pw, check_pw, home_phone, cellphone, workplace_phone, workplace_fax, sms_receive, dm_address, marry_check, workplace, job_name, position, email, home_zonecode, home_address, home_address2, workplace_zonecode, workplace_address, workplace_address2, marry_day, birth_day) VALUES (:kname, :ename, :id, :pw, :check_pw, :home_phone, :cellphone, :workplace_phone, :workplace_fax, :sms_receive, :dm_address, :marry_check, :workplace, :job_name, :position, :email, :home_zonecode, :home_address, :home_address2, :workplace_zonecode, :workplace_address, :workplace_address2, :marry_day, :birth_day)"; 

    $stmh = $pdo -> prepare($sql);
    $stmh -> bindValue(":kname", $kname);
    $stmh -> bindValue(":ename", $ename);

    $stmh -> bindValue(":id", $id);
    $stmh -> bindValue(":pw", $pw);
    $stmh -> bindValue(":check_pw", $check_pw);

    $stmh -> bindValue(":home_phone", $home_phone);
    $stmh -> bindValue(":cellphone", $cellphone);
    $stmh -> bindValue(":workplace_phone", $workplace_phone);
    $stmh -> bindValue(":workplace_fax", $workplace_fax);

    $stmh -> bindValue(":sms_receive", $sms_receive);
    $stmh -> bindValue(":dm_address", $dm_address);
    $stmh -> bindValue(":marry_check", $marry_check);

    $stmh -> bindValue(":email", $email);
    
    $stmh -> bindValue(":workplace", $workplace);
    $stmh -> bindValue(":job_name", $job_name);
    $stmh -> bindValue(":position", $position);
    $stmh -> bindValue(":email", $email);

    $stmh -> bindValue(":home_zonecode", $home_zonecode);
    $stmh -> bindValue(":home_address", $home_address);
    $stmh -> bindValue(":home_address2", $home_address2);

    $stmh -> bindValue(":workplace_zonecode", $workplace_zonecode);
    $stmh -> bindValue(":workplace_address", $workplace_address);
    $stmh -> bindValue(":workplace_address2", $workplace_address2);

    $stmh -> bindValue(":workplace", $workplace);
    $stmh -> bindValue(":job_name", $job_name);
    $stmh -> bindValue(":position", $position);

    $stmh -> bindValue(":marry_day", $marry_day);
    $stmh -> bindValue(":birth_day", $birth_day);
    $stmh -> execute();

    print "<br>회원정보:<br>이름: ".$kname;
    print "<br>영문이름:".$ename;
    print "<br>SMS수신여부: ".$sms_receive;
    print "<br>DM발송처: ".$dm_address;
    print "<br>결혼여부: ".$marry_check;
    print "<br>Email: ".$email_front."@".$email_back;
    print "<br>당신의 IP: ".$_SERVER["REMOTE_ADDR"];

?>