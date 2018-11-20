<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<main id="main">
  <!-- depth2 tab start -->
  <style>
  body {
  font-family: 'Noto Sans KR', sans-serif;
  background: #fff;
}
    #main {
  margin-bottom: 100px;
}

.sub-header {
  margin-bottom: 100px;
}

.sub-title-img {
  width: 100%;
  height: 200px;
  background: url(<?php echo G5_THEME_IMG_URL ?>/class-title.png) no-repeat;
  -webkit-background-size: cover;
  background-size: cover;
}

.sub-title {
  text-align: center;
  margin: 50px;
  font-size: 34px;
  font-weight: bold;
}

.sub-nav {
  display: flex;
  justify-content: center;
}

.sub-tab {
  width: 240px;
  height: 50px;
  margin: 0;
  border: 1px solid #B30317;
  background: #fff;
  color: #B30317;
}

.sub-tab.active {
  border: none;
  background: #B30317;
  color: #ebebeb;
}

.contents-wrap {
  margin: 0 auto;
  width: 1200px;
}

.tab-content {
  display: none;
  margin: 0 auto;
}

.tab-content.active {
  display: block;
}
</style>
  <header class="sub-header">
    <div class="sub-title-img"></div>
    <h2 class="sub-title">CLASS</h2>
    <nav class="sub-nav">
      <button class="sub-tab active" type="button">케이크</button>
      <button class="sub-tab" type="button">커피</button>
    </nav>
  </header>
  <!-- depth2 tab end -->

  <!-- contents start -->
  <style>
    #contents-class .tab-content {
      width: 1000px;
    }
    .tab-img{
      width: 100%;
    }
  </style>
  <div class="contents-wrap" id="contents-class">
    <section class="tab-content active">
      <!-- 서브페이지 이미지 파일 -->
      <img class="tab-img" src="<?php echo G5_THEME_IMG_URL ?>/class-cake.png" alt="케이크 수업 안내">
    </section>
    <section class="tab-content">
      <!-- 서브페이지 이미지 파일 -->
      <img class="tab-img" src="<?php echo G5_THEME_IMG_URL ?>/class-coffee.png" alt="커피 수업 안내">
    </section>
  </div>
  <!-- contents end -->

</main>

<script>
  tabMenu();

  function tabMenu() {
    var btns = document.querySelectorAll('.sub-tab');
    var contents = document.querySelectorAll('.tab-content');
    Array.prototype.forEach.call(btns, function(btn) {
      btn.addEventListener('click', openTab);
    });

    function openTab() {
      for (let i = 0, item; item = btns[i]; i++) {
        btns[i].classList.remove('active');
        contents[i].classList.remove('active');
      }
      this.classList.add('active');
      let i = Array.prototype.indexOf.call(btns, this);
      contents[i].classList.add('active');
    }
  }
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
