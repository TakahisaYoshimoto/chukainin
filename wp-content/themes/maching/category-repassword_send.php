<?php get_header(); ?>
<div class="l_content">
	<div class="c_form">
		<h2>パスワード再設定認証</h2>
		<form action="./repassword_send_comp.html" method="post">
			<div class="c_form_area">
				<div class="c_form_area_w c_form_area_dl">
					<div class="c_form_area_c">
						パスワード再設定のメールをお送りします。<br>
						ご登録しているメールアドレスを入力し、送信ボタンを押してください。<br>
					</div>
					<dl class="p_flex p_jc_between">
						<dt>メールアドレス</dt>
						<dd><input type="text" name="" value="" placeholder="example@mail.com"></dd>
					</dl>
				</div>
			</div>
			<div class="c_form_area_c">
				<input class="c_form_area_c_green" type="submit" name="" value="送信">
			</div>
		</form>
	</div>
</div>
<?php get_footer(); ?>
