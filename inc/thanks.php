<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="" />
    <meta property="fb:app_id" content="">
	<title>IoT Home</title>
	
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PJLQ9VQ');</script>
    <!-- End Google Tag Manager -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <!-- CSS読込 -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/pagetop.css">	
	<!-- Base CSS -->
	<link rel="stylesheet" href="css/base.css">

    <!-- フォントオーサム -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- ファビコン読込 -->
    <link rel="shortcut icon" href="img/favicon.ico" />
    <meta http-equiv="imagetoolbar" content="no">
    <!-- 検索有無設定 -->
    <meta name="robots" content="noindex,nofollow" />
    <!-- googlefont -->
    <link href='https://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    <!-- jquery読込 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/easy-rollover.js"></script>
    <script src="https://use.typekit.net/zzb5mon.js"></script>
    <script src="js/modernizr-2.8.3.min.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/modal.js"></script>
    <script type="text/javascript" src="js/base-color.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>

    <script type="text/javascript" src="js/jquery.easeScroll.js"></script>
    <!-- スムーススクロール -->
    <script type="text/javascript">
    $(function(){
      $('a[href^="#"]').on('click', function(){
          var speed = 1000;
          var href= $(this).attr('href');
          var target = $(href == '#' || href == '' ? 'html' : href);
          var position = target.offset().top;
          $('body,html').animate({scrollTop:position}, speed, 'swing');
          return false;
      });
    });
	</script>
	
	<style id='base_val' type='text/css'></style>
	
	<style>
		/* エラーメッセージ　赤文字設定 */
		.error_msg {
			color: #ff2e5a !important;
		}
		input:-webkit-autofill {
			-webkit-box-shadow: 0 0 0px 1000px #fff inset;
		}
    </style>
    
    <style type='text/css'>
        table {
            margin: auto;
        }

        /*表示切替*/
        html body .view_pc {
            display: block !important;
        }

        html body table.view_pc {
            display: table !important;
        }

        html body table.view_pc tr {
            display: table !important;
        }

        html body table.view_pc th {
            display: table !important;
        }

        html body table.view_pc td {
            display: table !important;
        }

        html body .view_pctab {
            display: block !important;
        }

        html body table.view_pctab {
            display: table !important;
        }

        html body table.view_pctab tr {
            display: table !important;
        }

        html body table.view_pctab th {
            display: table !important;
        }

        html body table.view_pctab td {
            display: table !important;
        }

        html body .view_tab {
            display: none !important;
        }

        html body .view_sp {
            display: none !important;
        }

        html body .view_tabsp {
            display: none !important;
        }

        @media only screen and (max-width: 1050px) {
            html body .view_pc {
                display: none !important;
            }

            html body .view_pctab {
                display: block !important;
            }

            html body table.view_pctab {
                display: table !important;
            }

            html body table.view_pctab tr {
                display: table !important;
            }

            html body table.view_pctab th {
                display: table !important;
            }

            html body table.view_pctab td {
                display: table !important;
            }

            html body .view_tab {
                display: block !important;
            }

            html body table.view_tab {
                display: table !important;
            }

            html body table.view_tab tr {
                display: table !important;
            }

            html body table.view_tab th {
                display: table !important;
            }

            html body table.view_tab td {
                display: table !important;
            }

            html body .view_sp {
                display: none !important;
            }

            html body .view_tabsp {
                display: block !important;
            }

            html body table.view_tabsp {
                display: table !important;
            }

            html body table.view_tabsp tr {
                display: table !important;
            }

            html body table.view_tabsp th {
                display: table !important;
            }

            html body table.view_tabsp td {
                display: table !important;
            }
        }

        @media only screen and (max-width: 770px) {
            html body .view_pc {
                display: none !important;
            }

            html body .view_pctab {
                display: none !important;
            }

            html body .view_tab {
                display: none !important;
            }

            html body .view_sp {
                display: block !important;
            }

            html body table.view_sp {
                display: table !important;
            }

            html body table.view_sp tr {
                display: table !important;
            }

            html body table.view_sp th {
                display: table !important;
            }

            html body table.view_sp td {
                display: table !important;
            }

            html body .view_tabsp {
                display: block !important;
            }

            html body table.view_tabsp {
                display: table !important;
            }

            html body table.view_tabsp tr {
                display: table !important;
            }

            html body table.view_tabsp th {
                display: table !important;
            }

            html body table.view_tabsp td {
                display: table !important;
            }
        }

        /* エラーメッセージ　赤文字設定 */
        .error_msg {
            color: #ff2e5a !important;
        }
    </style>

    <style type='text/css'>
        .bg_maroon{
            background: #b33e3e;
        }

        .a_otf{
            font-family: a-otf-futo-min-a101-pr6n, serif;
            font-style: normal;
            font-weight: 400;
        }

        .yugothic{
            font-family: "YuGothic" !important;
        }

        .hiraginokaku{
            font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", Osaka, メイリオ, Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", "ＭＳ ゴシック" , "MS Gothic", "Noto Sans CJK JP", TakaoPGothic, sans-serif !important; 
        }

        .txt_color_1{
            color: #112442 !important; 
        }

        .tag_green{
            background: #75b484;
        }

        .tag_brown{
            background: #b4aa75;
        }

        .wbrd_right{
            border-right: 2px solid #ffffff;
        }

        .wbrd_bottom{
            border-bottom: 2px solid #ffffff;
        }

        .gbrd_bottom{
            border-bottom: 2px solid #707070;
        }

        .tb_pad{
            padding: 1.302vw 1.959vw;
        }

        .tb_lpad_sp{
            padding: 3.115vw 5.19vw;
        }

        .tb_rpad_sp{
            padding: 3.115vw 3.894vw;
        }

        .tb_pad_sp_t{
            padding-top: 3.115vw;
        }

        .v_align_top{
            vertical-align: top;
        }

        .tb_mg0{
            margin: 0 !important;
        }

        .title_color1{
            background: #c8cdd4;
        }

        .title_color2{
            background: #e8e8e8;
        }

        .p_color1{
            background: #e7e9ec;
        }

        .p_color2{
            background: #f5f5f5;
        }

        .undrag{
            user-drag: none; 
            user-select: none;
            -moz-user-select: none;
            -webkit-user-drag: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }

        .bg_foot{
            background: #888888;
        }
    </style>

    <link rel="stylesheet" href="css/sp.css">

  </head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJLQ9VQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- Desktop Navigation -->
	<header class="view_pctab txt_tpad_1 txt_bpad_1">
        <div class="common_wrapper">
            <div class="width_100 flex flex_center">
                <div class="width_37">
                    <a href="#">
                        <img class="fix_zoom" src="img/logo.png">
                    </a>
                </div>
                <div class="width_5"></div>
                <div class="width_38 flex flex_center">
                    <div class="width_33">
                        <a href="#" class="font_75 txt_color_1 yugothic">コンセプト</a>
                    </div>
                    <div class="width_33">
                        <a href="#" class="font_75 txt_color_1 yugothic">アクセスマップ</a>
                    </div>
                    <div class="width_33">
                        <a href="#" class="font_75 txt_color_1 yugothic">物件概要</a>
                    </div>
                </div>                
                <div class="width_20">
                    <a href="contact-form.php" class="square_btn bg_maroon line_h_300 font_75 yugothic white">お問い合わせ</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation -->
	<header class="view_sp shadow bg_white fixed_top">

        <div class="wrapper_95 flex flex_center">
            <div class="width_60 txt_center tspace_1 bspace_1">
				<a href="#">
					<img src="img/logo.png" alt="">
				</a>
            </div>
            <div class="width_30"></div>
            
            <!-- Hamburger Menu -->
            <div class="width_10 txt_center button_container block" id="toggle" style="z-index:152;">
                <span class="top wrapper_50"></span>
                <span class="middle wrapper_50"></span>
                <span class="bottom wrapper_50"></span>
                <!-- <div class="default">Menu</div>
                <div class="close">Close</div> -->
            </div>
        </div>

        <!-- Overlay Menu Open -->
        <div class="overlay" id="overlay" style="z-index:150;">
            <nav class="overlay-menu">
                <ul class="width_100 flex flex_center">
                    <li class="width_100 b_btm"><a class="width_100 font_150 txt_tpad_1 txt_bpad_1 white block hiraginokaku" href="#">コンセプト</a></li>
                    <li class="width_100 b_btm"><a class="width_100 font_150 txt_tpad_1 txt_bpad_1 white block hiraginokaku" href="#">アクセスマップ</a></li>
                    <li class="width_100 b_btm"><a class="width_100 font_150 txt_tpad_1 txt_bpad_1 white block hiraginokaku" href="#">物件概要</a></li>
                    <li class="wrapper_70 tspace_5 bg_maroon">
                        <a class="width_100 font_150 txt_tpad_2 txt_bpad_2 white block hiraginokaku" href="#">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
        </div>

    </header>
    
    <main>

        <div class="thanks_section">

            <!-- Desktop -->
            <div class="view_pctab">
                <div class="common_wrapper">
                    <div class="wrapper_80">
                        <div class="wrapper_90">
                            <img class="fix_zoom" src="img/thanks_img.png" alt="">
                        </div>

                        <h2 class="font_200 bold line_h_100 tb_mg0 a_otf">お問い合わせありがとうございました。</h2>

                        <p class="font_100 grey line_h_100 tb_mg0 yugothic">お問い合わせが完了致しました。<br/>
                        弊社担当者よりご連絡差し上げますのでお待ちください。</p>

                        <div class="width_100 flex flex_center">
                            <div class="width_10">
                                <img class="fix_zoom" src="img/ssl_authority_img.png" alt="">
                            </div>

                            <div class="width_90">
                                <p class="font_100 grey line_h_100 tb_mg0 yugothic">当社ではCOMODO-SSLのサーバ証明書を取得し、SSLによる暗号化を行っています。<br/>
お客様にお送り頂いたデータは、インターネットを経由しても漏えいの心配はありません。</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Mobile -->
        </div>
    
    </main>

    <!-- Footer -->
    <footer>
        <div class="width_100 bg_foot">
            <div class="view_pctab">
                <p class="tb_mg0 white font_65 txt_tpad_1 txt_bpad_1 hiraginokaku bold">Copyright (C) 2020 FG-Lab all rights reserved.</p>
            </div>

            <div class="view_sp">
                <p class="tb_mg0 white font_65 txt_tpad_05 txt_bpad_05 hiraginokaku">Copyright (C) 2020 FG-Lab all rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        $("html").easeScroll();
    </script> 

	<script>	
		$('#toggle').click(function () {
			$(this).toggleClass('active');
			$('#overlay').toggleClass('open');
		});
	</script>
</body>

</html>