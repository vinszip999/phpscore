<?php
$get_value1 = '';
$get_value2 = '';
$post_value1 = '';
$post_value2 = '';
if(isset($_GET['value1'])) $get_value1 = $_GET['value1'];
if(isset($_GET['value2'])) $get_value2 = $_GET['value2'];
if(isset($_POST['value1'])) $post_value1 = $_POST['value1'];
if(isset($_POST['value2'])) $post_value2 = $_POST['value2'];
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>전송 실험</title>
</head>
<body>
<h2>GET 변수</h2>
GET으로 넘겨진 value1 : <?=$get_value1?>
GET으로 넘겨진 value2 : <?=$get_value2?>
<h2>POST 변수</h2>
POST로 넘겨진 value1 : <?=$post_value1?>
POST로 넘겨진 value2 : <?=$post_value2?>
<hr>
<h2>넘겨진 변수 배열 보기 - 디버깅하기 편함</h2>
<hr>
<pre>$_GET
<?php
print_r($_GET);
?>
<hr>
$_POST
<?php
print_r($_POST);
?>
</pre>
</body>
</html>