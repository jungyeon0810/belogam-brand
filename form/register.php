<?php
include_once("db_config.php"); // DB 연결 파일

// 사용자가 입력한 데이터 가져오기
$userid = $_POST['userid'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$name = $_POST['name'];
$address = $_POST['address'];
$address_detail = $_POST['address_detail'];
$phone = $_POST['phone_prefix'] . $_POST['phone_middle'] . $_POST['phone_last'];
$email = $_POST['email'] . '@' . ($_POST['email_domain'] === 'custom' ? $_POST['custom_email'] : $_POST['email_domain']);
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$calendar = $_POST['calendar'];

// 비밀번호 확인
if ($password !== $confirm_password) {
    die("<script>alert('비밀번호가 일치하지 않습니다.'); history.back();</script>");
}

// 비밀번호 해싱 (보안 강화)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// 아이디 중복 체크
$sql_check = "SELECT * FROM users WHERE userid = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("s", $userid);
$stmt_check->execute();
$result_check = $stmt_check->get_result();
if ($result_check->num_rows > 0) {
    die("<script>alert('이미 존재하는 아이디입니다.'); history.back();</script>");
}
$stmt_check->close();

// 데이터 저장
$sql = "INSERT INTO users (userid, password, name, address, address_detail, phone, email, gender, birthdate, calendar) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssss", $userid, $hashed_password, $name, $address, $address_detail, $phone, $email, $gender, $birthdate, $calendar);

if ($stmt->execute()) {
    echo "<script>alert('회원가입이 완료되었습니다.'); window.location.href='login.php';</script>";
} else {
    echo "<script>alert('회원가입에 실패했습니다. 다시 시도해주세요.'); history.back();</script>";
}

$stmt->close();
$conn->close();


?>
