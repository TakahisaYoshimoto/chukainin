<?php get_header(); ?>
<div class="l_content">
	<div class="c_form">
		<h2>ログイン</h2>
		<form action="./" method="post">
			<div class="c_form_area">
				<div class="c_form_area_w c_form_area_dl">
					<dl class="p_flex p_jc_between">
						<dt>メールアドレス</dt>
						<dd><input type="text" name="" value="" placeholder="example@mail.com"></dd>
						<dt>パスワード</dt>
						<dd><input type="text" name="" value="" placeholder="半角英数字８ケタ"></dd>
					</dl>
				</div>
			</div>
			<div class="c_form_area_c">
				<input class="c_form_area_c_green" type="submit" name="" value="ログイン">
			</div>
			<div class="c_form_area_c">
				<a href="<?php echo esc_url( get_category_link( get_cat_ID( 'パスワード再設定' ))) ?>">パスワード再設定</a>
			</div>
		</form>
	</div>
</div>
<?php get_footer(); ?>
