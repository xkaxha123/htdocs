<html>
    <head>
        <title>Text Send</title>
        <meta charset = "UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form name ="form1" action = "view.php" method = "post">
            이름: <input type ="text" name ="onname"><br><br>
            내용: <textarea name ="bonmun" cols ="100" rows ="10"></textarea><br>
            취미: <input type ="checkbox" name ="hobby[]" value ="스포츠">스포츠<br>
                  <input type ="checkbox" name ="hobby[]" value ="영화감상">영화감상<br>
                  <input type ="checkbox" name ="hobby[]" value ="독서">독서<br>
            <input type ="submit" value ="송신">
            
        </form>
    </body>
</html>
