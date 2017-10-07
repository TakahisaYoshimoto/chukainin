<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=0.5,user-scalable=yes,initial_scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" charset="UTF-8"  src="<?php echo get_stylesheet_directory_uri(); ?>/js/contents.js"></script>

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  </header>
  <body>
		<div class="wrapper">
			<div class="l_head">
				<div class="l_head_heading">
					<div class="p_inner2">
						<h1>不動産へ投資をしたい投資家と全国の不動産エージェントをつなぐマッチングサービス「未公開収益物件仲介人」</h1>
					</div>
				</div>
				<div class="l_head_content">
					<div class="p_inner2 p_flex p_jc_between p_ai_center u_row_padding8">
						<div class="l_head_logo"><a href="<?php echo esc_url( get_home_url() ); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
            </a>
          </div>
						<div class="l_head_login">
							<ul class="p_flex p_ai_center p_jc_around u_col_padding8">
								<li>
									<div class="l_head_login_msg">投資家の方<br>エージェントの方</div>
								</li>
								<li>
									<div class="p_bt p_yellow">
										<a href="<?php echo get_permalink( get_page_by_path('reg') ->ID ); ?>">
											新規登録
										</a>
									</div>
								</li>
								<li>
									<div class="p_bt p_green">
										<a href="<?php echo esc_url( get_category_link( get_cat_ID( 'ログイン' ))) ?>">
											ログイン
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="l_head_nav">
					<div class="p_inner1">
						<ul class="p_table p_row_center">
							<li>
								<a href="">
									未公開収益物件<br>
									仲介人とは
								</a>
							</li>
							<li class="l_claim l_orange">
                <a href="<?php echo esc_url( get_category_link( get_cat_ID( '新着エージェント' ))) ?>">
									新着<br>
									<span>エージェント</span>
								</a>
							</li>
							<li class="l_claim l_green">
                <a href="<?php echo esc_url( get_category_link( get_cat_ID( '未公開物件' ))) ?>">
									新着<br>
									<span>未公開物件</span>
								</a>
							</li>
							<li class="l_claim l_blue">
                <a href="<?php echo esc_url( get_category_link( get_cat_ID( '成功事例' ))) ?>">
									新着<br>
									<span>成功事例</span>
								</a>
							</li>
							<li>
                <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'ご利用ガイド' ))) ?>">
									ご利用ガイド
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
