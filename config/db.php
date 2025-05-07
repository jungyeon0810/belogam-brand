<?php
// 데이터베이스 접속 정보
// 상수변수
define('DB_HOST', 'localhost'); // MySQL 서버 주소 (예: '127.0.0.1' 또는 'db서버주소')
define('DB_USER', 'jungyeon2999'); // DB 사용자명
define('DB_PASS', 'Pcy0619!'); // DB 비밀번호
define('DB_NAME', 'jungyeon2999'); // 사용할 데이터베이스 이름

// MySQL 연결
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// 연결 오류 체크

if ($conn->connect_error) {
    die("DB 연결 실패: " . $conn->connect_error);
}

// UTF-8 설정 (한글 깨짐 방지)
$conn->set_charset("utf8mb4");
?>