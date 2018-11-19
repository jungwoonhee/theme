        <style>
            nav>ul>li{float:left;_width:200px;}
            nav>ul>li:hover{color: #ffffff}
            .sub_menu{font-size: 14px;background: rgba(54,57,58);margin-top: -10px;width: 140px;box-shadow: 2px 2px 5px black;z-index: 5;position: absolute;}
            .sub_menu li{color: #ebebeb}
            .sub_menu a{display: block;line-height: 50px;}
            .sub_menu a:hover{color: #ffffff}
        </style>
        
        <script>
            $(function(){
                $(".sub_menu").hide();
                $(".nav>ul>li").hover(function(){
                    var k=$(this).index();
                    $(".sub_menu").eq(k).stop().slideDown();
                },function(){
                    $(".sub_menu").hide();
                })
            })
        </script>

        <div class="sns">
           <a href="https://www.facebook.com/ATWOSOMEPLACE"> <img src="<? echo G5_THEME_IMG_URL ?>/two/fb.gif" alt="gif"></a>
            <a href="https://www.instagram.com/atwosomeplace_official/"><img src="<? echo G5_THEME_IMG_URL ?>/two/ins.png" alt="ins"></a>
        </div>

        <nav class="nav">
           <ul>
        <?php
                $sql = " select *
                            from {$g5['menu_table']}
                            where me_use = '1'
                              and length(me_code) = '2'
                            order by me_order, me_id ";
                $result = sql_query($sql, false);
                $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                $menu_datas = array();

                for ($i=0; $row=sql_fetch_array($result); $i++) {
                    $menu_datas[$i] = $row;

                    $sql2 = " select *
                                from {$g5['menu_table']}
                                where me_use = '1'
                                  and length(me_code) = '4'
                                  and substring(me_code, 1, 2) = '{$row['me_code']}'
                                order by me_order, me_id ";
                    $result2 = sql_query($sql2);
                    for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                        $menu_datas[$i]['sub'][$k] = $row2;
                    }

                }

                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue; 
                ?>
                <li>
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){

                        if( empty($row2) ) continue; 

                        if($k == 0)
                            echo '<ul class="sub_menu">'.PHP_EOL;
                    ?>
                        <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                    <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</ul>'.PHP_EOL;
                    ?>
                </li>
                <?php
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                <?php } ?>


         </ul>
        </nav>


        <div class="side_one">
            <a href="#"><img src="<? echo G5_THEME_IMG_URL ?>/two/side1.png" alt="side"></a>
        </div>
        <div class="side_two">
            <a href="https://play.google.com/store/apps/details?id=com.cj.twosome"><img src="<? echo G5_THEME_IMG_URL ?>/two/google.png" alt="google"></a>
            <a href="https://itunes.apple.com/kr/app/id1225957208?mt=8"><img src="<? echo G5_THEME_IMG_URL ?>/two/apple.png" alt="apple"></a>
        </div>