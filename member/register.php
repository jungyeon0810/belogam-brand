<?php
require_once '../config/db.php'; // DB 연결 파일

// 입력 데이터 검증
$email = filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL);
$password = trim($_POST["pw"]); // 비밀번호 앞뒤 공백 제거
$phone = trim($_POST["phone"]);

// 값이 정상적으로 입력되었는지 확인
if (!$email || !$password || !$phone) {
    die("모든 필드를 입력해야 합니다.");
}

// 비밀번호 해싱
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepared Statement 실행
$stmt = $conn->prepare("INSERT INTO users (`email`, `pw`, `phone`) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $email, $hashedPassword, $phone); // 🛠 바인딩 추가

if ($stmt->execute()) {

    header("Location: result.php?email=" . urlencode($email));
    exit;
    
} else {
    echo "실패: " . $stmt->error; // 오류 메시지 출력
}

// 리소스 정리
$stmt->close();
$conn->close();
?>
