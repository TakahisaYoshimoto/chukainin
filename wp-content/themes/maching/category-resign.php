<?php get_header(); ?>
	<div class="l_content">
		<div class="c_form">
			<h2>退会</h2>
			<div class="c_form_area">
				<div class="notice2">
					会員を退会すると、マッチングした投資家・エージェントの情報は削除されます。<br>
					それでも退会しますか？
				</div>
			</div>
			<div class="c_form_area_c p_flex p_jc_center">
				<form action="<?php echo esc_url( get_category_link( get_cat_ID( 'よくある質問' ))) ?>" method="post">
					<input class="c_form_area_c_gray" type="submit" name="" value="もどる">
				</form>
				<form action="./resign_comp.html" method="post">
					<input class="c_form_area_c_orange" type="submit" name="" value="退会">
				</form>
			</div>
		</div>
	</div>
<?php wp_footer(); ?>
