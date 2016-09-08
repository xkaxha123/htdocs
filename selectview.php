<?php
    $location = $_POST["location"];
    $birth = $_POST["year"];
    if($location == "unselected"){
        print "지역을 입력하세요.<br>";
    }
    else if(isset($location)){
        print "지역은".$location."입니다.<br>";
    }
    
    if(isset($birth)){
        print "당신은".$birth."년생입니다.<br>";
    }
    else{
        print "출생년도를 선택해 주세요.<br>";
    }
?>