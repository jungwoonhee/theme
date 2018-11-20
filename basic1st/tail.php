

    </div>

    







    
</div>

<!-- } 콘텐츠 끝 -->

<hr>

<footer id="realfooter">
	<div class="footer">
		<ul>
			<li>사이트맵 |</li>
			<li><a href="https://www.twosome.co.kr:7009/twosome/recruit/info.asp"> 리쿠르트 |</a></li>
			<li><a href="https://www.twosome.co.kr:7009/etc/agreement.asp"> 이용약관 |</a></li>
			<li style="color: #ecd56d"><a href="https://www.twosome.co.kr:7009/etc/privacy.asp"> 개인정보처리방침 |</a></li>
			<li><a href="https://www.twosome.co.kr:7009/etc/email_dont_collect.asp"> 이메일 무단수집거부 |</a></li>
			<li><a href="https://www.twosome.co.kr:7009/etc/legalnotice.asp">법적고지</a></li>
		</ul>
		<p>
			서울시 중구 마른내로34(초동 106-9번지)KT&G을지타워 6층 투썸플레이스(주) | 대표이사:구창근 | 
개인정보관리책임자 : 박상욱 | 고객센터 : 1577-4410
		</p>
		<p>
			팩스 : 02-6740-4949 | 대표이메일 : twosomemaster@cj.net | 사업자등록번호 : 404-86-01054 | 통신판매업종신고증 : 제2018-서울중구-0353호
		</p>
		<p>
			Copyright &copy;2018 A TOWSOME PLACE CO. LTD. ALL RIGHTS RESERVED.
		</p>
	</div>
</footer>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>