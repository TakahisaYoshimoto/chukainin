<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage chukainin
 * @since chukainin 1.0
 */

get_header(); ?>
<div class="l_main l_sub">
	<div class="p_inner2 p_flex p_jc_between">

		<div class="l_content">

			<div class="p_breadcrumbs">
				<ul class="p_flex">
					<li><a href="./index.html">HOME</a></li>
					<li>新着エージェント一覧</li>
				</ul>
			</div>

			<div class="p_heading">
				<h2>新着のエージェント一覧</h2>
			</div>

			<div class="c_page_feed">
				<div class="p_flex p_jc_between p_ai_center">
					<div class="c_page_feed_num">64,414件</div>
					<div class="c_page_feed_list">
						<div class="p_flex">
							<div class="c_page_feed_dnum">
								表示数
								<select name="">
									<option value="1">20件表示</option>
									<option value="2">40件表示</option>
									<option value="3">60件表示</option>
								</select>
							</div>
							<div class="c_page_feed_select">
								<ul class="p_flex">
									<li><a href="">前へ</a></li>
									<li><a href="">1</a></li>
									<li>2</li>
									<li><a href="">3</a></li>
									<li><a href="">4</a></li>
									<li><a href="">5</a></li>
									<li><a href="">次へ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<form action="" method="post">

				<div class="c_all_check">
					<div class="p_flex p_jc_between p_ai_center">
						<div class="c_all_check_text">
							優良物件情報をGETするためには幅広い情報発信が有効です。一括オファーを使用して一人での多くのエージェントに情報発信する事をお薦め致します。
						</div>
						<div class="c_all_check_frame p_flex">
							<div class="c_all_check_frame_bt p_flex p_ai_center">
								<div class="c_all_check_frame_bt_txt">
									チェックをつけた<br>
									エージェントに
								</div>
								<input type="submit" name="" value="一括オファー">
							</div>
							<div class="c_all_check_check c_all_check_c_bottom">
								すべてに<br>
								チェック<br>
								<input type="checkbox" name="all" value="1">
							</div>
						</div>
					</div>
				</div>


				<div class="c_agent_list">
					<ul>

						<li>
							<div class="p_flex">
								<div class="c_agent_list_introduction">
									<div class="p_flex p_jc_between p_ai_center">
										<div class="c_agent_list_active">
											<ul class="p_flex">
												<li>活動エリア</li>
												<li>東京</li>
											</ul>
										</div>
										<div class="c_agent_list_regdt">登録日：2017/08/01</div>
									</div>
									<div class="c_agent_list_title">
										スペックだけでは語り尽くせない魅力を丁寧にお伝えし、「一点ものの住まいとの出…
									</div>
									<div class="c_agent_list_main p_flex">
										<div class="c_agent_list_thumb"><img src="./img/dummy/test.png"></div>
										<div class="c_agent_list_main_info">
											<div class="c_agent_list_main_name">
												<ul class="p_flex p_ai_center">
													<li>エージェント名</li>
													<li>山田　太郎</li>
												</ul>
											</div>
											<div class="c_agent_list_main_other">
												<dl class="p_flex p_ai_center">
													<dt><span>注力物件</span></dt>
													<dd>RC一棟, 一棟鉄骨, 一棟木造</dd>
													<dt>業界経験年数</dt>
													<dd>5年未満</dd>
													<dt>昨年取引件数</dt>
													<dd>～10件</dd>
												</dl>
											</div>
										</div>
									</div>
									<div class="c_agent_list_text_box p_flex p_jc_between">
										<div class="c_agent_list_text">
											テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります…
										</div>
										<div class="c_agent_list_text_detail">
											<div class="p_bt p_green p_shadow2">
												<a href="./agent_detail_prof.html">詳細</a>
											</div>
										</div>
									</div>
								</div>
								<div class="c_agent_list_check">
									<input type="checkbox" name="" value="">
								</div>
							</div>
						</li>

						<li>
							<div class="p_flex">
								<div class="c_agent_list_introduction">
									<div class="p_flex p_jc_between p_ai_center">
										<div class="c_agent_list_active">
											<ul class="p_flex">
												<li>活動エリア</li>
												<li>東京</li>
											</ul>
										</div>
										<div class="c_agent_list_regdt">登録日：2017/08/01</div>
									</div>
									<div class="c_agent_list_title">
										スペックだけでは語り尽くせない魅力を丁寧にお伝えし、「一点ものの住まいとの出…
									</div>
									<div class="c_agent_list_main p_flex">
										<div class="c_agent_list_thumb"><img src="./img/dummy/test.png"></div>
										<div class="c_agent_list_main_info">
											<div class="c_agent_list_main_name">
												<ul class="p_flex p_ai_center">
													<li>エージェント名</li>
													<li>山田　太郎</li>
												</ul>
											</div>
											<div class="c_agent_list_main_other">
												<dl class="p_flex p_ai_center">
													<dt><span>注力物件</span></dt>
													<dd>RC一棟, 一棟鉄骨, 一棟木造</dd>
													<dt>業界経験年数</dt>
													<dd>5年未満</dd>
													<dt>昨年取引件数</dt>
													<dd>～10件</dd>
												</dl>
											</div>
										</div>
									</div>
									<div class="c_agent_list_text_box p_flex p_jc_between">
										<div class="c_agent_list_text">
											テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります…
										</div>
										<div class="c_agent_list_text_detail">
											<div class="p_bt p_green p_shadow2">
												<a href="./agent_detail_prof.html">詳細</a>
											</div>
										</div>
									</div>
								</div>
								<div class="c_agent_list_check">
									<input type="checkbox" name="" value="">
								</div>
							</div>
						</li>

						<li>
							<div class="p_flex">
								<div class="c_agent_list_introduction">
									<div class="p_flex p_jc_between p_ai_center">
										<div class="c_agent_list_active">
											<ul class="p_flex">
												<li>活動エリア</li>
												<li>東京</li>
											</ul>
										</div>
										<div class="c_agent_list_regdt">登録日：2017/08/01</div>
									</div>
									<div class="c_agent_list_title">
										スペックだけでは語り尽くせない魅力を丁寧にお伝えし、「一点ものの住まいとの出…
									</div>
									<div class="c_agent_list_main p_flex">
										<div class="c_agent_list_thumb"><img src="./img/dummy/test.png"></div>
										<div class="c_agent_list_main_info">
											<div class="c_agent_list_main_name">
												<ul class="p_flex p_ai_center">
													<li>エージェント名</li>
													<li>山田　太郎</li>
												</ul>
											</div>
											<div class="c_agent_list_main_other">
												<dl class="p_flex p_ai_center">
													<dt><span>注力物件</span></dt>
													<dd>RC一棟, 一棟鉄骨, 一棟木造</dd>
													<dt>業界経験年数</dt>
													<dd>5年未満</dd>
													<dt>昨年取引件数</dt>
													<dd>～10件</dd>
												</dl>
											</div>
										</div>
									</div>
									<div class="c_agent_list_text_box p_flex p_jc_between">
										<div class="c_agent_list_text">
											テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります…
										</div>
										<div class="c_agent_list_text_detail">
											<div class="p_bt p_green p_shadow2">
												<a href="./agent_detail_prof.html">詳細</a>
											</div>
										</div>
									</div>
								</div>
								<div class="c_agent_list_check">
									<input type="checkbox" name="" value="">
								</div>
							</div>
						</li>

						<li>
							<div class="p_flex">
								<div class="c_agent_list_introduction">
									<div class="p_flex p_jc_between p_ai_center">
										<div class="c_agent_list_active">
											<ul class="p_flex">
												<li>活動エリア</li>
												<li>東京</li>
											</ul>
										</div>
										<div class="c_agent_list_regdt">登録日：2017/08/01</div>
									</div>
									<div class="c_agent_list_title">
										スペックだけでは語り尽くせない魅力を丁寧にお伝えし、「一点ものの住まいとの出…
									</div>
									<div class="c_agent_list_main p_flex">
										<div class="c_agent_list_thumb"><img src="./img/dummy/test.png"></div>
										<div class="c_agent_list_main_info">
											<div class="c_agent_list_main_name">
												<ul class="p_flex p_ai_center">
													<li>エージェント名</li>
													<li>山田　太郎</li>
												</ul>
											</div>
											<div class="c_agent_list_main_other">
												<dl class="p_flex p_ai_center">
													<dt><span>注力物件</span></dt>
													<dd>RC一棟, 一棟鉄骨, 一棟木造</dd>
													<dt>業界経験年数</dt>
													<dd>5年未満</dd>
													<dt>昨年取引件数</dt>
													<dd>～10件</dd>
												</dl>
											</div>
										</div>
									</div>
									<div class="c_agent_list_text_box p_flex p_jc_between">
										<div class="c_agent_list_text">
											テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります…
										</div>
										<div class="c_agent_list_text_detail">
											<div class="p_bt p_green p_shadow2">
												<a href="./agent_detail_prof.html">詳細</a>
											</div>
										</div>
									</div>
								</div>
								<div class="c_agent_list_check">
									<input type="checkbox" name="" value="">
								</div>
							</div>
						</li>

						<li>
							<div class="p_flex">
								<div class="c_agent_list_introduction">
									<div class="p_flex p_jc_between p_ai_center">
										<div class="c_agent_list_active">
											<ul class="p_flex">
												<li>活動エリア</li>
												<li>東京</li>
											</ul>
										</div>
										<div class="c_agent_list_regdt">登録日：2017/08/01</div>
									</div>
									<div class="c_agent_list_title">
										スペックだけでは語り尽くせない魅力を丁寧にお伝えし、「一点ものの住まいとの出…
									</div>
									<div class="c_agent_list_main p_flex">
										<div class="c_agent_list_thumb"><img src="./img/dummy/test.png"></div>
										<div class="c_agent_list_main_info">
											<div class="c_agent_list_main_name">
												<ul class="p_flex p_ai_center">
													<li>エージェント名</li>
													<li>山田　太郎</li>
												</ul>
											</div>
											<div class="c_agent_list_main_other">
												<dl class="p_flex p_ai_center">
													<dt><span>注力物件</span></dt>
													<dd>RC一棟, 一棟鉄骨, 一棟木造</dd>
													<dt>業界経験年数</dt>
													<dd>5年未満</dd>
													<dt>昨年取引件数</dt>
													<dd>～10件</dd>
												</dl>
											</div>
										</div>
									</div>
									<div class="c_agent_list_text_box p_flex p_jc_between">
										<div class="c_agent_list_text">
											テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります…
										</div>
										<div class="c_agent_list_text_detail">
											<div class="p_bt p_green p_shadow2">
												<a href="./agent_detail_prof.html">詳細</a>
											</div>
										</div>
									</div>
								</div>
								<div class="c_agent_list_check">
									<input type="checkbox" name="" value="">
								</div>
							</div>
						</li>

						<li>
							<div class="p_flex">
								<div class="c_agent_list_introduction">
									<div class="p_flex p_jc_between p_ai_center">
										<div class="c_agent_list_active">
											<ul class="p_flex">
												<li>活動エリア</li>
												<li>東京</li>
											</ul>
										</div>
										<div class="c_agent_list_regdt">登録日：2017/08/01</div>
									</div>
									<div class="c_agent_list_title">
										スペックだけでは語り尽くせない魅力を丁寧にお伝えし、「一点ものの住まいとの出…
									</div>
									<div class="c_agent_list_main p_flex">
										<div class="c_agent_list_thumb"><img src="./img/dummy/test.png"></div>
										<div class="c_agent_list_main_info">
											<div class="c_agent_list_main_name">
												<ul class="p_flex p_ai_center">
													<li>エージェント名</li>
													<li>山田　太郎</li>
												</ul>
											</div>
											<div class="c_agent_list_main_other">
												<dl class="p_flex p_ai_center">
													<dt><span>注力物件</span></dt>
													<dd>RC一棟, 一棟鉄骨, 一棟木造</dd>
													<dt>業界経験年数</dt>
													<dd>5年未満</dd>
													<dt>昨年取引件数</dt>
													<dd>～10件</dd>
												</dl>
											</div>
										</div>
									</div>
									<div class="c_agent_list_text_box p_flex p_jc_between">
										<div class="c_agent_list_text">
											テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります…
										</div>
										<div class="c_agent_list_text_detail">
											<div class="p_bt p_green p_shadow2">
												<a href="./agent_detail_prof.html">詳細</a>
											</div>
										</div>
									</div>
								</div>
								<div class="c_agent_list_check">
									<input type="checkbox" name="" value="">
								</div>
							</div>
						</li>

						<li>
							<div class="p_flex">
								<div class="c_agent_list_introduction">
									<div class="p_flex p_jc_between p_ai_center">
										<div class="c_agent_list_active">
											<ul class="p_flex">
												<li>活動エリア</li>
												<li>東京</li>
											</ul>
										</div>
										<div class="c_agent_list_regdt">登録日：2017/08/01</div>
									</div>
									<div class="c_agent_list_title">
										スペックだけでは語り尽くせない魅力を丁寧にお伝えし、「一点ものの住まいとの出…
									</div>
									<div class="c_agent_list_main p_flex">
										<div class="c_agent_list_thumb"><img src="./img/dummy/test.png"></div>
										<div class="c_agent_list_main_info">
											<div class="c_agent_list_main_name">
												<ul class="p_flex p_ai_center">
													<li>エージェント名</li>
													<li>山田　太郎</li>
												</ul>
											</div>
											<div class="c_agent_list_main_other">
												<dl class="p_flex p_ai_center">
													<dt><span>注力物件</span></dt>
													<dd>RC一棟, 一棟鉄骨, 一棟木造</dd>
													<dt>業界経験年数</dt>
													<dd>5年未満</dd>
													<dt>昨年取引件数</dt>
													<dd>～10件</dd>
												</dl>
											</div>
										</div>
									</div>
									<div class="c_agent_list_text_box p_flex p_jc_between">
										<div class="c_agent_list_text">
											テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります…
										</div>
										<div class="c_agent_list_text_detail">
											<div class="p_bt p_green p_shadow2">
												<a href="./agent_detail_prof.html">詳細</a>
											</div>
										</div>
									</div>
								</div>
								<div class="c_agent_list_check">
									<input type="checkbox" name="" value="">
								</div>
							</div>
						</li>

						<li>
							<div class="p_flex">
								<div class="c_agent_list_introduction">
									<div class="p_flex p_jc_between p_ai_center">
										<div class="c_agent_list_active">
											<ul class="p_flex">
												<li>活動エリア</li>
												<li>東京</li>
											</ul>
										</div>
										<div class="c_agent_list_regdt">登録日：2017/08/01</div>
									</div>
									<div class="c_agent_list_title">
										スペックだけでは語り尽くせない魅力を丁寧にお伝えし、「一点ものの住まいとの出…
									</div>
									<div class="c_agent_list_main p_flex">
										<div class="c_agent_list_thumb"><img src="./img/dummy/test.png"></div>
										<div class="c_agent_list_main_info">
											<div class="c_agent_list_main_name">
												<ul class="p_flex p_ai_center">
													<li>エージェント名</li>
													<li>山田　太郎</li>
												</ul>
											</div>
											<div class="c_agent_list_main_other">
												<dl class="p_flex p_ai_center">
													<dt><span>注力物件</span></dt>
													<dd>RC一棟, 一棟鉄骨, 一棟木造</dd>
													<dt>業界経験年数</dt>
													<dd>5年未満</dd>
													<dt>昨年取引件数</dt>
													<dd>～10件</dd>
												</dl>
											</div>
										</div>
									</div>
									<div class="c_agent_list_text_box p_flex p_jc_between">
										<div class="c_agent_list_text">
											テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります…
										</div>
										<div class="c_agent_list_text_detail">
											<div class="p_bt p_green p_shadow2">
												<a href="./agent_detail_prof.html">詳細</a>
											</div>
										</div>
									</div>
								</div>
								<div class="c_agent_list_check">
									<input type="checkbox" name="" value="">
								</div>
							</div>
						</li>

						<li>
							<div class="p_flex">
								<div class="c_agent_list_introduction">
									<div class="p_flex p_jc_between p_ai_center">
										<div class="c_agent_list_active">
											<ul class="p_flex">
												<li>活動エリア</li>
												<li>東京</li>
											</ul>
										</div>
										<div class="c_agent_list_regdt">登録日：2017/08/01</div>
									</div>
									<div class="c_agent_list_title">
										スペックだけでは語り尽くせない魅力を丁寧にお伝えし、「一点ものの住まいとの出…
									</div>
									<div class="c_agent_list_main p_flex">
										<div class="c_agent_list_thumb"><img src="./img/dummy/test.png"></div>
										<div class="c_agent_list_main_info">
											<div class="c_agent_list_main_name">
												<ul class="p_flex p_ai_center">
													<li>エージェント名</li>
													<li>山田　太郎</li>
												</ul>
											</div>
											<div class="c_agent_list_main_other">
												<dl class="p_flex p_ai_center">
													<dt><span>注力物件</span></dt>
													<dd>RC一棟, 一棟鉄骨, 一棟木造</dd>
													<dt>業界経験年数</dt>
													<dd>5年未満</dd>
													<dt>昨年取引件数</dt>
													<dd>～10件</dd>
												</dl>
											</div>
										</div>
									</div>
									<div class="c_agent_list_text_box p_flex p_jc_between">
										<div class="c_agent_list_text">
											テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります…
										</div>
										<div class="c_agent_list_text_detail">
											<div class="p_bt p_green p_shadow2">
												<a href="./agent_detail_prof.html">詳細</a>
											</div>
										</div>
									</div>
								</div>
								<div class="c_agent_list_check">
									<input type="checkbox" name="" value="">
								</div>
							</div>
						</li>

						<li>
							<div class="p_flex">
								<div class="c_agent_list_introduction">
									<div class="p_flex p_jc_between p_ai_center">
										<div class="c_agent_list_active">
											<ul class="p_flex">
												<li>活動エリア</li>
												<li>東京</li>
											</ul>
										</div>
										<div class="c_agent_list_regdt">登録日：2017/08/01</div>
									</div>
									<div class="c_agent_list_title">
										スペックだけでは語り尽くせない魅力を丁寧にお伝えし、「一点ものの住まいとの出…
									</div>
									<div class="c_agent_list_main p_flex">
										<div class="c_agent_list_thumb"><img src="./img/dummy/test.png"></div>
										<div class="c_agent_list_main_info">
											<div class="c_agent_list_main_name">
												<ul class="p_flex p_ai_center">
													<li>エージェント名</li>
													<li>山田　太郎</li>
												</ul>
											</div>
											<div class="c_agent_list_main_other">
												<dl class="p_flex p_ai_center">
													<dt><span>注力物件</span></dt>
													<dd>RC一棟, 一棟鉄骨, 一棟木造</dd>
													<dt>業界経験年数</dt>
													<dd>5年未満</dd>
													<dt>昨年取引件数</dt>
													<dd>～10件</dd>
												</dl>
											</div>
										</div>
									</div>
									<div class="c_agent_list_text_box p_flex p_jc_between">
										<div class="c_agent_list_text">
											テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります…
										</div>
										<div class="c_agent_list_text_detail">
											<div class="p_bt p_green p_shadow2">
												<a href="./agent_detail_prof.html">詳細</a>
											</div>
										</div>
									</div>
								</div>
								<div class="c_agent_list_check">
									<input type="checkbox" name="" value="">
								</div>
							</div>
						</li>

						<li>
							<div class="p_flex">
								<div class="c_agent_list_introduction">
									<div class="p_flex p_jc_between p_ai_center">
										<div class="c_agent_list_active">
											<ul class="p_flex">
												<li>活動エリア</li>
												<li>東京</li>
											</ul>
										</div>
										<div class="c_agent_list_regdt">登録日：2017/08/01</div>
									</div>
									<div class="c_agent_list_title">
										スペックだけでは語り尽くせない魅力を丁寧にお伝えし、「一点ものの住まいとの出…
									</div>
									<div class="c_agent_list_main p_flex">
										<div class="c_agent_list_thumb"><img src="./img/dummy/test.png"></div>
										<div class="c_agent_list_main_info">
											<div class="c_agent_list_main_name">
												<ul class="p_flex p_ai_center">
													<li>エージェント名</li>
													<li>山田　太郎</li>
												</ul>
											</div>
											<div class="c_agent_list_main_other">
												<dl class="p_flex p_ai_center">
													<dt><span>注力物件</span></dt>
													<dd>RC一棟, 一棟鉄骨, 一棟木造</dd>
													<dt>業界経験年数</dt>
													<dd>5年未満</dd>
													<dt>昨年取引件数</dt>
													<dd>～10件</dd>
												</dl>
											</div>
										</div>
									</div>
									<div class="c_agent_list_text_box p_flex p_jc_between">
										<div class="c_agent_list_text">
											テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります…
										</div>
										<div class="c_agent_list_text_detail">
											<div class="p_bt p_green p_shadow2">
												<a href="./agent_detail_prof.html">詳細</a>
											</div>
										</div>
									</div>
								</div>
								<div class="c_agent_list_check">
									<input type="checkbox" name="" value="">
								</div>
							</div>
						</li>

					</ul>
				</div>


				<div class="c_all_check">
					<div class="p_flex p_jc_between p_ai_center">
						<div class="c_all_check_text">
							優良物件情報をGETするためには幅広い情報発信が有効です。一括オファーを使用して一人での多くのエージェントに情報発信する事をお薦め致します。
						</div>
						<div class="c_all_check_frame p_flex">
							<div class="c_all_check_frame_bt p_flex p_ai_center">
								<div class="c_all_check_frame_bt_txt">
									チェックをつけた<br>
									エージェントに
								</div>
								<input type="submit" name="" value="一括オファー">
							</div>
							<div class="c_all_check_check c_all_check_c_top">
								すべてに<br>
								チェック<br>
								<input type="checkbox" name="all" value="1">
							</div>
						</div>
					</div>
				</div>

			</form>

			<div class="c_page_feed">
				<div class="p_flex p_jc_between p_ai_center">
					<div class="c_page_feed_num">64,414件</div>
					<div class="c_page_feed_list">
						<div class="p_flex">
							<div class="c_page_feed_dnum">
								表示数
								<select name="">
									<option value="1">20件表示</option>
									<option value="2">40件表示</option>
									<option value="3">60件表示</option>
								</select>
							</div>
							<div class="c_page_feed_select">
								<ul class="p_flex">
									<li><a href="">前へ</a></li>
									<li><a href="">1</a></li>
									<li>2</li>
									<li><a href="">3</a></li>
									<li><a href="">4</a></li>
									<li><a href="">5</a></li>
									<li><a href="">次へ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<?php get_sidebar(); ?>
	</div>
</div>

<div class="l_footer">
	<div class="p_inner2">
		<div class="p_flex">
			<div class="l_footer_search_area">
				<div class="l_footer_search_title"><img src="./img/icon_search_w_s.png">地域から探す</div>
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
				<div class="l_footer_search_title"><img src="./img/icon_search_w_s.png">物件種別からさがす</div>
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
<?php get_footer(); ?>
</div>
</div>
<script type="text/javascript" charset="UTF-8" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" charset="UTF-8" src="js/contents.js"></script>
</body>
</html>
