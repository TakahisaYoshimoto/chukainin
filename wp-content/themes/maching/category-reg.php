<?php get_header(); ?>
<div class="l_content">
	<div class="c_form">
		<h2>新規登録</h2>
		<form action="./reg_comp.html" method="post">
			<div class="c_form_area">
				<div class="c_form_area_center">
					<div>どちらとして登録するか選択してください</div>
					<div class="c_form_area_w c_form_genre p_flex p_jc_between">
						<input type="radio" name="genre" value="" id="genre1"><label for="genre1"><i>投資家</i>として登録</label>
						<input type="radio" name="genre" value="" id="genre2"><label for="genre2"><i>エージェント</i>として登録</label>
					</div>
				</div>
				<div class="c_form_area_w c_form_area_dl">
					<dl class="p_flex p_jc_between">
						<dt>お名前<span>（必須）</span></dt>
						<dd class="c_form_input_double"><input type="text" name="" value="" placeholder="姓"><input type="text" name="" value="" placeholder="名"></dd>
						<dt>お名前（ローマ字）</dt>
						<dd class="c_form_input_double"><input type="text" name="" value="" placeholder="Last Name"><input type="text" name="" value="" placeholder="First Name"></dd>
						<dt>メールアドレス<span>（必須）</span></dt>
						<dd><input type="text" name="" value="" placeholder="example@mail.com"></dd>
						<dt>携帯電話番号<span>（必須）</span></dt>
						<dd><input type="text" name="" value="" placeholder="09012345678"></dd>
						<dt>LINE ID</dt>
						<dd><input type="text" name="" value="" placeholder=""></dd>
						<dt>希望連絡方法</dt>
						<dd>
							<input type="radio" name="contact" id="contact1" value="" checked><label for="contact1"><span>メール</span></label>
							<input type="radio" name="contact" id="contact2" value=""><label for="contact2"><span>電話</span></label>
							<input type="radio" name="contact" id="contact3" value=""><label for="contact3"><span>LINE</span></label>
						</dd>
						<dt>性別</dt>
						<dd>
							<input type="radio" name="gender" id="gender1" value="" checked><label for="gender1"><span>男性</span></label>
							<input type="radio" name="gender" id="gender2" value=""><label for="gender2"><span>女性</span></label>
						</dd>
					</dl>
				</div>
			</div>
			<div class="c_form_area">
				<div class="c_form_area_w c_form_area_dl">
					<dl class="p_flex p_jc_between">
						<dt>パスワード<span>（必須）</span></dt>
						<dd><input type="text" name="" value="" placeholder="半角英数字８ケタ"></dd>
						<dt>パスワード確認<span>（必須）</span></dt>
						<dd><input type="text" name="" value="" placeholder="半角英数字８ケタ"></dd>
					</dl>
				</div>
			</div>
			<div class="c_form_area_c">
				<a href="<?php echo get_permalink( get_page_by_path('riyou') ->ID ); ?>">利用規約</a>に同意した上で
			</div>
			<div class="c_form_area_c">
				<input class="c_form_area_c_orange" type="submit" name="" value="新規登録">
			</div>
		</form>
	</div>
</div>
<?php get_footer(); ?>
