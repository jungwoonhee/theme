<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>







<style>
#slider_wrap{width: 100%;height:600px;background:blue;}
	
    
	#bar1{width: 1920px;height:200px;}
	#bar2{width: 1920px;height:600px; margin:0 auto;}
	
	
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  #class-links{
    position: relative;
    width: 800px;
    height: 600px;
    margin: 20px auto;
  }
  #class-links a {
    position: absolute;
    display: block;
    width: 500px;
    height: 500px;
    padding: 10px;
    overflow: hidden;
  }
  #class-links img{
    width: 100%;
    height: 100%;
    transition: 1s;
  }

  #class-links a:hover img{
    transform: scale(1.2);
  }

  #class-links .coffee {
    top: 0;left: 0;
  }

  #class-links .cake {
    bottom: 0;right: 0;
  }
  #class-links p{
    position: absolute;
    padding: 40px;
    color: #fff;
    font-weight: bold;
    font-size: 40px;
    text-align: center;
    z-index: 1;
  }
  #class-links .cake p{
    bottom: 0;right: 0;
  }
</style>
<script>
      $(document).ready(function(){
         $('.slider').bxSlider({
            auto:true,
            controls:false, 
            pager:false
         });
         
   

       
   
   
         });
      


		
	
</script>




<section id="slider_wrap">
    <div class="slider">
		<div><img src="<?echo G5_THEME_IMG_URL?>/slider1.jpg" alt="a"></div>
		<div><img src="<?echo G5_THEME_IMG_URL?>/slider2.jpg" alt="a"></div>
		<div><img src="<?echo G5_THEME_IMG_URL?>/slider3.jpg" alt="a"></div>
	</div>
</section> 
	

<div id="bar1">
<img src="<?echo G5_THEME_IMG_URL?>/bar1.jpg" alt="bar1">
</div>

<div id="class-links">
    <a href="#" class="coffee">
      <p>THE COFFEE<br>TEACHING<br>CLASS</p>
     <img src="<?echo G5_THEME_IMG_URL?>/bg1.png" alt="bg1">
    </a>
    <a href="#" class="cake">
      <p>THE CAKE<br>TEACHING<br>CLASS</p>
    <img src="<?echo G5_THEME_IMG_URL?>/bg2.png" alt="bg2">
    </a>
  </div>

<div id="bar2">

	<img src="<?echo G5_THEME_IMG_URL?>/bar2.jpg" alt="bar2">
</div>

<div class="latest_wr">
    <!--  사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
 
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>