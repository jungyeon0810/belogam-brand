<?php
$host = "localhost"; // 또는 서버 IP
$username = "jungyeon2999"; // MySQL 사용자명
$password = "Pcy0619!"; // MySQL 비밀번호
$database = "jungyeon2999"; // 사용하는 DB 이름

$conn = mysqli_connect($host, $username, $password, $database);

// 연결 확인
if (!$conn) {
    die("DB 연결 실패: " . mysqli_connect_error());
}
?>
