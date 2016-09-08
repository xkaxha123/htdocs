<?php
    $location = $_POST["location"];
    $birth = $_POST["year"];
    $yo = 2016 - $birth;
    if($location != "unselected"){
        print "지역은 ".$location."입니다.<br>";
    }
    else{
        print "지역을 입력하세요.<br>";
    }
    
    if(isset($birth)){
        print "당신은 ".$birth."년생 ".$yo."세입니다.<br>";
    }
    else{
        print "출생년도를 선택해 주세요.<br>";
    }
?>