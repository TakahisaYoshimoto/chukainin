<?php get_header(); ?>
<div class="l_content">
	<div class="c_form">
		<h2>お問い合わせ</h2>
		<form action="./contact_confirm.html" method="post">
			<div class="c_form_area">
				<div class="c_form_area_w c_form_area_dl">
					<dl class="p_flex p_jc_between">
						<dt>お問い合わせ種別</dt>
						<dd>
							<select name="">
								<option value="">選択してください</option>
								<option value=""></option>
								<option value=""></option>
							</select>
						</dd>
						<dt>お名前</dt>
						<dd><input type="text" name="" value="" placeholder=""></dd>
						<dt>電話番号</dt>
						<dd><input type="text" name="" value="" placeholder="09012345678"></dd>
						<dt>メールアドレス</dt>
						<dd><input type="text" name="" value="" placeholder="example@mail.com"></dd>
						<dt>件名</dt>
						<dd><input type="text" name="" value="" placeholder=""></dd>
						<dt>お問い合わせ内容</dt>
						<dd><textarea name=""></textarea></dd>
					</dl>
				</div>
			</div>
			<div class="c_form_area_c">
				<input class="c_form_area_c_orange" type="submit" name="" value="確認画面へ">
			</div>
		</form>
	</div>
</div>
<?php get_footer(); ?>
