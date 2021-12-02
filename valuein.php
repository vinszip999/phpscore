<?php
$value1="데이터1";
$value2="데이터2";
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>전송 실험</title>
</head>
<body>
<h2>일반적인 GET 전송 방법 - a</h2>
  <a href="valueout.php?value1=<?=$value1?>&value2=<?=$value2?>">GET으로 전송 : <?=$value1?> / <?=$value2?></a><br>
    <a href="valueout.php?value1=<?=urlencode($value1)?>&value2=<?=urlencode($value2)?>">GET으로 전송 : <?=$value1?> / <?=$value2?></a><br>
  <hr>
    <h2>form으로도 GET 전송이 가능하다.</h2>
    <form name="valueForm" method="get" action="valueout.php">
      GET으로 전송 : <input type="text" name="value1" size="20" value="<?=$value1?>">
        <input type="submit" value="보내기" >
        <input type="reset" value="초기화" >
        <input type="hidden" name="value2" size="20" value="<?=$value2?>">
    </form>
    <hr>
    <h2>일반적으로 form으로는 POST 전송을 한다.</h2>
    <form name="valueForm" method="post" action="valueout.php">
      POST로 전송 : <input type="text" name="value1" size="20" value="<?=$value1?>">
        <input type="submit" value="보내기" >
        <input type="reset" value="초기화" >
        <input type="hidden" name="value2" size="20" value="<?=$value2?>">
    </form>
</body>
</html>