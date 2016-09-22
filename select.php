<?php
    
?>
<!doctype html>
<html>
    <head>
        <meta charset = "utf-8">
        <title></title>
    </head>
    <body>
        <form name = "select" action = "selectview.php" method = "post">
            <select name = "location" id = "">
                <option value = "unselected" selected>지역을 선택해 주세요.</option>
                <option value = "서울">서울</option>
                <option value = "경기">경기</option>
                <option value = "부산">부산</option>
                <option value = "울산">울산</option>
                <option value = "광주">광주</option>
                <option value = "인천">인천</option>
            </select>
            <select name = "year" id = "">
                <?php
                    for($i = 1917; $i < 2017; $i++){
                        print "<option value =".$i.">".$i."</option>";
                    }
                ?>
            </select>
            <input type = "submit" value = "송신">
        </form>
    </body>
</html>