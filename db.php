<?php
// db.php
$db['user'] = 'mirim';   // db 사용자
$db['host'] = 'localhost';  // db host
$db['pw'] = 'fvx*n!m*fRdTWhWC';  // db 암호
$db['db'] = 'mirim';  // db 이름

$mysqli = new mysqli($db['host'], $db['user'], $db['pw'], $db['db']);
if ($mysqli->connect_error) { // ->는 .과 같다
  die("서버 연결 실패: " . $conn->connect_error); // die는 exit와 같다
}

/*
// DB 동작 테스트 코드 - 존재하는 데이터베이스 목록 출력
$result = $mysqli->query("SHOW DATABASES;");
echo ("Databases...<br><hr>");

foreach ($result as $row){
  // echo('<hr><pre>');
    //    print_r($row);
    // echo('</pre>');
    echo $row['Database'] . "<br>";
}
*/

/*
// DB 동작 테스트 코드 - 현재 데이터베이스의 존재하는 테이블 목록 출력
$result = $mysqli->query("SHOW TABLES;");
echo ("Tables...<br><hr>");

foreach ($result as $row){
    //    print_r($row);
    echo $row['Tables_in_mirim'] . "<br>";
}
*/