<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/icon/logo/simbal.svg" type="image/svg+xml">
    <!-- SEO 기본 메타 태그 -->
  <title>벨로젬 | 맞춤형 반려견 사료 · 웨어 · 용품 브랜드</title>
  <meta name="description" content="BeloGem은 반려견을 위한 맞춤형 사료, 맞춤 옷, 감성 용품을 제안하는 프리미엄 브랜드입니다. 당신의 반려견에게 꼭 맞는 라이프스타일을 선물하세요.">
  <meta name="keywords" content="강아지 맞춤사료, 강아지 영양제, 벨로젬, 반려견 맞춤 브랜드">
  <meta name="author" content="벨로젬">
  
<!-- Open Graph (SNS 공유 최적화용) -->
<meta property="og:title" content="벨로젬 | 반려견 맞춤 사료 & 웨어">
  <meta property="og:description" content="당신의 반려견을 위한 프리미엄 맞춤 브랜드, 벨로젬.">
  <meta property="og:type" content="http://jungyeon2999.dothome.co.kr/">
  <meta property="og:url" content="http://jungyeon2999.dothome.co.kr/">
  <meta property="og:image" content="http://jungyeon2999.dothome.co.kr/images/img/seo.jpg">
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
    const header = document.querySelector("header");
    const menuImg = allbtn?.querySelector("img");

    if (allbtn && header && menuImg) {
        allbtn.addEventListener('click', () => {
            header.classList.toggle('on');

            // on 클래스에 따라 이미지 src 변경
            if (header.classList.contains("on")) {
                menuImg.setAttribute("src", menuImg.getAttribute("data-src"));
            } else {
                menuImg.setAttribute("src", menuImg.getAttribute("data-original"));
            }
        });
    }

    // 스크롤 이벤트로 헤더에 클래스 추가        
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
            header.classList.remove('on');
        } else {
            header.classList.remove("scrolled");
        }
        if (header.classList.contains("on")) {
            menuImg.setAttribute("src", menuImg.getAttribute("data-src"));
        } else {
            menuImg.setAttribute("src", menuImg.getAttribute("data-original"));
        }
    });
});

</script>

<body class="<?php if(defined('_INDEX_')) echo "indexpage"; ?> overflow-x-hidden">
    <header id="hd" class="header <?php if(!defined('_INDEX_')) echo "scrolled"; ?>  ">
        <!-- <?php //if(!defined('_INDEX_')){ ?>
            <div class='ad '>
                <a href="" class="text02-1 d-flex aic jcc ">1초만에 회원가입하고 5,000원 할인쿠폰 받기~!</a>
            </div>
        <?php //} ?> -->

        <div class="d-flex jcb aic outer py-3 py-xl-0 px-3 px-xl-0">
            <h1 class="order-xl-1 order-2">
                <a href="/">
                    <img src="/images/icon/logo/logo01.svg" class="d-none d-xl-block" alt="logo">
                    <img src="/images/icon/logo/logo02.svg" class="d-block d-xl-none" alt="logo">
                </a>
            </h1>
            <button id="allMenu" class="d-flex aic jcc d-xl-none bg-transparent border-0 order-1">
            <img src="/images/icon/button/ham.svg"
         data-src="/images/icon/button/close.svg"
         data-original="/images/icon/button/ham.svg"
         alt="전체메뉴">
            </button>

            <div class="gnb align-items-xl-center justify-content-xl-center d-none d-xl-flex order-xl-2 px-3 px-xl-0 py-4 py-xl-0">
                <ul class="d-flex flex-column flex-xl-row align-items-xl-center pc_menu_L">
                    <li><a href="/page/brand.php">브랜드</a></li>
                    <li><a href="/page/made.php">메이드벨로</a></li>
                    <li><a href="/page/care.php">벨로케어</a></li>
                    <li><a href="/page/delivery.php">벨로배송</a></li>
                    <li><a href="/page/community.php">커뮤니티</a></li>
                </ul>
            </div>

            <div class="order-3">
                <div class="util d-xl-flex d-none aic">
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
        .indexpage 
        .header {
            transition: background-color 0.3s ease;
            background-color: transparent;
        }

       .indexpage .header.scrolled {
            background-color: #232326;
        }
        .header {
            background-color: #232326;
        }

        @media (max-width:1280px) {
            #hd .gnb{
                height: auto;
            }
            #hd .gnb ul{
                gap:25px;
            }
            .gnb{ position: absolute; top:100%; background-color:  black; left:0; width:100%; background-color: #232326;}
            header#hd.on{
                background-color: #232326;
            }
            header.on .gnb{
                display: flex !important;
            }
            
        }
        



    </style>


   
    <section class='content <?php if(!defined('_INDEX_')) echo "subpage"; ?>'>
        
