<?php get_header(); ?>
<div class="l_main l_sub">
	<div class="p_inner2 p_flex p_jc_between">

		<div class="l_content">

			<div class="p_breadcrumbs">
				<ul class="p_flex">
					<li><a href="./index.html">HOME</a></li>
					<li>よくある質問</li>
				</ul>
			</div>

			<div class="p_heading">
				<h2>よくある質問</h2>
			</div>

			<div class="c_faq_dl">
				<dl>
					<?php query_posts("category_name=faq&showposts=20"); ?>
					<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<dt>
						<?php	echo $post->post_title; ?>
					</dt>
					<dd>
						<?php	echo $post->post_content;	?>
					</dd>
					<?php endwhile; endif; ?>
					<dt>退会方法について教えてくだい</dt>
					<dd>
						退会につきましては、<a href="<?php echo esc_url( get_category_link( get_cat_ID( '退会' ))) ?>">こちら</a>から行ってください。
					</dd>
				</dl>
			</div>

		</div>

		<div class="l_sidebar">
			<div class="l_side_content">
				<a href="http://www.abc-planning.sakura.ne.jp/lp/002/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/side_banner1.png"></a>
			</div>
			<div class="l_side_content">
				<a href="http://www.abc-planning.sakura.ne.jp/lp/001/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/side_banner2.png"></a>
			</div>
			<div class="l_side_content">
				<div class="l_side_reg">
					<div class="l_side_reg_title">新規登録</div>
					<div class="l_side_reg_body">
						<div class="p_bt p_yellow p_shadow2">
							<a href="">
								無料で新規登録<br>
								<span>たった30秒で完了!!</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="l_side_content">
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/side_banner3.png"></a>
			</div>
			<div class="l_side_content">
				<div class="l_side_login_button p_bt p_green p_shadow2">
					<a href="">ログインはこちら</a>
				</div>
			</div>
			<div class="l_side_content">
				<a href="./second_opinion.html"><img src="<?php echo get_template_directory_uri(); ?>/img/side_second_opinion.png"></a>
			</div>
			<div class="l_side_content">
				<a href="./list_agent.html"><img src="<?php echo get_template_directory_uri(); ?>/img/side_agent.png"></a>
			</div>
			<div class="l_side_content">
				<a href="./list_property.html"><img src="<?php echo get_template_directory_uri(); ?>/img/side_undisclosed_property.png"></a>
			</div>
			<div class="l_side_content">
				<a href="./list_success.html"><img src="<?php echo get_template_directory_uri(); ?>/img/side_success_stories.png"></a>
			</div>
			<div class="l_side_content">
				<div class="l_side_notice">
					<div class="l_side_notice_title">運営からのお知らせ</div>
					<div class="l_side_notice_body">
						<ul>
							<li>
								<div class="l_side_notice_body_d">2017/10/01</div>
								<div class="l_side_notice_body_t">「未公開収益物件仲介人」PC版をリリースしました。</div>
							</li>
							<li>
								<div class="l_side_notice_body_d">2017/10/01</div>
								<div class="l_side_notice_body_t">「未公開収益物件仲介人」PC版をリリースしました。</div>
							</li>
							<li>
								<div class="l_side_notice_body_d">2017/10/01</div>
								<div class="l_side_notice_body_t">「未公開収益物件仲介人」PC版をリリースしました。</div>
							</li>
							<li>
								<div class="l_side_notice_body_d">2017/10/01</div>
								<div class="l_side_notice_body_t">「未公開収益物件仲介人」PC版をリリースしました。</div>
							</li>
							<li>
								<div class="l_side_notice_body_d">2017/10/01</div>
								<div class="l_side_notice_body_t">「未公開収益物件仲介人」PC版をリリースしました。</div>
							</li>
							<li>
								<div class="l_side_notice_body_d">2017/10/01</div>
								<div class="l_side_notice_body_t">「未公開収益物件仲介人」PC版をリリースしました。</div>
							</li>
							<li>
								<div class="l_side_notice_body_d">2017/10/01</div>
								<div class="l_side_notice_body_t">「未公開収益物件仲介人」PC版をリリースしました。</div>
							</li>
							<li>
								<div class="l_side_notice_body_d">2017/10/01</div>
								<div class="l_side_notice_body_t">「未公開収益物件仲介人」PC版をリリースしました。</div>
							</li>
							<li>
								<div class="l_side_notice_body_d">2017/10/01</div>
								<div class="l_side_notice_body_t">「未公開収益物件仲介人」PC版をリリースしました。</div>
							</li>
							<li>
								<div class="l_side_notice_body_d">2017/10/01</div>
								<div class="l_side_notice_body_t">「未公開収益物件仲介人」PC版をリリースしました。</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="l_sidebar">
				<div class="l_side_search">
					<div class="l_side_search_title"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_search_g.png">地域から探す</div>
					<div class="l_side_search_body">
						<dl class="p_flex">
							<dt>北海道</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">北海道</a></li>
								</ul>
							</dd>
							<dt>東北</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">青森</a></li>
									<li><a href="./list_search_result.html">岩手</a></li>
									<li><a href="./list_search_result.html">宮城</a></li>
									<li><a href="./list_search_result.html">秋田</a></li>
									<li><a href="./list_search_result.html">山形</a></li>
									<li><a href="./list_search_result.html">福島</a></li>
								</ul>
							</dd>
							<dt>関東</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">茨城</a></li>
									<li><a href="./list_search_result.html">栃木</a></li>
									<li><a href="./list_search_result.html">群馬</a></li>
									<li><a href="./list_search_result.html">埼玉</a></li>
									<li><a href="./list_search_result.html">千葉</a></li>
									<li><a href="./list_search_result.html">東京</a></li>
									<li><a href="./list_search_result.html">神奈川</a></li>
								</ul>
							</dd>
							<dt>北陸</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">新潟</a></li>
									<li><a href="./list_search_result.html">富山</a></li>
									<li><a href="./list_search_result.html">石川</a></li>
									<li><a href="./list_search_result.html">福井</a></li>
								</ul>
							</dd>
							<dt>中部</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">山梨</a></li>
									<li><a href="./list_search_result.html">長野</a></li>
									<li><a href="./list_search_result.html">岐阜</a></li>
									<li><a href="./list_search_result.html">静岡</a></li>
									<li><a href="./list_search_result.html">愛知</a></li>
									<li><a href="./list_search_result.html">三重</a></li>
								</ul>
							</dd>
							<dt>関西</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">滋賀</a></li>
									<li><a href="./list_search_result.html">京都</a></li>
									<li><a href="./list_search_result.html">大阪</a></li>
									<li><a href="./list_search_result.html">兵庫</a></li>
									<li><a href="./list_search_result.html">奈良</a></li>
									<li><a href="./list_search_result.html">和歌山</a></li>
								</ul>
							</dd>
							<dt>中国</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">鳥取</a></li>
									<li><a href="./list_search_result.html">島根</a></li>
									<li><a href="./list_search_result.html">岡山</a></li>
									<li><a href="./list_search_result.html">広島</a></li>
									<li><a href="./list_search_result.html">山口</a></li>
								</ul>
							</dd>
							<dt>四国</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">徳島</a></li>
									<li><a href="./list_search_result.html">香川</a></li>
									<li><a href="./list_search_result.html">愛媛</a></li>
									<li><a href="./list_search_result.html">高知</a></li>
								</ul>
							</dd>
							<dt>九州</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">福岡</a></li>
									<li><a href="./list_search_result.html">佐賀</a></li>
									<li><a href="./list_search_result.html">長崎</a></li>
									<li><a href="./list_search_result.html">熊本</a></li>
									<li><a href="./list_search_result.html">大分</a></li>
									<li><a href="./list_search_result.html">宮崎</a></li>
									<li><a href="./list_search_result.html">鹿児島</a></li>
								</ul>
							</dd>
							<dt>沖縄</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">沖縄</a></li>
								</ul>
							</dd>
						</dl>
					</div>
					<div class="l_side_search_title"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_search_g.png">物件種別からさがす</div>
					<div class="l_side_search_body">
						<ul class="p_flex">
							<li><a href="./list_search_result.html">一棟RC</a></li>
							<li><a href="./list_search_result.html">一棟鉄骨</a></li>
							<li><a href="./list_search_result.html">一棟木造</a></li>
							<li><a href="./list_search_result.html">商業ビル</a></li>
							<li><a href="./list_search_result.html">戸建賃貸</a></li>
							<li><a href="./list_search_result.html">区分マンション</a></li>
							<li><a href="./list_search_result.html">土地</a></li>
							<li><a href="./list_search_result.html">駐車場</a></li>
							<li><a href="./list_search_result.html">ホテル</a></li>
							<li><a href="./list_search_result.html">区分事務所</a></li>
							<li><a href="./list_search_result.html">区分店舗</a></li>
							<li><a href="./list_search_result.html">倉庫</a></li>
							<li><a href="./list_search_result.html">工場</a></li>
							<li><a href="./list_search_result.html">太陽光発電用地</a></li>
							<li><a href="./list_search_result.html">区分太陽光発電</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="l_sidebar">
				<div class="sns">

				</div>
			</div>

		</div>
	</div>
</div>

<div class="l_footer">
	<div class="p_inner2">
		<div class="p_flex">
			<div class="l_footer_search_area">
				<div class="l_footer_search_title"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_search_w_s.png">地域から探す</div>
				<div class="p_flex">
					<div class="l_footer_search_body l_flex">
						<dl class="p_flex">
							<dt>北海道</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">北海道</a></li>
								</ul>
							</dd>
							<dt>東北</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">青森</a></li>
									<li><a href="./list_search_result.html">岩手</a></li>
									<li><a href="./list_search_result.html">宮城</a></li>
									<li><a href="./list_search_result.html">秋田</a></li>
									<li><a href="./list_search_result.html">山形</a></li>
									<li><a href="./list_search_result.html">福島</a></li>
								</ul>
							</dd>
							<dt>関東</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">茨城</a></li>
									<li><a href="./list_search_result.html">栃木</a></li>
									<li><a href="./list_search_result.html">群馬</a></li>
									<li><a href="./list_search_result.html">埼玉</a></li>
									<li><a href="./list_search_result.html">千葉</a></li>
									<li><a href="./list_search_result.html">東京</a></li>
									<li><a href="./list_search_result.html">神奈川</a></li>
								</ul>
							</dd>
							<dt>北陸</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">新潟</a></li>
									<li><a href="./list_search_result.html">富山</a></li>
									<li><a href="./list_search_result.html">石川</a></li>
									<li><a href="./list_search_result.html">福井</a></li>
								</ul>
							</dd>
							<dt>中部</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html./list_search_result.html">山梨</a></li>
									<li><a href="./list_search_result.html">長野</a></li>
									<li><a href="./list_search_result.html">岐阜</a></li>
									<li><a href="./list_search_result.html">静岡</a></li>
									<li><a href="./list_search_result.html">愛知</a></li>
									<li><a href="./list_search_result.html">三重</a></li>
								</ul>
							</dd>
						</dl>
					</div>
					<div class="l_footer_search_body l_flex">
						<dl class="p_flex">
							<dt>関西</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">滋賀</a></li>
									<li><a href="./list_search_result.html">京都</a></li>
									<li><a href="./list_search_result.html">大阪</a></li>
									<li><a href="./list_search_result.html">兵庫</a></li>
									<li><a href="./list_search_result.html">奈良</a></li>
									<li><a href="./list_search_result.html">和歌山</a></li>
								</ul>
							</dd>
							<dt>中国</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">鳥取</a></li>
									<li><a href="./list_search_result.html">島根</a></li>
									<li><a href="./list_search_result.html">岡山</a></li>
									<li><a href="./list_search_result.html">広島</a></li>
									<li><a href="./list_search_result.html">山口</a></li>
								</ul>
							</dd>
							<dt>四国</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">徳島</a></li>
									<li><a href="./list_search_result.html">香川</a></li>
									<li><a href="./list_search_result.html">愛媛</a></li>
									<li><a href="./list_search_result.html">高知</a></li>
								</ul>
							</dd>
							<dt>九州</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">福岡</a></li>
									<li><a href="./list_search_result.html">佐賀</a></li>
									<li><a href="./list_search_result.html">長崎</a></li>
									<li><a href="./list_search_result.html">熊本</a></li>
									<li><a href="./list_search_result.html">大分</a></li>
									<li><a href="./list_search_result.html">宮崎</a></li>
									<li><a href="./list_search_result.html">鹿児島</a></li>
								</ul>
							</dd>
							<dt>沖縄</dt>
							<dd>
								<ul class="p_flex">
									<li><a href="./list_search_result.html">沖縄</a></li>
								</ul>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="l_footer_search_property">
				<div class="l_footer_search_title"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_search_w_s.png">物件種別からさがす</div>
				<div class="l_footer_search_body">
					<ul class="p_flex">
						<li><a href="./list_search_result.html">一棟RC</a></li>
						<li><a href="./list_search_result.html">一棟鉄骨</a></li>
						<li><a href="./list_search_result.html">一棟木造</a></li>
						<li><a href="./list_search_result.html">商業ビル</a></li>
						<li><a href="./list_search_result.html">戸建賃貸</a></li>
						<li><a href="./list_search_result.html">区分マンション</a></li>
						<li><a href="./list_search_result.html">土地</a></li>
						<li><a href="./list_search_result.html">駐車場</a></li>
						<li><a href="./list_search_result.html">ホテル</a></li>
						<li><a href="./list_search_result.html">区分事務所</a></li>
						<li><a href="./list_search_result.html">区分店舗</a></li>
						<li><a href="./list_search_result.html">倉庫</a></li>
						<li><a href="./list_search_result.html">工場</a></li>
						<li><a href="./list_search_result.html">太陽光発電用地</a></li>
						<li><a href="./list_search_result.html">区分太陽光発電</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
  <!-- footer -->
  <div class="l_footer">
    <div class="l_footer_copyright">
      <div class="p_inner2">
        <ul class="p_flex p_jc_around">
          <li><a href="<?php echo get_permalink( get_page_by_path('company') ->ID ); ?>">運営会社</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('privacy') ->ID ); ?>">プライバシーポリシー</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('use') ->ID ); ?>">利用規約</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('tokusho') ->ID ); ?>">特定商取引法に基づく表記</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/page-faq.php">よくある質問</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('contact') ->ID ); ?>">お問い合わせ</a></li>
        </ul>
      </div>
      <div class="l_footer_last_text">
        Copyright 未公開収益物件仲介人 All Rights Reserved.
      </div>
    </div>
  </div>
  </div><!-- /footer -->
<?php wp_footer(); ?>
