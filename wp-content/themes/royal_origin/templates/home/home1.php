<head>
  <title>Your site's title should be here</title>
  <meta charset="UTF-8">
  <meta name="description" content="Your site's description should be here">
  <meta name="keywords" content="Your site's keywords should be here">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/css/reset.css">
  <link rel="stylesheet" href="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/css/style-top.css">
   
  <!--[if IE 6]>
	<style type="text/css">
		* html .group {
			height: 1%;
		}
	</style>
  <![endif]--> 
  <!--[if IE 7]>
	<style type="text/css">
		*:first-child+html .group {
			min-height: 1px;
		}
	</style>
  <![endif]--> 
  <!--[if lt IE 9]> 
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
  <![endif]--> 
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Allura:regular&amp;subset=latin,latin-ext">
 </head>
 <body>
  <div class="design_top">
   <div class="wrapper-63">
    <div class="parts01">
     <div class="header">
      <div class="h1">
       <div>
        <p>不動産へ投資をしたい投資家と全国の不動産エージェントをつなぐマッチングサービス「未公開収益物件仲介人」</p>
       </div>
      </div>
      <div class="parts02">
       <div class="parts03 group">
        <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/logo.png" alt="" width="281" height="67">
        <div class="group">
         <div class="ttl">
          <p class="text-2">投資家の方</p>
          <p class="text-3">エージェントの方</p>
         </div>
         <?php if( osc_is_web_user_logged_in() ) { ?>
         <div class="btn_reg">
          <a href="<?php echo osc_user_dashboard_url(); ?>">自分のアカウント</a>
         </div>
         <div class="btn_login">
          <a href="<?php echo osc_user_logout_url(); ?>">ログアウト</a>
         </div>
         <?php } else { ?>
          <?php if(osc_user_registration_enabled()) { ?>
         <div class="btn_reg">
          <a href="<?php echo osc_register_account_url(); ?>">新規登録</a>
         </div>
          <?php }; ?>
         <div class="btn_login">
          <a href="<?php echo osc_user_login_url(); ?>">ログイン</a>
         </div>
        <?php } ?>
        </div>
       </div>
       <div class="border"></div>
      </div>
     </div>
     <div class="nav">
      <div class="parts04">
       <div class="parts05 group">
        <div class="list_1 group">
         <div></div>
         <p>未公開収益物件<br>仲介人とは</p>
         <div class="border-3"></div>
        </div>
        <div class="list_5 group">
         <div></div>
         <p>ご利用ガイド</p>
         <div></div>
        </div>
       </div>
       <div class="border-6"></div>
      </div>
      <div class="list_4">
       <div class="parts06"></div>
       <div class="parts07">
        <p class="text-8">新着</p>
        <p class="text-9">成功事例</p>
       </div>
      </div>
      <div class="list_3">
       <div class="parts06"></div>
       <div class="parts08">
        <p class="text-10">新着</p>
        <p class="text-11">未公開物件</p>
       </div>
      </div>
      <div class="list_2">
       <div class="parts06"></div>
       <div class="parts09">
        <p class="text-12">新着</p>
        <p class="text-13">エージェント</p>
       </div>
      </div>
     </div>
     <div class="section_top">
      <div class="wrapper-9">
       <div>
        <img class="top_main_image_01" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/top_main_image_01.png" alt="" width="194" height="314">
        <div class="top_main_image_05-holder">
         <div class="group">
          <p>優良物件は市場公開されずそのほとんどが未公開物件のまま売買されていると言われております。<br>本サイトには収益物件売買に特化したエージェントが多数登録されております。<br>購入条件に該当するエージェントに事前紹介オファー依頼を出し未公開物件情報を獲得致しましょう。</p>
          <div>
           <div class="parts10"></div>
           <div class="parts11">
            まずは登録
           </div>
          </div>
         </div>
        </div>
        <img class="top_main_image_04" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/top_main_image_04.png" alt="" width="194" height="314">
        <div class="btn_next">
         <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/7_4.png" alt="" width="10" height="18">
        </div>
        <div class="btn_prev">
         <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/7_5.png" alt="" width="10" height="18">
        </div>
       </div>
       <div>
        <img class="top_main_image_04" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/top_main_image_05_3.png" alt="" width="194" height="314">
        <img class="top_main_image_01" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/top_main_image_02_3.png" alt="" width="194" height="314">
        <div class="top_main_image_01-holder">
         <div class="group">
          <p>優良物件は市場公開されずそのほとんどが未公開物件のまま売買されていると言われております。<br>本サイトには収益物件売買に特化したエージェントが多数登録されております。<br>購入条件に該当するエージェントに事前紹介オファー依頼を出し未公開物件情報を獲得致しましょう。</p>
          <div>
           <div class="parts10"></div>
           <div class="parts11">
            まずは登録
           </div>
          </div>
         </div>
        </div>
        <div class="btn_next">
         <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/7_4.png" alt="" width="10" height="18">
        </div>
        <div class="btn_prev">
         <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/7_5.png" alt="" width="10" height="18">
        </div>
       </div>
      </div>
      <div class="detail">
       <div class="parts12">
        <div>
         <p>▼　詳細はこちら　▼</p>
        </div>
       </div>
       <div class="parts13 group">
        <div class="parts14">
         <a href="#">投資家の方へ</a>
        </div>
        <div class="parts15">
         <a href="#">エージェントの方へ</a>
        </div>
       </div>
      </div>
     </div>
     <div class="section_new_content">
      <div class="h2 group">
       <div></div>
       <p class="text-21">新着情報</p>
       <p class="news">NEWS</p>
      </div>
      <div class="wrapper-8">
       <div class="parts16">
        <div class="border-7"></div>
        <div class="more">
         <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/7_3.png" alt="" width="14" height="28">
        </div>
       </div>
       <div class="tab1 group">
        <div class="parts17">
         <div class="tab">
          <div>
           新着エージェント
          </div>
         </div>
         <div class="parts18"></div>
         <div class="list_1-2">
          <p class="text-23">スペックだけでは語り…</p>
          <div class="border-8"></div>
          <p class="text-24">活動エリア：東京都</p>
          <div class="border-9"></div>
          <div class="badge">
           注力物件
          </div>
          <p class="text-26">区分太陽光発電</p>
          <div class="border-9"></div>
          <p class="text-27">俗に言うボロ物件を主に取り<br>扱っておりますマニアには向<br>き、セカンドオピニオンもお<br>気軽にお申し付け下さい。俗<br>に言うボロ物件を主に取り扱<br>っておりますマニアには向き<br>、セカンドオピニオンもお…</p>
          <div class="border-9"></div>
          <div class="parts19">
           <div class="parts20"></div>
           <div class="parts21">
            詳細を見る
           </div>
          </div>
         </div>
        </div>
        <div class="parts17">
         <div class="tab2">
          <div>
           新着未公開物件
          </div>
         </div>
         <div class="list_2-2">
          <p class="text-23">スペックだけでは語り…</p>
          <div class="border-8"></div>
          <p class="text-24">活動エリア：東京都</p>
          <div class="border-9"></div>
          <div class="badge">
           注力物件
          </div>
          <p class="text-26">区分太陽光発電</p>
          <div class="border-9"></div>
          <p class="text-34">俗に言うボロ物件を主に取り<br>扱っておりますマニアには向<br>き、セカンドオピニオンもお<br>気軽にお申し付け下さい。俗<br>に言うボロ物件を主に取り扱<br>っておりますマニアには向き<br>、セカンドオピニオンもお…</p>
          <div class="border-9"></div>
          <div class="parts22">
           <div class="parts20"></div>
           <div class="parts21">
            詳細を見る
           </div>
          </div>
         </div>
        </div>
        <div class="parts23">
         <div>
          <div class="parts24">
           新着成功事例
          </div>
         </div>
         <div class="list_3-2">
          <p class="text-23">スペックだけでは語り…</p>
          <div class="border-8"></div>
          <p class="text-24">活動エリア：東京都</p>
          <div class="border-9"></div>
          <div class="badge">
           注力物件
          </div>
          <p class="text-26">区分太陽光発電</p>
          <div class="border-9"></div>
          <p class="text-41">俗に言うボロ物件を主に取り<br>扱っておりますマニアには向<br>き、セカンドオピニオンもお<br>気軽にお申し付け下さい。俗<br>に言うボロ物件を主に取り扱<br>っておりますマニアには向き<br>、セカンドオピニオンもお…</p>
          <div class="border-9"></div>
          <div class="parts25">
           <div class="parts20"></div>
           <div class="parts21">
            詳細を見る
           </div>
          </div>
         </div>
        </div>
        <div class="list_4-2">
         <p class="text-23">スペックだけでは語り…</p>
         <div class="border-8"></div>
         <p class="text-24">活動エリア：東京都</p>
         <div class="border-9"></div>
         <div class="badge">
          注力物件
         </div>
         <p class="text-26">区分太陽光発電</p>
         <div class="border-9"></div>
         <p class="text-47">俗に言うボロ物件を主に取り<br>扱っておりますマニアには向<br>き、セカンドオピニオンもお<br>気軽にお申し付け下さい。俗<br>に言うボロ物件を主に取り扱<br>っておりますマニアには向き<br>、セカンドオピニオンもお…</p>
         <div class="border-9"></div>
         <div class="parts26">
          <div class="parts20"></div>
          <div class="parts21">
           詳細を見る
          </div>
         </div>
        </div>
        <div class="list_5-2">
         <p class="text-23">スペックだけでは語り…</p>
         <div class="border-8"></div>
         <p class="text-24">活動エリア：東京都</p>
         <div class="border-9"></div>
         <div class="badge">
          注力物件
         </div>
         <p class="text-26">区分太陽光発電</p>
         <div class="border-9"></div>
         <p class="text-53">俗に言うボロ物件を主に取り<br>扱っておりますマニアには向<br>き、セカンドオピニオンもお<br>気軽にお申し付け下さい。俗<br>に言うボロ物件を主に取り扱<br>っておりますマニアには向き<br>、セカンドオピニオンもお…</p>
         <div class="border-9"></div>
         <div class="parts27">
          <div class="parts20"></div>
          <div class="parts21">
           詳細を見る
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="parts28 group">
      <div class="parts29">
       <div>
        <div class="h2-2 group">
         <div></div>
         <p class="text-55">エージェントを探す</p>
         <p class="search">SEARCH</p>
        </div>
        <div class="parts30 group">
         <div class="left">
          <div class="ttl-2">
           <div>
            <p>地域から探す</p>
           </div>
          </div>
          <div class="parts31">
           <div class="select">
            <p>都道府県</p>
            <div class="group">
             <p>全国</p>
             <div>
              <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/11.png" alt="" width="12" height="8">
             </div>
            </div>
           </div>
           <div class="map group">
            <div class="parts32">
             <div class="parts33">
              沖縄
             </div>
             <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/856.png" alt="" width="109" height="20">
             <div class="parts34 group">
              <div class="parts35">
               九州
              </div>
              <div class="parts36">
               <div class="parts37">
                <div>
                 <p>中国</p>
                </div>
               </div>
               <div class="parts38">
                四国
               </div>
              </div>
              <div class="parts39">
               関西
              </div>
             </div>
            </div>
            <div class="parts40 group">
             <div class="parts41">
              <div>
               <p>北陸</p>
              </div>
             </div>
             <div class="parts42">
              <div>
               <p>中部</p>
              </div>
             </div>
            </div>
            <div class="parts43">
             <div class="parts44">
              <div>
               <p>北海道</p>
              </div>
             </div>
             <div class="parts45">
              <div>
               <p>東北</p>
              </div>
             </div>
             <div class="parts46">
              <div>
               <p>関東</p>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
         <div class="parts47">
          <div>
           <div class="ttl-3">
            <div>
             <p>物件種別から探す</p>
            </div>
           </div>
           <div class="parts48">
            <div>
             <p class="text-70">区分太陽光発電</p>
             <div class="checkbox"></div>
             <p class="text-71">太陽光発電用地</p>
             <div class="border-23"></div>
             <div class="checkbox-2"></div>
             <p class="text-72">工場</p>
             <div class="checkbox-3"></div>
             <div class="border-24"></div>
             <p class="text-73">倉庫</p>
             <div class="checkbox-4"></div>
             <p class="text-74">区分店舗</p>
             <div class="checkbox-5"></div>
             <div class="border-25"></div>
             <p class="text-75">区分事務所</p>
             <div class="checkbox-6"></div>
             <p class="text-76">ホテル</p>
             <div class="checkbox-7"></div>
             <div class="border-26"></div>
             <p class="text-77">駐車場</p>
             <div class="checkbox-8"></div>
             <p class="text-78">土地</p>
             <div class="checkbox-9"></div>
             <div class="border-27"></div>
             <p class="text-79">区分マンション</p>
             <div class="checkbox-10"></div>
             <p class="text-80">戸建賃貸</p>
             <div class="checkbox-11"></div>
             <div class="border-28"></div>
             <p class="text-81">商業ビル</p>
             <div class="checkbox-12"></div>
             <p class="text-82">一棟木造</p>
             <div class="checkbox-13"></div>
             <div class="border-29"></div>
             <p class="text-83">一棟鉄骨</p>
             <div class="checkbox-14"></div>
             <p class="text-84">一棟RC</p>
             <div class="checkbox-15"></div>
             <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/border_20.png" alt="" width="1" height="256">
            </div>
           </div>
          </div>
          <div class="right_bottom">
           <div class="ttl-4">
            <div>
             <p>掲載期間から探す</p>
            </div>
           </div>
           <div class="parts49">
            <div>
             <div class="parts50 group">
              <div>
               <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/checked.png" alt="" width="10" height="9">
              </div>
              <p>指定なし</p>
             </div>
             <p class="text-82">30日以内</p>
             <div class="checkbox-13"></div>
             <div class="border-29"></div>
             <p class="text-88">14日以内</p>
             <div class="checkbox-14"></div>
             <p class="text-84">7日以内</p>
             <div class="checkbox-15"></div>
             <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/border_12.png" alt="" width="1" height="64">
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="btn">
         <div class="parts51"></div>
         <div class="parts52 group">
          <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/icon_search.png" alt="" width="24" height="24">
          <p>この条件で探す</p>
         </div>
        </div>
       </div>
       <div class="section_flow1">
        <p class="text-91">不動産業者の物件公開までの流れ</p>
        <p class="text-92">不動産業者、またはエージェントは売却希望のお客様から物件の売却のご依頼を頂きますとまず、<br>ほとんどの場合は査定書を作成して売却希望のお客様と面談を重ね合意に至れば媒介契約書を作成して<br>売却依頼をお受け致します。<br>お預かりした物件がどのような経緯を辿り物件が公開されるかと申しますと<br>次のような経緯を経て物件公開されます。<br><span>&nbsp;</span><br>１物件を受託したエージェントの懇意にしている投資家に紹介する<br>２所属会社及び所属会社の他のエージェントが懇意にしている投資家に紹介する<br>３大手ポータルサイトへ物件掲載する<br>４所属会社のホームページへ物件公開する<br>５新聞広告、折込チラシへ物件情報を掲載する<br>６レインズに物件公開して他社に情報公開する<br><span>&nbsp;</span><br>上記しました流れが一般的な物件公開までの経緯です。<br><span>&nbsp;</span><br>優良収益物件と言われる物件は1もしくは２の段階でほとんどが成約に<br>なってしまい市場へはほとんど公開されていないのが現状です。<br><span>&nbsp;</span><br>本サイトをご利用なさり優良物件情報を獲得致しましょう。</p>
        <div>
         <img class="parts53" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1086.png" alt="" width="11" height="27">
         <div>
          <p>物件公開前に<br>情報<span>を</span>GET‼</p>
         </div>
         <img class="parts54" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/6bf862a00462fac02aa702c8a.png" alt="" width="211" height="215">
        </div>
       </div>
      </div>
      <div class="parts55">
       <div class="image_side_banner1">
        <div class="parts56">
         <div>
          <div class="group">
           <img class="parts57" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_204.png" alt="" width="34" height="26">
           <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_203.png" alt="投資家様へ" width="187" height="35" title="投資家様へ">
          </div>
          <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_202.png" alt="早く・簡単に・効率よく人脈をつくる" width="231" height="17" title="早く・簡単に・効率よく人脈をつくる">
         </div>
        </div>
        <div class="parts58 group">
         <div class="parts59">
          CHECK
         </div>
         <div class="parts60 group">
          <p>未公開収益物件仲介人とは</p>
          <div>
           <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1032_2.png" alt="" width="5" height="6">
          </div>
         </div>
        </div>
       </div>
       <div class="image_side_banner2">
        <div class="parts61">
         <p>未公開収益物件仲介人とは</p>
         <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_194.png" alt="エージェント様へ" width="225" height="29" title="エージェント様へ">
        </div>
        <div class="parts62">
         <div class="parts63">
          <div class="group">
           <div class="parts64">
            <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/a.png" alt="A" width="16" height="13" title="A">
           </div>
           <div class="parts65">
            <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_197.png" alt="エージェント様へ" width="204" height="27" title="エージェント様へ">
            <img class="text-100" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/5.png" alt="5つのメリットをご紹介！" width="163" height="17" title="5つのメリットをご紹介！">
           </div>
          </div>
         </div>
         <div class="parts66 group">
          <div class="parts67">
           CHECK
          </div>
          <div class="parts60 group">
           <p>未公開収益物件仲介人とは</p>
           <div>
            <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1032_2.png" alt="" width="5" height="6">
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="side_reg">
        <div class="ttl-5">
         <div>
          <p>新規登録</p>
         </div>
        </div>
        <div class="bg-holder">
         <div>
          <div class="ttl-6">
           <div class="parts68">
            <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1056_2.png" alt="" width="29" height="2">
            <div>
             <img class="parts69" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1056_3.png" alt="" width="47" height="2">
             <img class="parts70" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1056.png" alt="" width="19" height="10">
            </div>
           </div>
           <div class="parts71">
            <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1056_2_2.png" alt="" width="29" height="2">
            <div>
             <img class="parts72" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1056_3_2.png" alt="" width="47" height="2">
             <img class="parts73" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1056_4.png" alt="" width="19" height="10">
            </div>
           </div>
           <div class="parts74">
            <div></div>
            <p>新規登録3つのメリット</p>
            <div class="parts75"></div>
           </div>
          </div>
          <div class="merit1">
           <div></div>
           <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_191.png" alt="すべての非公開項目が ご覧いただけます。" width="116" height="31" title="すべての非公開項目が ご覧いただけます。">
          </div>
          <div class="merit2">
           <img class="parts76" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1072_2.png" alt="" width="69" height="3">
           <img class="parts77" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1072.png" alt="" width="127" height="3">
           <img class="text-106" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_190.png" alt="収益物件売買に特化した エージェントと簡単に 繋がります。" width="127" height="49" title="収益物件売買に特化した エージェントと簡単に 繋がります。">
          </div>
          <div class="merit3">
           <img class="parts77" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1072_3.png" alt="" width="83" height="3">
           <img class="text-106" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_189.png" alt="全国の投資家様と簡単に 繋がります。" width="127" height="31" title="全国の投資家様と簡単に 繋がります。">
          </div>
          <div class="submit">
           <div class="parts78"></div>
           <div class="parts79">
            <p class="text-108">無料で新規登録</p>
            <p class="text-109">たった30秒で完了‼</p>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="image_side_banner3 group">
        <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1.png" alt="" width="26" height="42">
        <div>
         <p class="text-110">はじめての方へ</p>
         <p class="text-111">ご利用ガイド</p>
        </div>
       </div>
       <div class="side_login group">
        <div class="ttl-7">
         <div>
          <p>ログイン</p>
         </div>
        </div>
        <div class="parts80">
         <div class="input">
          メールアドレス
         </div>
         <div class="input-2">
          パスワード
         </div>
         <div class="submit-2">
          <div class="parts81"></div>
          <div class="parts82">
           ログイン
          </div>
         </div>
        </div>
       </div>
       <div class="iamge_side_second_opinion">
        <div class="parts83">
         <div class="parts84">
          他のエージェントにも
          <br>物件調査を依頼‼
         </div>
         <div class="btn-2 group">
          <p>詳細を見る</p>
          <div>
           <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1032_2.png" alt="" width="5" height="6">
          </div>
         </div>
        </div>
        <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/112857_2.png" alt="" width="71" height="181">
        <div class="parts85">
         <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_181.png" alt="セカンドオピニオン" width="246" height="30" title="セカンドオピニオン">
         <div></div>
         <img class="text-119" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_180.png" alt="サービス" width="111" height="29" title="サービス">
        </div>
       </div>
       <div class="iamge_side_agent">
        <div class="group">
         <div></div>
         <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/new.png" alt="NEW" width="48" height="30" title="NEW">
        </div>
        <p>エージェント<br>のご紹介</p>
       </div>
      </div>
     </div>
    </div>
    <div class="side_search group">
     <div class="parts86 group">
      <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_116.png" alt="" width="20" height="20">
      <p>地域からさがす</p>
     </div>
     <div class="parts87 group">
      <div class="parts88">
       <p>北海道</p>
       <p class="text-123">東北</p>
       <p class="text-124">関東</p>
       <p class="text-125">北陸</p>
       <p class="text-126">中部</p>
       <p class="text-127">関西</p>
       <p class="text-125">中国</p>
       <p class="text-129">四国</p>
       <p class="text-130">九州</p>
       <p class="text-129">沖縄</p>
      </div>
      <div class="parts89 group">
       <div class="parts90">
        <p><a href="#">北海道</a></p>
        <p class="text-133"><a href="#">青森</a></p>
        <p class="text-109"><a href="#">山形</a></p>
        <p class="text-130"><a href="#">茨城</a></p>
        <p class="text-109"><a href="#">千葉</a></p>
        <p class="text-109"><a href="#">新潟</a></p>
        <p class="text-109"><a href="#">山梨</a></p>
        <p class="text-109"><a href="#">愛知</a></p>
        <p class="text-133"><a href="#">滋賀</a></p>
        <p class="text-109"><a href="#">奈良</a></p>
        <p class="text-109"><a href="#">鳥取</a></p>
        <p class="text-109"><a href="#">山口</a></p>
        <p class="text-109"><a href="#">徳島</a></p>
        <p class="text-109"><a href="#">福岡</a></p>
        <p class="text-109"><a href="#">大分</a></p>
        <p class="text-109"><a href="#">沖縄県</a></p>
       </div>
       <div class="parts91">
        <p><a href="#">岩手</a></p>
        <p class="text-109"><a href="#">福島</a></p>
        <p class="text-130"><a href="#">栃木</a></p>
        <p class="text-109"><a href="#">東京</a></p>
        <p class="text-109"><a href="#">富山</a></p>
        <p class="text-109"><a href="#">長野</a></p>
        <p class="text-109"><a href="#">三重</a></p>
        <p class="text-133"><a href="#">京都</a></p>
        <p class="text-109"><a href="#">和歌山</a></p>
        <p class="text-109"><a href="#">島根</a></p>
        <p class="text-158"><a href="#">香川</a></p>
        <p class="text-109"><a href="#">佐賀</a></p>
        <p class="text-109"><a href="#">宮崎</a></p>
       </div>
       <div class="parts92">
        <p><a href="#">宮城</a></p>
        <p class="text-125"><a href="#">群馬</a></p>
        <p class="text-109"><a href="#">神奈川</a></p>
        <p class="text-109"><a href="#">石川</a></p>
        <p class="text-109"><a href="#">岐阜</a></p>
        <p class="text-129"><a href="#">大阪</a></p>
        <p class="text-158"><a href="#">岡山</a></p>
        <p class="text-158"><a href="#">愛媛</a></p>
        <p class="text-109"><a href="#">長崎</a></p>
        <p class="text-109"><a href="#">鹿児島</a></p>
       </div>
       <div class="parts93">
        <p><a href="#">秋田</a></p>
        <p class="text-125"><a href="#">埼玉</a></p>
        <p class="text-158"><a href="#">福井</a></p>
        <p class="text-109"><a href="#">静岡</a></p>
        <p class="text-129"><a href="#">兵庫</a></p>
        <p class="text-158"><a href="#">広島</a></p>
        <p class="text-158"><a href="#">高知</a></p>
        <p class="text-109"><a href="#">熊本</a></p>
       </div>
      </div>
     </div>
     <div class="parts94 group">
      <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_116.png" alt="" width="20" height="20">
      <p>物件種別からさがす</p>
     </div>
     <div class="parts95 group">
      <div class="parts96 group">
       <div class="parts97">
        <p><a href="#">一棟RC</a></p>
        <p class="text-126"><a href="#">一棟木造</a></p>
       </div>
       <div class="parts98">
        <p><a href="#">一棟鉄骨</a></p>
        <p class="text-126"><a href="#">商業ビル</a></p>
       </div>
      </div>
      <div class="parts99 group">
       <div class="parts100">
        <p><a href="#">戸建賃貸</a></p>
        <p class="text-126"><a href="#">土地</a></p>
       </div>
       <div class="parts101">
        <p><a href="#">区分マンション</a></p>
        <p class="text-187"><a href="#">駐車場</a></p>
       </div>
      </div>
      <div class="parts102 group">
       <div class="parts103">
        <p><a href="#">ホテル</a></p>
        <p class="text-187"><a href="#">区分店舗</a></p>
       </div>
       <div class="parts104">
        <p><a href="#">区分事務所</a></p>
        <p class="text-187"><a href="#">倉庫</a></p>
       </div>
      </div>
      <div class="parts105 group">
       <p class="text-192"><a href="#">工場</a></p>
       <p><a href="#">太陽光発電用地</a></p>
      </div>
      <p><a href="#">区分太陽光発電</a></p>
     </div>
    </div>
    <div class="side_news">
     <div class="tt">
      <div>
       <p>運営からのお知らせ</p>
      </div>
     </div>
     <div class="wrapper-20">
      <div class="content">
       <div class="parts106 group">
        <div></div>
        <p>2017/10/01</p>
       </div>
       <p>「未公開収益物件仲介人」PC版をリリースし<br>ました。</p>
       <div class="parts107"></div>
      </div>
      <div class="content-2">
       <div class="parts106 group">
        <div></div>
        <p>2017/10/01</p>
       </div>
       <p>「未公開収益物件仲介人」PC版をリリースし<br>ました。</p>
       <div class="parts107"></div>
      </div>
      <div class="content-3">
       <div class="parts106 group">
        <div></div>
        <p>2017/10/01</p>
       </div>
       <p>「未公開収益物件仲介人」PC版をリリースし<br>ました。</p>
       <div class="parts107"></div>
      </div>
      <div class="content-4">
       <div class="parts106 group">
        <div></div>
        <p>2017/10/01</p>
       </div>
       <p>「未公開収益物件仲介人」PC版をリリースし<br>ました。</p>
       <div class="parts107"></div>
      </div>
      <div class="content-5">
       <div class="parts106 group">
        <div></div>
        <p>2017/10/01</p>
       </div>
       <p>「未公開収益物件仲介人」PC版をリリースし<br>ました。</p>
       <div class="parts107"></div>
      </div>
      <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/scrollbar.png" alt="" width="17" height="367">
     </div>
    </div>
    <div class="iamge_side_success_stories">
     <div class="group">
      <div></div>
      <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/new.png" alt="NEW" width="48" height="30" title="NEW">
     </div>
     <p>成功事例<br>　のご紹介</p>
    </div>
    <div class="iamge_side_undisclosed_property">
     <div class="group">
      <div></div>
      <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/new.png" alt="NEW" width="48" height="30" title="NEW">
     </div>
     <p>未公開物件<br>　　のご紹介</p>
    </div>
    <div class="section_undisclosed_property">
     <div class="h2-3 group">
      <div class="parts108"></div>
      <p class="text-208">新着未公開物件</p>
      <p class="text-209">NEW UNDISCLOSED PROPERTY</p>
      <div class="more-2">
       一覧を見る
      </div>
     </div>
     <?php $assessment = osc_get_new_assessment(3); ?>
     <div class="list_1-3 group">
      <div class="ttl-8">
       <div>
        <p><?php print $assessment[0]["s_item_assessment_title"]; ?>少しの手直しで高利回り。東京都八幡山の優良物件。</p>
       </div>
      </div>
      <div class="parts109 group">
       <div class="photo">
        <div class="limit">
         会員限定
        </div>
        <div class="limit_property">
         <div>
          <p>非公開物件</p>
         </div>
        </div>
       </div>
       <div class="parts110">
        <p>所在地　：　<?php print $assessment[0]["s_region"]; ?></p>
        <p class="text-126">物件種別：　<?php print $assessment[0]["s_item_kind"]; ?></p>
        <p class="text-216">利回り　：　<?php print $assessment[0]["f_yield"]*100; ?>％</p>
       </div>
       <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/border_5.png" alt="" width="1" height="72">
       <div class="parts111">
        <p>掲載開始日　　：　<?php print (strlen($assessment[0]["dt_pub_date"] === 0) ? "" : (strpos($assessment[0]["dt_pub_date"], " ") === false ? $assessment[0]["dt_pub_date"] : substr($assessment[0]["dt_pub_date"],0,strpos($assessment[0]["dt_pub_date"], " ")))); ?></p>
        <p class="text-218">物件公開予定日：　<?php print (strlen($assessment[0]["dt_expiration"] === 0) ? "" : (strpos($assessment[0]["dt_expiration"], " ") === false ? $assessment[0]["dt_expiration"] : substr($assessment[0]["dt_expiration"],0,strpos($assessment[0]["dt_expiration"], " ")))); ?></p>
        <p class="text-219">価格　　　　　：　<?php print $assessment[0]["i_asking_price"]; ?>万円</p>
       </div>
       <div class="btn-3">
        <div class="parts112"></div>
        <div class="parts113">
         詳細
        </div>
       </div>
      </div>
     </div>
     <div class="list_2-3 group">
      <div class="ttl-8">
       <div>
        <p><?php print $assessment[1]["s_item_assessment_title"]; ?>少しの手直しで高利回り。東京都八幡山の優良物件。</p>
       </div>
      </div>
      <div class="parts114 group">
       <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/573_3.jpg" alt="" width="120" height="80">
       <div class="parts115">
        <p>所在地　：　<?php print $assessment[1]["s_region"]; ?></p>
        <p class="text-126">物件種別：　<?php print $assessment[1]["s_item_kind"]; ?></p>
        <p class="text-216">利回り　：　<?php print $assessment[1]["f_yield"]*100; ?>％</p>
       </div>
       <img class="border-34" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/border_5.png" alt="" width="1" height="72">
       <div class="parts116">
        <p>掲載開始日　　：　<?php print (strlen($assessment[1]["dt_pub_date"] === 0) ? "" : (strpos($assessment[1]["dt_pub_date"], " ") === false ? $assessment[1]["dt_pub_date"] : substr($assessment[1]["dt_pub_date"],0,strpos($assessment[1]["dt_pub_date"], " ")))); ?></p>
        <p class="text-218">物件公開予定日：　<?php print (strlen($assessment[1]["dt_expiration"] === 0) ? "" : (strpos($assessment[1]["dt_expiration"], " ") === false ? $assessment[1]["dt_expiration"] : substr($assessment[1]["dt_expiration"],0,strpos($assessment[1]["dt_expiration"], " ")))); ?></p>
        <p class="text-219">価格　　　　　：　<?php print $assessment[1]["i_asking_price"]; ?>万円</p>
       </div>
       <div class="btn-4">
        <div class="parts112"></div>
        <div class="parts113">
         詳細
        </div>
       </div>
      </div>
     </div>
     <div class="list_3-3 group">
      <div class="ttl-8">
       <div>
        <p><?php print $assessment[2]["s_item_assessment_title"]; ?>少しの手直しで高利回り。東京都八幡山の優良物件。</p>
       </div>
      </div>
      <div class="parts117 group">
       <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/573_3.jpg" alt="" width="120" height="80">
       <div class="parts118">
        <p>所在地　：　<?php print $assessment[2]["s_region"]; ?></p>
        <p class="text-126">物件種別：　<?php print $assessment[2]["s_item_kind"]; ?></p>
        <p class="text-216">利回り　：　<?php print $assessment[2]["f_yield"]*100; ?>％</p>
       </div>
       <img class="border-34" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/border_5.png" alt="" width="1" height="72">
       <div class="parts119">
        <p>掲載開始日　　：　<?php print (strlen($assessment[2]["dt_pub_date"] === 0) ? "" : (strpos($assessment[2]["dt_pub_date"], " ") === false ? $assessment[2]["dt_pub_date"] : substr($assessment[2]["dt_pub_date"],0,strpos($assessment[2]["dt_pub_date"], " ")))); ?></p>
        <p class="text-218">物件公開予定日：　<?php print (strlen($assessment[2]["dt_expiration"] === 0) ? "" : (strpos($assessment[2]["dt_expiration"], " ") === false ? $assessment[2]["dt_expiration"] : substr($assessment[2]["dt_expiration"],0,strpos($assessment[2]["dt_expiration"], " ")))); ?></p>
        <p class="text-219">価格　　　　　：　<?php print $assessment[2]["i_asking_price"]; ?>万円</p>
       </div>
       <div class="btn-5">
        <div class="parts112"></div>
        <div class="parts113">
         詳細
        </div>
       </div>
      </div>
     </div>
     <div class="btn-6">
      <div class="parts120"></div>
      <div class="parts121">
       新着未公開物件の一覧を見る
      </div>
     </div>
    </div>
    <div class="section_agent">
     <div class="h2-4 group">
      <div class="parts108"></div>
      <p class="text-208">新着エージェント</p>
      <p class="text-209">NEW AGENT</p>
      <div class="more-2">
       一覧を見る
      </div>
     </div>
     <?php $user = osc_get_new_agent(3); ?>
     <div class="list_1-4 group">
      <div class="ttl-11">
       <div>
        <p><?php print mb_substr($user[0]["s_promotion_message_body"],0,41) . "..."; ?></p>
       </div>
      </div>
      <div class="parts122 group">
       <div class="photo-2">
        <div>
         会員限定
        </div>
       </div>
       <div class="parts123">
        <p>活動エリア　：　<?php print $user[0]["s_activity_area"]; ?></p>
        <p class="text-216">注力物件　　：　<?php print $user[0]["s_commitment_item"]; ?></p>
        <p class="text-245">昨年取引件数：　<?php print $user[0]["s_last_year_transaction_count"]; ?></p>
       </div>
       <div class="btn-7">
        <div class="parts112"></div>
        <div class="parts113">
         <a href="http://www.abc-planning.sakura.ne.jp/user/profile/<?php print $user[0]["pk_i_id"]; ?>">詳細</a>
        </div>
       </div>
      </div>
     </div>
     <div class="list_2-4 group">
      <div class="ttl-11">
       <div>
        <p><?php print mb_substr($user[1]["s_promotion_message_body"],0,41) . "..."; ?></p>
       </div>
      </div>
      <div class="parts124 group">
       <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/573_6.png" alt="" width="64" height="80">
       <div class="parts125">
        <p>活動エリア　：　<?php print $user[1]["s_activity_area"]; ?></p>
        <p class="text-216">注力物件　　：　<?php print $user[1]["s_commitment_item"]; ?></p>
        <p class="text-245">昨年取引件数：　<?php print $user[1]["s_last_year_transaction_count"]; ?></p>
       </div>
       <div class="btn-8">
        <div class="parts112"></div>
        <div class="parts113">
         <a href="http://www.abc-planning.sakura.ne.jp/user/profile/<?php print $user[1]["pk_i_id"]; ?>">詳細</a>
        </div>
       </div>
      </div>
     </div>
     <div class="list_3-4 group">
      <div class="ttl-11">
       <div>
        <p><?php print mb_substr($user[2]["s_promotion_message_body"],0,41) . "..."; ?></p>
       </div>
      </div>
      <div class="parts126 group">
       <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/573_6.png" alt="" width="64" height="80">
       <div class="parts127">
        <p>活動エリア　：　<?php print $user[2]["s_activity_area"]; ?></p>
        <p class="text-216">注力物件　　：　<?php print $user[2]["s_commitment_item"]; ?></p>
        <p class="text-245">昨年取引件数：　<?php print $user[2]["s_last_year_transaction_count"]; ?></p>
       </div>
       <div class="btn-9">
        <div class="parts112"></div>
        <div class="parts113">
         <a href="http://www.abc-planning.sakura.ne.jp/user/profile/<?php print $user[2]["pk_i_id"]; ?>">詳細</a>
        </div>
       </div>
      </div>
     </div>
     <?php //} ?>
     <div class="btn-10">
      <div class="parts128"></div>
      <div class="parts129">
       新着エージェントの一覧を見る
      </div>
     </div>
    </div>
    <div class="section_flow2">
     <p class="text-258">媒介契約</p>
     <p class="text-259">不動産業者、またはエージェントは売却希望のお客様から物件の売却依頼を頂きます際にご契約をさせ<br>て頂きます。この契約を媒介契約と言います。この媒介契約には３種類ありそれぞれ一定期日を経過す<br>ると情報公開義務が不動産業者には義務つけられております。<br><span>&nbsp;</span><br>１専属専任媒介契約＝５日以内<br>２専任媒介契約＝７日以内<br>３一般媒介契約＝法令上の期限無<br><span>&nbsp;</span><br>優良物件と言われる物件はそのほとんどが市場公開前に成約になっていると言われておりますが<br>宅建業法で物件公開期日が決められている為に大手ポータルサイトにも稀に優良物件が<br>掲載されているのはその為です。<br>本サイトでは市場公開期限が到達していない物件とその物件を取り扱うエージェントを<br>公開しております。<br><span>&nbsp;</span><br>是非ご利用下さい。</p>
    </div>
   </div>
   <div class="parts130 group">
    <div>
     <div class="h2-5 group">
      <div class="parts108"></div>
      <p class="text-208">新着成功事例</p>
      <p class="text-261">SUCCESS STORIES</p>
      <div class="more-2">
       一覧を見る
      </div>
     </div>
     <?php $stories = osc_get_new_stories(3); ?>
     <div class="list_1-5 group">
      <div class="ttl-8">
       <div>
        <p><?php print $stories[0]["s_success_stories_title"]; ?></p>
       </div>
      </div>
      <div class="parts131 group">
       <div class="photo-3">
        <div class="limit">
         会員限定
        </div>
        <div class="limit_property">
         <div>
          <p>非公開物件</p>
         </div>
        </div>
       </div>
       <div class="parts132">
        <p>投稿者名　　：　<?php print $stories[0]["s_username"]; ?></p>
        <p class="text-216">投稿者タイプ ：　<?php print $stories[0]["b_company"] == 0 ? "投資家" : "エージェント" ; ?></p>
        <p class="text-268">契約完了日　：　<?php print $stories[0]["dt_contract_completion"]; ?></p>
       </div>
       <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/border_5.png" alt="" width="1" height="72">
       <div class="parts133">
        <p>所在地　：　<?php print $stories[0]["s_directory"]; ?></p>
        <p class="text-216">物件種別：　<?php print $stories[0]["s_item_kind"]; ?></p>
        <p class="text-268">利回り　：　<?php print $stories[0]["f_yield"]*100; ?>％</p>
       </div>
       <div class="btn-11">
        <div class="parts112"></div>
        <div class="parts113">
         詳細
        </div>
       </div>
      </div>
     </div>
     <div class="list_2-5 group">
      <div class="ttl-8">
       <div>
        <p><?php print $stories[1]["s_success_stories_title"]; ?></p>
       </div>
      </div>
      <div class="parts134 group">
       <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/573_3.jpg" alt="" width="120" height="80">
       <div class="parts135">
        <p>投稿者名　　：　<?php print $stories[1]["s_username"]; ?></p>
        <p class="text-216">投稿者タイプ ：　<?php print $stories[1]["b_company"] == 0 ? "投資家" : "エージェント" ; ?></p>
        <p class="text-268">契約完了日　：　<?php print $stories[1]["dt_contract_completion"]; ?></p>
       </div>
       <img class="border-37" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/border_5.png" alt="" width="1" height="72">
       <div class="parts136">
        <p>所在地　：　<?php print $stories[1]["s_directory"]; ?></p>
        <p class="text-216">物件種別：　<?php print $stories[1]["s_item_kind"]; ?></p>
        <p class="text-268">利回り　：　<?php print $stories[1]["f_yield"]*100; ?>％</p>
       </div>
       <div class="btn-12">
        <div class="parts112"></div>
        <div class="parts113">
         詳細
        </div>
       </div>
      </div>
     </div>
     <div class="list_3-5 group">
      <div class="ttl-8">
       <div>
        <p><?php print $stories[2]["s_success_stories_title"]; ?></p>
       </div>
      </div>
      <div class="parts137 group">
       <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/573_3.jpg" alt="" width="120" height="80">
       <div class="parts138">
        <p>投稿者名　　：　<?php print $stories[2]["s_username"]; ?></p>
        <p class="text-216">投稿者タイプ ：　<?php print $stories[2]["b_company"] == 0 ? "投資家" : "エージェント" ; ?></p>
        <p class="text-268">契約完了日　：　<?php print $stories[2]["dt_contract_completion"]; ?></p>
       </div>
       <img class="border-37" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/border_5.png" alt="" width="1" height="72">
       <div class="parts139">
        <p>所在地　：　<?php print $stories[2]["s_directory"]; ?></p>
        <p class="text-216">物件種別：　<?php print $stories[1]["s_item_kind"]; ?></p>
        <p class="text-268">利回り　：　<?php print $stories[2]["f_yield"]*100; ?>％</p>
       </div>
       <div class="btn-13">
        <div class="parts112"></div>
        <div class="parts113">
         詳細
        </div>
       </div>
      </div>
     </div>
     <div class="btn-14">
      <div class="parts140"></div>
      <div class="parts141">
       新着成功事例の一覧を見る
      </div>
     </div>
    </div>
    <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/facebook.jpg" alt="" width="279" height="480">
   </div>
   <div class="image_step">
    <div>
     <div class="parts142 group">
      <img class="check-2" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/check.png" alt="Check" width="41" height="27" title="Check">
      <img class="text-290" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_83.png" alt="失敗しないエージェントの探し方" width="529" height="45" title="失敗しないエージェントの探し方">
     </div>
     <div class="wrapper-65">
      <div class="a4">
       <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/7_2.png" alt="" width="44" height="32">
       <div>
        <div class="parts143"></div>
        <p class="text-291"><span class="text-style-3">オ</span><span class="text-style-5">ファーを出されたエージェント</span><br class="text-style-4"><span class="parts144">より購入条件に該当する物件が</span><br class="parts145"><span class="parts144">出次第ご指定のご連絡方法で</span><br class="parts145"><span class="text-style-8">未公開物件情報をご報告致します。</span></p>
        <p class="text-292">Answer</p>
        <div class="parts146"></div>
       </div>
      </div>
      <div class="a3">
       <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/7_2_2.png" alt="" width="44" height="32">
       <div>
        <div class="parts147"></div>
        <p class="text-293"><span class="text-style-9">物</span><span class="text-style-11">件紹介オファーは一人の</span><br class="parts148"><span class="parts149">エージェントに依頼するより大勢の</span><br class="parts145"><span class="parts144">エージェントにオファーを出された方が</span><br class="parts145"><span class="text-style-13">より多くの情報が集まります。</span></p>
        <p class="text-294">Answer</p>
        <div class="parts150"></div>
       </div>
      </div>
      <div class="a2">
       <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/7_2_2.png" alt="" width="44" height="32">
       <div>
        <div class="parts151"></div>
        <p class="text-295"><span class="parts152">投</span><span class="text-style-15">資家様の希望エリアにて購入</span><br class="parts148"><span class="parts144">条件種別の不動産売買に特化した</span><br class="parts145"><span class="text-style-16">エージェントが多数登録しております。</span><br class="parts145"><span class="parts144">ご条件に該当するエージェントを</span><br class="parts145"><span class="parts144">ご検索下さい。</span></p>
        <p class="text-296">Answer</p>
        <div class="parts153"></div>
       </div>
      </div>
      <div class="a1">
       <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/7_2_2.png" alt="" width="44" height="32">
       <div>
        <div class="parts147"></div>
        <p class="text-297"><span class="parts152">投</span><span class="text-style-17">資家様の個人情報につきまして</span><br class="parts148"><span class="parts144">は厳重に保護されておりオファー</span><br class="parts145"><span class="parts149">依頼エージェント以外のユーザーは</span><br class="parts145"><span class="parts144">閲覧できません。</span></p>
        <p class="text-294">Answer</p>
        <div class="parts150"></div>
       </div>
      </div>
      <div class="q4">
       <img class="parts154" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/643_5.png" alt="" width="216" height="128">
       <img class="parts155" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/643.png" alt="" width="216" height="128">
       <p class="text-298">一括オファーを使って物件の<br>事前紹介オファーを大勢の<br>エージェントに出したけど<br>この後どうすれば？</p>
       <div>
        <div class="group">
         <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/4.png" alt="" width="20" height="20">
         <p>物件紹介</p>
        </div>
        <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/border_3.png" alt="" width="196" height="1">
       </div>
       <img class="parts156" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1051.png" alt="" width="27" height="67">
       <img class="parts157" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/112888.png" alt="" width="54" height="175">
       <p class="text-300">Step.4</p>
      </div>
      <div class="q3">
       <img class="parts158" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/643_4.png" alt="" width="216" height="109">
       <img class="parts159" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/643_2.png" alt="" width="216" height="109">
       <p class="text-301">購入条件の物件を取り扱って<br>いるエージェントが複数該当<br>するのだけどどうすれば？</p>
       <div>
        <div class="group">
         <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/3_2.png" alt="" width="20" height="20">
         <p>オファー依頼</p>
        </div>
        <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/border_3.png" alt="" width="196" height="1">
       </div>
       <img class="parts160" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1055.png" alt="" width="57" height="41">
       <img class="parts161" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/112857.png" alt="" width="71" height="181">
       <p class="text-303">Step.3</p>
      </div>
      <div class="q2">
       <img class="parts154" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/643_3.png" alt="" width="216" height="110">
       <img class="parts155" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/643_6.png" alt="" width="216" height="110">
       <p class="text-304">購入したい条件の物件<br>はあるのだけどどうすれば？</p>
       <div>
        <div class="group">
         <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/4.png" alt="" width="20" height="20">
         <p>エージェント検索</p>
        </div>
        <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/border_3.png" alt="" width="196" height="1">
       </div>
       <img class="parts162" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1049.png" alt="" width="27" height="46">
       <img class="parts163" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/112887.png" alt="" width="46" height="181">
       <p class="text-306">Step.2</p>
      </div>
      <div class="q1">
       <img class="parts158" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/643_4.png" alt="" width="216" height="109">
       <img class="parts159" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/643_2.png" alt="" width="216" height="109">
       <p class="text-307">投資家登録をしたいのだけど<br>個人情報の漏洩とかが心配…<br>そのあたりは大丈夫なの？</p>
       <div>
        <div class="group">
         <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/3_2.png" alt="" width="20" height="20">
         <p>投資家登録</p>
        </div>
        <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/border_3.png" alt="" width="196" height="1">
       </div>
       <img class="parts164" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/1054.png" alt="" width="24" height="53">
       <img class="parts165" src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/112850.png" alt="" width="51" height="184">
       <p class="text-309">Step.1</p>
      </div>
     </div>
     <div class="parts166 group">
      <div>
       詳細はこちら
      </div>
      <div>
       詳細はこちら
      </div>
      <div>
       詳細はこちら
      </div>
      <div>
       詳細はこちら
      </div>
     </div>
    </div>
   </div>
   <div class="subfooter">
    <div class="group">
     <div class="parts167 group">
      <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_23.png" alt="" width="20" height="20">
      <p>地域からさがす</p>
     </div>
     <div class="parts168 group">
      <img src="http://www.abc-planning.sakura.ne.jp/oc-content/themes/royal/images/top/image_23.png" alt="" width="20" height="20">
      <p>物件種別からさがす</p>
     </div>
    </div>
    <div class="parts169 group">
     <div class="wrapper-64">
      <div class="parts170 group">
       <div class="parts171">
        <p><a href="#">北海道</a></p>
        <div class="parts172 group">
         <p><a href="#">青森</a></p>
         <p><a href="#">岩手</a></p>
         <p><a href="#">宮城</a></p>
         <p><a href="#">秋田</a></p>
        </div>
        <div class="parts173 group">
         <p class="text-321"><a href="#">山形</a></p>
         <p><a href="#">福島</a></p>
        </div>
        <div class="parts174 group">
         <div class="parts175">
          <p><a href="#">茨城</a></p>
          <p><a href="#">千葉</a></p>
          <p><a href="#">新潟</a></p>
          <p><a href="#">山梨</a></p>
         </div>
         <div class="parts176">
          <p><a href="#">栃木</a></p>
          <p><a href="#">東京</a></p>
          <p><a href="#">富山</a></p>
          <p><a href="#">長野</a></p>
         </div>
         <div class="parts177">
          <div class="group">
           <p class="text-331"><a href="#">群馬</a></p>
           <p class="text-332"><a href="#">埼玉</a></p>
          </div>
          <p><a href="#">神奈川</a></p>
          <div class="parts178 group">
           <div class="parts179">
            <p><a href="#">石川</a></p>
            <p class="text-109"><a href="#">岐阜</a></p>
           </div>
           <div class="parts180">
            <p><a href="#">福井</a></p>
            <p class="text-109"><a href="#">静岡</a></p>
           </div>
          </div>
         </div>
        </div>
        <div class="parts181 group">
         <p class="text-321"><a href="#">愛知</a></p>
         <p><a href="#">三重</a></p>
        </div>
       </div>
       <div class="parts182 group">
        <div class="group">
         <p class="text-340"><a href="#">滋賀</a></p>
         <p class="text-340"><a href="#">京都</a></p>
         <p class="text-340"><a href="#">大阪</a></p>
         <p class="text-340"><a href="#">兵庫</a></p>
        </div>
        <div class="parts183 group">
         <p class="text-321"><a href="#">奈良</a></p>
         <p><a href="#">和歌山</a></p>
        </div>
        <div class="parts184 group">
         <div class="parts185">
          <p><a href="#">鳥取</a></p>
          <p class="text-109"><a href="#">山口</a></p>
          <p class="text-109"><a href="#">徳島</a></p>
         </div>
         <div class="parts186">
          <p><a href="#">島根</a></p>
          <p class="text-158"><a href="#">香川</a></p>
         </div>
         <div class="parts187">
          <div class="group">
           <p class="text-331"><a href="#">岡山</a></p>
           <p class="text-332"><a href="#">広島</a></p>
          </div>
          <div class="parts188 group">
           <p class="text-321"><a href="#">愛媛</a></p>
           <p><a href="#">高知</a></p>
          </div>
         </div>
        </div>
        <div class="parts189 group">
         <p><a href="#">福岡</a></p>
         <p><a href="#">佐賀</a></p>
         <p><a href="#">長崎</a></p>
         <p><a href="#">熊本</a></p>
        </div>
        <div class="parts190 group">
         <p><a href="#">大分</a></p>
         <p><a href="#">宮崎</a></p>
         <p><a href="#">鹿児島</a></p>
        </div>
        <p><a href="#">沖縄県</a></p>
       </div>
      </div>
      <div class="parts191 group">
       <div class="parts192">
        <p>北海道</p>
        <p class="text-123">東北</p>
        <p class="text-124">関東</p>
        <p class="text-125">北陸</p>
        <p class="text-126">中部</p>
       </div>
       <div class="parts193">
        <p>関西</p>
        <p class="text-369">中国</p>
        <p class="text-129">四国</p>
        <p class="text-130">九州</p>
        <p class="text-129">沖縄</p>
       </div>
      </div>
     </div>
     <div class="parts194">
      <div class="parts195 group">
       <div class="parts196">
        <p><a href="#">一棟RC</a></p>
        <p class="text-126"><a href="#">一棟木造</a></p>
       </div>
       <div class="parts197">
        <p><a href="#">一棟鉄骨</a></p>
        <p class="text-126"><a href="#">商業ビル</a></p>
       </div>
      </div>
      <div class="parts198 group">
       <div class="parts199">
        <p><a href="#">戸建賃貸</a></p>
        <p class="text-126"><a href="#">土地</a></p>
       </div>
       <div class="parts200">
        <p><a href="#">区分マンション</a></p>
        <p class="text-187"><a href="#">駐車場</a></p>
       </div>
      </div>
      <div class="parts201 group">
       <div class="parts202">
        <p><a href="#">ホテル</a></p>
        <p class="text-187"><a href="#">区分店舗</a></p>
       </div>
       <div class="parts203">
        <p><a href="#">区分事務所</a></p>
        <p class="text-187"><a href="#">倉庫</a></p>
       </div>
      </div>
      <div class="parts204 group">
       <p class="text-192"><a href="#">工場</a></p>
       <p><a href="#">太陽光発電用地</a></p>
      </div>
      <p><a href="#">区分太陽光発電</a></p>
     </div>
    </div>
   </div>
   <div class="footer group">
    <div class="group">
     <p>運営会社</p>
     <p class="text-389">プライバシーポリシー</p>
     <p class="text-390">利用規約</p>
     <p class="text-391">特定商取引法に基づく表記</p>
     <p class="text-392">よくある質問</p>
     <p class="text-393">お知らせ</p>
     <p class="text-392">お問い合わせ</p>
    </div>
    <p>Copyright 未公開収益物件仲介人 All Rights Reserved.</p>
   </div>
  </div>