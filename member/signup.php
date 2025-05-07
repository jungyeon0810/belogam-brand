<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <script>
        function validateForm(event) {
            // 전화번호 합치기
            const phone1 = document.getElementById("phone1").value;
            const phone2 = document.getElementById("phone2").value;
            const phone3 = document.getElementById("phone3").value;
            document.getElementById("phone").value = phone1 + "-" + phone2 + "-" + phone3;

            // 비밀번호 확인 검증
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm_password").value;
            if (password !== confirmPassword) {
                alert("비밀번호가 일치하지 않습니다.");
                event.preventDefault();
            }
        }

        function handlePasswordFocus(input) {
            if (input.value === '********') {
                input.value = '';
            }
        }

        function handlePasswordBlur(input) {
            if (input.value === '') {
                input.value = '********';
            }
        }
    </script>
</head>
<body>

<form action="/member/register.php" method="POST" onsubmit="validateForm(event)">

    <fieldset>
        <legend>회원가입</legend>

        <!-- 이메일 입력 + 인증 버튼 -->
        <div>
            <label for="email">이메일 (아이디)</label>
            <input type="email" id="email" name="email" required placeholder="example@email.com">
            <button type="button" onclick="alert('이메일 인증 기능은 개발 중입니다.')">인증하기</button>
        </div>

        <!-- 비밀번호 입력 -->
        <div>
            <label for="password">비밀번호</label>
            <input type="password" id="password" name="pw" required minlength="8" maxlength="32"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,32}"
                title="비밀번호는 8~32자이며, 대문자, 소문자, 숫자를 포함해야 합니다."
                value="********" 
                onfocus="handlePasswordFocus(this)" 
                onblur="handlePasswordBlur(this)">
        </div>

        <!-- 비밀번호 확인 입력 -->
        <div>
            <label for="confirm_password">비밀번호 확인</label>
            <input type="password" id="confirm_password" required minlength="8" maxlength="32">
        </div>

        <!-- 전화번호 입력 (3개 input) -->
        <div>
            <label for="phone1">전화번호</label>
            <input type="tel" id="phone1" maxlength="3" pattern="\d{2,3}" required placeholder="010">
            <span>-</span>
            <input type="tel" id="phone2" maxlength="4" pattern="\d{3,4}" required placeholder="1234">
            <span>-</span>
            <input type="tel" id="phone3" maxlength="4" pattern="\d{4}" required placeholder="5678">
            <input type="hidden" id="phone" name="phone">
        </div>

        <!-- 개인정보 동의 -->
        <div>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                개인정보 수집 및 이용에 동의합니다.
            </label>
        </div>

        <button type="submit">회원가입</button>
    </fieldset>
</form>

</body>
</html>
