<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=0.5,user-scalable=yes,initial_scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" type="text/css" media="all">
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
										<a href="./reg.html">
											新規登録
										</a>
									</div>
								</li>
								<li>
									<div class="p_bt p_green">
										<a href="./login.html">
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
								<a href="<?php echo get_template_directory_uri(); ?>/list_agent.php">
									新着<br>
									<span>エージェント</span>
								</a>
							</li>
							<li class="l_claim l_green">
								<a href="./list_property.html">
									新着<br>
									<span>未公開物件</span>
								</a>
							</li>
							<li class="l_claim l_blue">
								<a href="./list_success.html">
									新着<br>
									<span>成功事例</span>
								</a>
							</li>
							<li>
								<a href="./guide.html">
									ご利用ガイド
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
