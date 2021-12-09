<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>성적 추가</title>
</head>
<body>
    <form name="form1" method="post" action="insert.php" >
        이름 <input type="text" name="name" value="" ><br>
        국어 <input type="text" name="kor" value="" ><br>
        영어 <input type="text" name="eng" value="" ><br>
        수학 <input type="text" name="mat" value="" ><br><br>
        <input type="submit" value="등록"> 
        <input type="button" value="돌아가기" onClick="javascript:history.back();">
    </form>
</body>
</html>