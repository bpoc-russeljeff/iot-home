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
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/pagetop.css">
	<link rel="stylesheet" href="../css/main.css">
	<!-- Base CSS -->
	<link rel="stylesheet" href="../css/base.css">

    <!-- フォントオーサム -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- ファビコン読込 -->
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <meta http-equiv="imagetoolbar" content="no">
    <!-- 検索有無設定 -->
    <meta name="robots" content="noindex,nofollow" />
    <!-- googlefont -->
    <link href='https://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    <!-- jquery読込 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/easy-rollover.js"></script>
    <script src="https://use.typekit.net/zzb5mon.js"></script>
    <script src="js/modernizr-2.8.3.min.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script type="text/javascript" src="../js/slick.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/modal.js"></script>
    <script type="text/javascript" src="../js/base-color.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
	<!-- バリデーション読込 -->
	<link rel="stylesheet" href="../js/jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
	<script src="../js/jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-ja.js" type="text/javascript" charset="utf-8"></script>
	<script src="../js/jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	<script>
	$(function(){
		jQuery("#form form").validationEngine();
	});
	</script>
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
	<!-- 背景変換 -->

	<!-- へッダー消し -->
	<script type="text/javascript">
		$(window).scroll(function() {
			top_menu = $('header');
				if(($(document).height() - ($(window).height() + $(window).scrollTop()))/$(document).height() < 0.22){
				top_menu.fadeOut();
			}else{
				top_menu.fadeIn();
			}
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
		@media only screen
		and (min-width: 1051px){
		.agreement input[type=checkbox] {
		width: 1.8vw !important;
		height: 1.8vw !important;
		}
		}
		@media only screen
		and (max-width: 1050px){
		.agreement input[type=checkbox] {
		width: 4.5vw !important;
		height: 4.5vw !important;
		}
		}
		@media only screen
		and (max-width: 770px){
		.agreement input[type=checkbox] {
		width: 4vw !important;
		height: 4vw !important;
		}
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

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJLQ9VQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="fixed_top" style="background-color:rgba(255,255,255,0.75);">

</header>

<main>

	<div class="wrapper_35 view_pc">
		<img class="fix_zoom undrag" src="img/pc_step_1.png" alt="">
	</div>
	<div class="wrapper_95 view_tabsp">
		<img class="fix_zoom undrag" src="img/sp_step_1.png" alt="">
	</div>

	<div class="space_3"></div>
	<form method="post" action="../contact-form.php" enctype="multipart/form-data" novalidate>
        <div class="entyr-form cont_wrapper_50 form_padding">
			<ul class="wrapper_100 txt_left" style="padding: 0 0 0 0;">
				<li>
					<label for="" class="navy font_100 bold">お問い合わせ内容 ※</label>
					<div class="space_05"></div>
					<div class="flex_1 txt_left">
						<div class="f_sub width_45">
							<label for="">
								<input style="transform: scale(1.6);" id="inquiry" class="validate[required]" type="radio" name="inquiry" value="1" <?php if( !empty($clean['inquiry']) && $clean['inquiry'] === "1" ){ echo 'checked'; } ?> >&nbsp;&nbsp; ご入居に関するお問い合わせ
							</label>
						</div>
						<div class="f_sub width_45">
							<label for=""></label>
								<input style="transform: scale(1.6);" id="inquiry" class="validate[required]" type="radio" name="inquiry" value="2" <?php if( !empty($clean['inquiry']) && $clean['inquiry'] === "2" ){ echo 'checked'; } ?> >&nbsp;&nbsp; 設備に関するお問い合わせ
							</label>
						</div>
						<div class="f_sub width_10"></div>
					</div>
				</li>
				<div class="space_1"></div>
				<li>
					<label for="" class="navy font_100 bold">お名前 ※</label>
					<div class="wrapper_100 txt_tpad_05">
						<input class="validate[required] width_100 font_100 txt_tpad_05 txt_lpad_05 txt_bpad_05" id="input-name" type="text" name="your_name" value="<?php if( !empty($clean['your_name']) ){ echo $clean['your_name']; } ?>" placeholder="北配　太郎">
						<?php if( !empty($error['your_name']) ): ?><p class="error_msg"><?php echo $error['your_name']; ?></p><?php endif; ?>
					</div>
				</li>
				<div class="space_2"></div>
				<li>
					<label for="" class="navy font_100 bold">企業名</label>
					<div class="wrapper_100">
						<input class="width_100 font_100 txt_tpad_05 txt_lpad_05 txt_bpad_05" id="input-company" type="text" name="company_name" value="<?php if( !empty($clean['company_name']) ){ echo $clean['company_name']; } ?>" placeholder="株式会社ファイバーゲート">
					</div>
				</li>
				<div class="space_2"></div>
				<li>
					<label for="" class="navy font_100 bold">メールアドレス ※</label>
					<div class="wrapper_100">
						<input class="validate[required,custom[email]] width_100 font_100 txt_tpad_05 txt_lpad_05 txt_bpad_05" id="input-email" type="email" name="email" value="<?php if( !empty($clean['email']) ){ echo $clean['email']; } ?>" placeholder="info@fg.co.jp">
					</div>
				</li>
				<div class="space_2"></div>
				<li>
					<label for="" class="navy font_100 bold">ご連絡先 ※</label>
					<div class="wrapper_100">
						<input class="validate[required,custom[phone],maxSize[13]] width_100 font_100 txt_tpad_05 txt_lpad_05 txt_bpad_05" id="input-tel" type="tel" name="tel" value="<?php if( !empty($clean['tel']) ){ echo $clean['tel']; } ?>" placeholder="09123456789">
					</div>
				</li>
				<div class="space_2"></div>
				<li>
					<label for="" class="font_100 navy bold">お問い合わせ詳細 ※</label>
					<div class="wrapper_100">
						<textarea class="width_100 font_100 txt_tpad_05 txt_lpad_05 txt_bpad_05 txt_rpad_05" rows="5" id="input-text" name="contact" placeholder="例）&#10;同じシステムを物件に導入したい。&#10;物件の空きはありますか。"><?php if( !empty($clean['contact']) ){ echo $clean['contact']; } ?></textarea>
					</div>
				</li>
			</ul>
			
        </div>

		<div class="space_2"><!-- スペース --></div>

		<div class="agreement_wrapper txt_tpad_1 txt_bpad_1" style="background-color: #eeeeee;">
			<div class="cont_wrapper_50 view_sp">
				<p class="font_100 bold navy">個人情報保護に関する同意について ※</p>
				<div class="space_1"></div>
				<p class="font_75 grey ">入力前にお読みいただき、記載されている内容に関して同意していただく必要があります。<br>
					「個人情報の取り扱いについて」をよくお読みいただき、同意していただける場合は下の【「個人情報の取り扱いについて」に同意します】をチェックしお進みください。<br>
					ただし、このお問い合わせいただいた個人情報の利用目的は①<span class="bold black">本お問い合わせへの対応のため</span>のみとします。</p>	
			</div>
			<div class="cont_wrapper_70 view_pctab txt_lpad_1 txt_rpad_1">
				<p class="font_100 bold navy">個人情報保護に関する同意について ※</p>
				<div class="space_1"></div>
				<p class="font_75 grey">入力前にお読みいただき、記載されている内容に関して同意していただく必要があります。 <br>
					「個人情報の取り扱いについて」をよくお読みいただき、同意していただける場合は下の【「個人情報の取り扱いについて」に同意します】をチェックしお進みください。<br>
					ただし、このお問い合わせいただいた個人情報の利用目的は①<span class="bold">本お問い合わせへの対応のため</span>のみとします。</p>	
			</div>
			<div class="space_1"></div>
			<div class="cont_wrapper_50 bg_white view_sp">
				<img class="fix_zoom undrag" src="img/sp_privacy.png" alt="">
			</div>
			<div class="cont_wrapper_75 bg_white view_pctab">
				<img class="fix_zoom undrag" src="img/pc_privacy.png" alt="">
			</div>
			<div class="space_1"></div>
			<div class="txt_center cont_wrapper_50 flex flex_center agreement txt_bpad_05 txt_tpad_05" style="position:relative;">
				<div class="txt_center f_sub txt_center width_10">
					<input id="agreement" class="validate[required]" type="checkbox" name="agreement" value="1" <?php if( !empty($clean['agreement']) && $clean['agreement'] === "1" ){ echo 'checked'; } ?> >
				</div>
				<div class="txt_left txt_lpad_1 f_sub f_right width_90">
					<label for="agreement"><a href="https://miraie-net.com/privacy/" target="_blank"><span class="view_pc font_100">「個人情報の取り扱いについて」に同意します</span><span class="view_tabsp txt_center font_75">「個人情報の取り扱いについて」に同意します</span></a></label>
				</div>
			</div>
		</div>
		<div class="space_3"><!-- スペース --></div>
		<div class="wrapper_35 view_pc">
			<input class="view_pc square_btn white bg_w_grey  line_h_400 font_100 bold arial" disabled type="submit" name="btn_confirm" value="確認画面へ">
		</div>
		<div class="wrapper_70 view_tabsp">
			<input class="view_tabsp square_btn white bg_w_grey  line_h_250 font_100 bold arial" disabled type="submit" name="btn_confirm" value="確認画面へ">
		</div>

	</form>
	<br><br>

</main>

<footer class="wrapper_100 bg_black">

</footer>

<script>
	$(document).ready(function(){
		$('#agreement').click(function () {
			//check if checkbox is checked\
			if ($(this).is(':checked')) {

				$('[name="btn_confirm"]').removeAttr('disabled'); //enable input

			} else {
				$('[name="btn_confirm"]').attr('disabled', true); //disable input
			}
		});
	});	
</script>

</body>

</html>