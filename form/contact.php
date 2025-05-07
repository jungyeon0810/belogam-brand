<!-- <p>
    1.인터넷 주소창에 url 써서 나를 노출!
</p>
<div>
    $_GET으로 주소창의 변수 가져오기
    <a href="/form/contact.php?study=php$title=연락">클릭하기</a>
    <p>$_GET['study']: <?php
            if(isset($_GET['study'])){
                echo "있어";
            }else{
                echo "없어";
            }
    ?></p>
</div> -->

<div>
    <?php
       if(!isset($_GET['study'])){
    ?>
        <h2>
        어떤 언어에 집중하고 싶은가요?
        </h2>
        <ol>
            <li><a href="/form/contact.php?study=리액트">리액트</a></li>
            <li><a href="/form/contact.php?study=php">php</a></li>
            <li><a href="/form/contact.php?study=mysql">mysql</a></li>
        </ol>
    <?php
       }else{
    ?>
        <h2>
            <?php echo $_GET['study']."를 선택하셨습니다." ?>
        </h2>
    <?php } ?>
</div>