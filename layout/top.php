<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO최적화 -->
    <meta property="og:title" content="소중함의 다른 이름 벨로젬(BeloGem)" />
    <meta property="og:site_name" content="벨로젬">
    <meta property="og:description" content="세상에 모든 반려견들의 행복을 위한 브랜드 벨로젬입니다." />
    <meta property="og:image" content="   //jungyeon0810.github.io/belogam/images/img/c01_dog.png/">
    <meta property="og:locale" content="ko_KR" />
    <link rel="shortcut icon" href="//jungyeon0810.github.io/belogam/images/icon/logo/simbal.svg">

    <title>BeloGem</title>
    <!-- font -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous" />
    <!-- wantedsans font -->
    <link rel="preload" as="style" crossorigin href="https://cdn.jsdelivr.net/gh/wanteddev/wanted-sans@v1.0.3/packages/wanted-sans/fonts/webfonts/static/complete/WantedSans.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/wanteddev/wanted-sans@v1.0.3/packages/wanted-sans/fonts/webfonts/static/complete/WantedSans.min.css" />
    <!-- maruburi serif font -->
    <link href="https://hangeul.pstatic.net/hangeul_static/css/maru-buri.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/fonts.css">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/reset-css@5.0.2/reset.min.css">

    <!-- 부트스트랩 css -->
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/common.css">

    <!-- 커스터마이징 -->
    <link rel="stylesheet" href="/css/layout.min.css">
<!-- 스와이퍼 cdn-->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>
<script>
    window.addEventListener("DOMContentLoaded", () => {
        const allbtn = document.querySelector("#allMenu");
        allbtn.addEventListener('click', () => {
            allbtn.classList.toggle('on');
        })
    })
</script>

<body class="<?php if(isset($page)) echo $page; ?>">
    <header id="hd" class="header <?php if(!defined('_INDEX_')) echo "scrolled"; ?>">

        <div class='ad d-none'>
            <a href="" class="text02-1 d-flex aic jcc">1초만에 회원가입하고 5,000원 할인쿠폰 받기~!</a>
        </div>

        <div class="logo d-flex jcb aic outer">
            <h1>
                <a href="/"><img src="/images/icon/logo/logo01.svg" alt="logo"></a>
            </h1>

            <div class="gnb d-flex aic jcc">
                <ul class="d-flex aic pc_menu_L">
                    <li><a href="/page/brand.php">브랜드</a></li>
                    <li><a href="/page/made.php">메이드벨로</a></li>
                    <li><a href="/page/care.php">벨로케어</a></li>
                    <li><a href="/page/delivery.php">벨로배송</a></li>
                    <li><a href="/page/community.php">커뮤니티</a></li>
                </ul>
            </div>

            <div>
                <div class="util d-flex aic">
                    <ul class="d-flex aic">
                        <li><a href="/member/login.html"><img src="/images/icon/button/user.svg" alt="로그인"></a></li>
                        <li><a href="/member/cart.html"><img src="/images/icon/button/cart.svg" alt="장바구니"></a></li>
                        <li><a href=""><img src="/images/icon/button/language.svg" alt="언어"></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </header>

    <style>
        .header {
            transition: background-color 0.3s ease;
        }

        .header.scrolled {
            background-color: #232326;
        }
    </style>


   
    <section class='content <?php if(!defined('_INDEX_')) echo "subpage"; ?>'>
        
