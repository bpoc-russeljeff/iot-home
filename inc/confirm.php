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
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJLQ9VQ"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
 <!-- Desktop Navigation -->
<header class="view_pctab txt_tpad_1 txt_bpad_1">
        <div class="common_wrapper">
            <div class="width_100 flex flex_center">
                <div class="width_37">
                    <a href="../index.html">
                        <img class="fix_zoom" src="../img/logo.png">
                    </a>
                </div>
                <div class="width_5"></div>
            </div>
        </div>
    </header>

<!-- Mobile Navigation -->
<header class="view_sp shadow bg_white fixed_top">

	<div class="wrapper_95 flex flex_center">
		<div class="width_60 txt_center tspace_1 bspace_1">
			<a href="../index.html">
				<img src="../img/logo.png" alt="iot-home-logo">
			</a>
		</div>
		<div class="width_30"></div>
</header>

  <main>

  <div class="space_5"><!-- スペース --></div>

  <section class="wrapper_100">


  <div class="cont_wrapper_75 txt_center">
  <div class="space_5"><!-- スペース --></div>


  <div class="space_3"><!-- スペース --></div>
  <div class="view_tabsp space_2"><!-- スペース --></div>

    <form method="post" action="#form" enctype="multipart/form-data" novalidate  autocomplete="off">
          <div class="entyr-form cont_wrapper_75">
              <ul class="wrapper_100 txt_left">
                  <li class="width_100">
                      <label for="input-request" class="font_100 navy bold">&nbsp;お問い合わせ種別&nbsp;</label>
                      <p class="font_150">
                          <?php if( $clean['inquiry'] === "1" ){ echo 'ご入居に関するお問い合わせ'; }
                          elseif( $clean['inquiry'] === "2" ){ echo '設備に関するお問い合わせ'; }
                          else{ echo ''; } ?>
                      </p>
                      <hr class="view_tabsp w_grey hr_1 tspace_5 bspace_5">
                  </li>
                  <li class="width_100">
                      <label for="input-name" class="font_100 navy bold">&nbsp;お名前&nbsp;</label>
                      <p class="font_150"><?php echo $clean['your_name']; ?></p>
                      <hr class="view_tabsp w_grey hr_1 tspace_5 bspace_5">
                  </li>
                  <li class="width_100">
                      <label for="input-company" class="font_100 navy bold">&nbsp;会社名&nbsp;</label>
                      <p class="font_150"><?php echo $clean['company_name']; ?></p>
                      <hr class="view_tabsp w_grey hr_1 tspace_5 bspace_5">
                  </li>
                  <li class="width_100">
                      <label for="input-email" class="font_100 navy bold">&nbsp;E-Mail&nbsp;</label>
                      <p class="font_150"><?php echo $clean['email']; ?></p>
                      <hr class="view_tabsp w_grey hr_1 tspace_5 bspace_5">
                  </li>
                  <li class="width_100">
                      <label for="input-tel" class="font_100 navy bold">&nbsp;電話番号&nbsp;</label>
                      <p class="font_150"><?php echo $clean['tel']; ?></p>
                      <hr class="view_tabsp w_grey hr_1 tspace_5 bspace_5">
                  </li>
                  <li class="widht_100">
                      <label for="input-text" class="font_100 navy bold">&nbsp;お問い合わせ内容&nbsp;</label>
                      <p class="font_150"><?php echo nl2br($clean['contact']); ?></p>
                      <hr class="view_tabsp w_grey hr_1 tspace_5 bspace_5">
                  </li>
              </ul>
          </div>

  <div class="space_5"><!-- スペース --></div>

    <div class="view_pc wrapper_80 flex_2 enty-send-btn">
      <input class="view_pc col2_sp f_left  square_btn white bg_w_grey box_radius_10 line_h_200 font_200 bold arial" type="submit" name="btn_back" value="戻　る">
      <input class="view_pc col2_sp f_right  square_btn white bg_red box_radius_10 line_h_200 font_200 bold arial" type="submit" name="btn_submit" value="送　信">
    </div>
    <div class="view_tabsp wrapper_100 flex_2 enty-send-btn">
      <input class="view_tabsp col2_sp f_left square_btn white bg_w_grey box_radius_10 line_h_300 font_100 bold arial" type="submit" name="btn_back" value="戻　る">
      <input class="view_tabsp col2_sp f_right square_btn white bg_red box_radius_10 line_h_300 font_100 bold arial" type="submit" name="btn_submit" value="送　信">
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
    <div class="space_5"><!-- スペース --></div>
    <div class="space_3"><!-- スペース --></div>
  </section>

  </main>

  <footer class="wrapper_100 bg_black txt_center">
    
  </footer>
</body>

</html>