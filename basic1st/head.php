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
    #header_wrap{width:1200px;margin:20px auto;}
</style>
<header id="header_wrap">

         <a href="<?php echo G5_URL ?>">회사명</a>

        <ul >
<?php if ($is_member) {  ?>


            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><i class="fa fa-cog" aria-hidden="true"></i> 정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> 로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>"><b><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</b></a></li>
            <?php }  ?>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> 회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php"><b><i class="fa fa-sign-in" aria-hidden="true"></i> 로그인</b></a></li>
            <?php }  ?>
        </ul>
         <?php  include(G5_THEME_PATH.'/skin/nav/menu.php'); ?> 
           
            
        
</header>

<?php    if(defined('_INDEX_')) {     // index에서만 실행?>

    <section id="recomm_book">
    main selection
    </section> 

<?}else{?>

    <section id="recomm_book">
    
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
        <?php 
        if(defined('_INDEX_')) {     // index에서만 실행
        ?>
            <div class="content" style="width:100%;">
        <?}else{?>
            <div class="content" style="width:75%;float:left">
        <?}?>
