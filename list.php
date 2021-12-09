<?php
include('db.php');
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>성적 목록</title>
</head>
<body>
    <a href="./insertform.php" >추가</a><br>
    <table border="1" cellpadding="1" cellspacing="0">
        <thead>
            <tr>
                <th>이름</th>
                <th>국어</th>
                <th>영어</th>
                <th>수학</th>
                <th>총점</th>
                <th>평균</th>
            </tr>
        </thead>
        <tbody>
<?php
$result = $mysqli->query("SELECT name, kor, eng, mat from score;");
foreach ($result as $row){
    //    print_r($row);
    $sum = $row['kor'] + $row['eng'] + $row['mat'] ;
    $avg = $sum / 3;
?>
            <tr>
                <td><?=$row['name']?></td>
                <td><?=$row['kor']?></td>
                <td><?=$row['eng']?></td>
                <td><?=$row['mat']?></td>
                <td><?=$sum?></td>
                <td><?=round($avg, 1)?></td>
            </tr>
<?php
}
?>
        </tbody>
    </table>
</body>
</html>