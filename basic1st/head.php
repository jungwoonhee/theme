<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<style>
    #header_wrap{width:1200px;margin:0px auto;position: relative;height: 160px;}

    .header_bg{background: url(<? echo G5_THEME_IMG_URL ?>/two/bg.gif);height: 150px;width: 100%;}
    .gnb{position: absolute;top: 0;right: 0;color: #d1d1d1;}
    .gnb:after{content: "";display: block;clear: both}
    .gnb li{float: left;padding: 10px;font-size: 12px}

    .nav {background: url(<? echo G5_THEME_IMG_URL ?>/two/box.png) no-repeat;height: 100px;width: 760px;float: right;margin-top: 40px;color: #d1d1d1;font-size: 18px;font-weight: bold;}
    .nav ul{line-height: 110px;margin-left: 20px;margin-right: 20px;}
    .nav li{width: 144px;text-align: center;}

    .sns{width: 115px;float: right;margin-top: 75px;}

    .side_one{position: fixed;z-index: 10;right: 50px;top: 165px;}
    .side_two{position: fixed;z-index: 10;right: 50px;top: 278px;background: url(<? echo G5_THEME_IMG_URL ?>/two/side2.png);width: 146px;height: 97px;}
    .side_two a{line-height: 120px;padding-left: 12px;}

    .tab:after{content: "";display: block;clear: both;}
    .tab li{float: left;font-size: 24px}

    .logo{position: relative;z-index: 5}

</style>
<div class="header_bg">
    <header id="header_wrap">
    
            <a href="<?php echo G5_URL ?>"><img src="<?echo G5_THEME_IMG_URL?>/two/logo.png" alt="logo" class="logo"></a>
             
    
            <ul class="gnb">
    <?php if ($is_member) {  ?>
    
    
                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><i class="fa fa-cog" aria-hidden="true"></i> 정보수정</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> 로그아웃</a></li>
                <?php if ($is_admin) {  ?>
                <li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>"><b><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</b></a></li>
                <?php }  ?>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php"> 회원가입</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php"><b> 로그인</b></a></li>
                <?php }  ?>
                <li>고객센터</li>
            </ul>
             <?php  include(G5_THEME_PATH.'/skin/nav/menu.php'); ?> 
               
                
            
    </header>
</div>

<?php    if(defined('_INDEX_')) {     // index에서만 실행?>

    <section id="recomm_book" style="display: none">
        
    </section> 

<?}else{?>

    <section id="recomm_book">
        <?if($co_id == "B1" || $co_id == "B2" || $co_id == "B3"){?>
        <img src="<? echo G5_THEME_IMG_URL ?>/two/sub_bg.png" alt="sub_bg">
        <?}else if($co_id == "M1" || $co_id == "M2" || $co_id == "M3" || $co_id == "M4" ||$co_id == "M5"){?>
        <img src="<? echo G5_THEME_IMG_URL ?>/two/notice.jpg" alt="menu_bg">
        <?}else if($co_id == "C1" || $co_id == "C2"){?>
        <img src="<? echo G5_THEME_IMG_URL ?>/two/class-title.png" alt="class_bg">
        <?}else if($bo_table == "free"){?>
        <img src="<? echo G5_THEME_IMG_URL ?>/two/store.jpg" alt="store">
        <?}else{?>
           <img src="<? echo G5_THEME_IMG_URL ?>/two/membership.jpg" alt="membership_bg">
        <?}?>


    <!-- 현재위치 -->
    <span style="display:inline-block">
    <?php 
        $sql_menu = " select *  from ".$g5['menu_table']." 
        where me_use = '1' 
        and length(me_code) = '2' 
        order by me_order, me_id "; 
        $result_menu = sql_query($sql_menu, false); 
        


        for ($i=0; $rowMenu=sql_fetch_array($result_menu); $i++) { 
            $rowMenu_link = explode("=",$rowMenu['me_link']); 
           //echo $rowMenu_link[1];

            
      ?>      
         <a href="<?php echo $rowMenu['me_link']; ?>" target="_<?php echo $rowMenu['me_target']; ?>" style="display:none" id="menu_link<?php echo $i ?>"><?php echo $rowMenu['me_name']; ?></a>  

        <?}?>

    </span>
     >   
     <? if($bo_table){echo $board['bo_subject']; }else{echo $g5['title']; }
     ?>
     <!-- 현재위치끝 -->

    </section>

    <?}?>

  <div id="content" style="overflow:hidden">
    

    <? if(!defined('_INDEX_')) {?>
        <div id="aside" >
        <?//php  include(G5_THEME_PATH.'/skin/nav/mysubmenu.php'); ?> 

<style>
.active{background: red;}
</style>
         <?if($co_id == "B1" || $co_id == "B2" || $co_id == "B3"){?>
             <ul>
                <li><a href="<? echo G5_BBS_URL;?>/content.php?co_id=B1"   class="<?if($co_id == "B1"){echo " active";}?>">브랜드이야기</a></li>
                <li><a href="<? echo G5_BBS_URL;?>/content.php?co_id=B2"   class="<?if($co_id == "B2"){echo " active";}?>">커피이야기</a></li>
                <li><a href="<? echo G5_BBS_URL;?>/content.php?co_id=B3"   class="<?if($co_id == "B3"){echo " active";}?>">디저트이야기</a></li>
             </ul>
        <?}else if($co_id == "M1" || $co_id == "M2" || $co_id == "M3" || $co_id == "M4" ||$co_id == "M5"){?>
       
        <?}else if($co_id == "C1" || $co_id == "C2"){?>
       
        <?}else if($bo_table == "free"){?>
        
        <?}else{?>
          
        <?}?>




        </div>
    <?}?>

        <?php 
        if(defined('_INDEX_')) {     // index에서만 실행
        ?>
            <div class="content" style="width:100%;">
        <?}else{?>
            <div class="content" style="width:100%;margin-bottom: 100px">
        <?}?>