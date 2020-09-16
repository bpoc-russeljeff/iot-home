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
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/pagetop.css">
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
    <script src="../js/modernizr-2.8.3.min.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script type="text/javascript" src="../js/slick.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/modal.js"></script>
    <script type="text/javascript" src="../js/base-color.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>

    <script type="text/javascript" src="../js/jquery.easeScroll.js"></script>

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
            font-family: "Yu Gothic" !important;
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

        .tb_pad_pc_t{
            padding-top: 1.302vw;
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

    <link rel="stylesheet" href="../css/sp.css">
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJLQ9VQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
	<!-- Desktop Navigation -->
	<header class="view_pc txt_tpad_1 txt_bpad_1 u_line_t_black">
        <div class="common_wrapper">
            <div class="width_100 flex flex_center">
                <div class="width_37">
                    <a href="#">
                        <img class="fix_zoom" src="../img/logo.png" alt="IoT-Home Logo">
                    </a>
                </div>
                <div class="width_5"></div>
                <div class="width_38 flex flex_center">
                    <div class="width_33">
                        <!-- <a href="#concept_id" class="font_75 txt_color_1 yugothic">コンセプト</a> -->
                    </div>
                    <div class="width_33">
                        <!-- <a href="#access_id" class="font_75 txt_color_1 yugothic">アクセスマップ</a> -->
                    </div>
                    <div class="width_33">
                        <!-- <a href="#prop_id" class="font_75 txt_color_1 yugothic">物件概要</a> -->
                    </div>
                </div>                
                <div class="width_20">
                    <!-- <a href="inc/form.php" class="square_btn bg_maroon line_h_300 font_75 yugothic white">お問い合わせ</a> -->
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation -->
	<header class="view_tabsp u_line_t_black bg_white fixed_top">

        <div class="wrapper_95 flex flex_center">
            <div class="width_60 txt_center tspace_1 bspace_1">
				<a href="#">
					<img src="../img/logo.png" alt="IoT-Home Logo">
				</a>
            </div>
            <div class="width_30"></div>
            
            <!-- Hamburger Menu -->
            <div class="width_10 txt_center button_container block" id="toggle" style="z-index:152;">
                <!-- <span class="top wrapper_50"></span>
                <span class="middle wrapper_50"></span>
                <span class="bottom wrapper_50"></span> -->
                <!-- <div class="default">Menu</div>
                <div class="close">Close</div> -->
            </div>
        </div>

        <!-- Overlay Menu Open -->
        <!-- <div class="overlay" id="overlay" style="z-index:150;">
            <nav class="overlay-menu">
                <ul class="width_100 flex flex_center">
                    <li class="width_100 b_btm"><a class="width_100 font_150 txt_tpad_1 txt_bpad_1 white block hiraginokaku" href="#concept_id">コンセプト</a></li>
                    <li class="width_100 b_btm"><a class="width_100 font_150 txt_tpad_1 txt_bpad_1 white block hiraginokaku" href="#access_id">アクセスマップ</a></li>
                    <li class="width_100 b_btm"><a class="width_100 font_150 txt_tpad_1 txt_bpad_1 white block hiraginokaku" href="#prop_id">物件概要</a></li>
                    <li class="wrapper_70 tspace_5 bg_maroon">
                        <a class="width_100 font_150 txt_tpad_2 txt_bpad_2 white block hiraginokaku" href="inc/form.php">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
        </div> -->

    </header>

    <main>

    <div class="step_section">
			<div class="view_pc">
				<div class="wrapper_45">
					<div class="space_2"></div>
					<img src="../img/confirm_title.png" alt="確認画面">
                    <div class="space_05"></div>
                    
					<p class="tb_mg0 txt_color_1 font_75 hiraginokaku txt_center font_weight_500 line_h_200" style="letter-spacing: 0.15vw;">下記内容をご確認いただき、よろしければ「送信する」ボタンをクリックしてください。<br/>
                    修正する場合は、「入力画面に戻る」ボタンで前の画面にお戻りください。</p>
                    
					<div class="space_1"></div>

					<div class="wrapper_75">
						<img class="fix_zoom undrag" src="../img/confirm_step_pc.png" alt="01 内容入力 | 02 内容確認 | 03 完了">
					</div>
				</div>
			</div>

			<div class="view_tabsp">				
				<div class="wrapper_95">
					<div class="space_5"></div>
					<div class="space_2"></div>
					<img src="../img/confirm_title.png" alt="確認画面">
					<div class="space_05"></div>
					<p class="tb_mg0 txt_color_1 font_100 yugothic txt_center font_weight_500">下記内容をご確認いただき、よろしければ「送信する」ボタン<br/>
                    をクリックしてください。<br/>
                    修正する場合は、「入力画面に戻る」ボタンで前の画面にお戻<br/>
                    りください。
                    </p>
					<div class="space_1"></div>

					<div class="wrapper_70">
						<img class="fix_zoom undrag" src="../img/confirm_step_pc.png" alt="01 内容入力 | 02 内容確認 | 03 完了">
					</div>
				</div>
			</div>
        </div>
        
        <div class="space_2"></div>
        <section class="wrapper_100">
            <div class="cont_wrapper_60 txt_center">
                <form method="post" action="#form" enctype="multipart/form-data" novalidate  autocomplete="off">
                    <div class="entyr-form cont_wrapper_75">
                        <ul class="wrapper_100 txt_left">
                            <li class="width_100">
                                <label for="input-request" class="font_100 navy bold">お問い合わせ種別</label>
                                <p class="font_100 sp_padding_left">
                                    <?php if( $clean['inquiry'] === "1" ){ echo 'ご入居に関するお問い合わせ'; }
                                    elseif( $clean['inquiry'] === "2" ){ echo '設備に関するお問い合わせ'; }
                                    else{ echo ''; } ?>
                                </p>
                            </li>
                            <div class="space_2"></div>
                            <li class="width_100">
                                <label for="input-name" class="font_100 navy bold">お名前</label>
                                <p class="font_100 sp_padding_left"><?php echo $clean['your_name']; ?></p>
                            </li>
                            <div class="space_2"></div>
                            <li class="width_100">
                                <label for="input-company" class="font_100 navy bold">会社名</label>
                                <p class="font_100 sp_padding_left"><?php echo $clean['company_name']; ?></p>
                            </li>
                            <div class="space_2"></div>
                            <li class="width_100">
                                <label for="input-email" class="font_100 navy bold">メールアドレス</label>
                                <p class="font_100 sp_padding_left"><?php echo $clean['email']; ?></p>
                            </li>
                            <div class="space_2"></div>
                            <li class="width_100">
                                <label for="input-tel" class="font_100 navy bold">ご連絡先</label>
                                <p class="font_100 sp_padding_left"><?php echo $clean['tel']; ?></p>
                            </li>
                            <div class="space_2"></div>
                            <li class="widht_100">
                                <label for="input-text" class="font_100 navy bold">お問い合わせ詳細</label>
                                <p class="font_100 sp_padding_left"><?php echo nl2br($clean['contact']); ?></p>
                            </li>
                        </ul>
                        <hr class=" w_grey hr_1 tspace_2 bspace_2">
                        <p class="view_pctab font_75">内容をご確認の上、よろしければ下記の「送信する」ボタンを押してください。</p>
                        <p class="view_sp font_75">内容をご確認の上、よろしければ下記の「送信する」ボタン<br>を押してください。</p>
                    </div>

                    <div class="space_2"><!-- スペース --></div>

                    <div class="view_pc cont_wrapper_75 flex_2 enty-send-btn">
                        <input class="view_pc f_left width_30 square_btn white line_h_400 font_100 bold arial" style="background: #b1b1b1;"  type="submit" name="btn_back" value="戻　る">
                        <input class="view_pc f_right width_65 square_btn white bg_maroon line_h_400 font_100 bold arial" type="submit" name="btn_submit" value="送　信">
                    </div>
                    <div class="view_tabsp cont_wrapper_75 flex_2 enty-send-btn">
                        <input class="view_tabsp f_left width_30 square_btn white line_h_250 font_100 bold arial" style="background: #b1b1b1;"  type="submit" name="btn_back" value="戻　る">
                        <input class="view_tabsp f_right width_65 square_btn white bg_maroon line_h_250 font_100 bold arial" type="submit" name="btn_submit" value="送　信">
                    </div>

                    <input type="hidden" name="inquiry" value="<?php echo $clean['inquiry']; ?>">
                    <input type="hidden" name="your_name" value="<?php echo $clean['your_name']; ?>">
                    <input type="hidden" name="company_name" value="<?php echo $clean['company_name']; ?>">
                    <input type="hidden" name="email" value="<?php echo $clean['email']; ?>">
                    <input type="hidden" name="tel" value="<?php echo $clean['tel']; ?>">
                    <input type="hidden" name="contact" value="<?php echo $clean['contact']; ?>">
                    <input type="hidden" name="agreement" value="<?php echo $clean['agreement']; ?>">
                
                </form>
            </div>
        </section>
        <div class="space_5"></div>
    </main>

	<!-- Footer -->
	<footer>
        <div class="width_100 bg_foot">
            <div class="view_pc">
                <p class="tb_mg0 white font_65 txt_tpad_1 txt_bpad_1 hiraginokaku bold">Copyright (C) 2020 FG-Lab all rights reserved.</p>
            </div>

            <div class="view_tabsp">
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