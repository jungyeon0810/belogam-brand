<?php

require_once '../config/db.php'; //db연동

$email = isset($_GET['email']) ? $_GET['email'] : '';

$stmt = $conn->prepare("SELECT `email`, `phone` FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();


?>
<h2>누구의 회원가입이 완료되었습니다.</h2>
    <p>
    연락처 : 
    </p>
<a href="/member/signup.php?w=u">수정</a><a href="/">홈</a>
