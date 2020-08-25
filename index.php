<?php
// 変数の初期化
$clean = array();
$error = array();
// サニタイズ
if( !empty($_POST) ) {
	foreach( $_POST as $key => $value ) {
		$clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
	} 
}
// 文字成型
$clean['tel'] = str_replace(array('-', 'ー', '−', '―', '‐'), '', $clean['tel']);
$clean['tel'] = str_replace(array(" ", "　"), "", $clean['tel']);
$clean['tel'] = mb_convert_kana($clean['tel'], "n");
$clean['email'] = str_replace(array(" ", "　"), "", $clean['email']);
$clean['email'] = mb_convert_kana($clean['email'], "askhc");
if( !empty($clean['btn_confirm']) ) {
	$error = validation($clean);
	if( empty($error) ) {
		$page_flag = 1;
		// セッションの書き込み
		session_start();
		$_SESSION['page'] = true;		
	}
} elseif( !empty($clean['btn_submit']) ) {
	session_start();
	if( !empty($_SESSION['page']) && $_SESSION['page'] === true ) {
		// セッションの削除
		unset($_SESSION['page']);
		$page_flag = 2;
		// 変数とタイムゾーンを初期化
		$header = null;
		$body = null;
		$admin_body = null;
		$auto_reply_subject = null;
		$auto_reply_text = null;
		$admin_reply_subject = null;
		$admin_reply_text = null;
		date_default_timezone_set('Asia/Tokyo');
		
		//日本語の使用宣言
		mb_language("ja");
		mb_internal_encoding("UTF-8");
	
		$header = "MIME-Version: 1.0\n";
		$header = "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
		$header .= "From: sales@e-vision.co.jp\n";
		$header .= "Reply-To: sales@e-vision.co.jp\n";
	
		// 件名を設定
		$auto_reply_subject = 'お問い合わせありがとうございます。';
	
		// 本文を設定
		$auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。\n下記の内容でお問い合わせを受け付けました。\n\n";
		$auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
		$auto_reply_text .= "お名前：" . $clean['your_name'] . "\n";
		$auto_reply_text .= "電話番号：" . $clean['tel'] . "\n";
		$auto_reply_text .= "E-Mail：" . $clean['email'] . "\n";
		$auto_reply_text .= "会社名（店舗名）：" . $clean['company_name'] . "\n";
		$auto_reply_text .= "宅建番号：" . $clean['num'] . "\n";

		if( $clean['area'] === "1" ){
			$auto_reply_text .= "お住まいの地域：北海道\n";
		} elseif ( $clean['area'] === "2" ){
			$auto_reply_text .= "お住まいの地域：青森県\n";
		} elseif ( $clean['area'] === "3" ){
			$auto_reply_text .= "お住まいの地域：岩手県\n";
		} elseif ( $clean['area'] === "4" ){
			$auto_reply_text .= "お住まいの地域：宮城県\n";
		} elseif ( $clean['area'] === "5" ){
			$auto_reply_text .= "お住まいの地域：秋田県\n";
		} elseif ( $clean['area'] === "6" ){
			$auto_reply_text .= "お住まいの地域：山形県\n";
		} elseif ( $clean['area'] === "7" ){
			$auto_reply_text .= "お住まいの地域：福島県\n";
		} elseif ( $clean['area'] === "8" ){
			$auto_reply_text .= "お住まいの地域：茨城県\n";
		} elseif ( $clean['area'] === "9" ){
			$auto_reply_text .= "お住まいの地域：栃木県\n";
		} elseif ( $clean['area'] === "10" ){
			$auto_reply_text .= "お住まいの地域：群馬県\n";
		} elseif( $clean['area'] === "11" ){
			$auto_reply_text .= "お住まいの地域：埼玉県\n";
		} elseif ( $clean['area'] === "12" ){
			$auto_reply_text .= "お住まいの地域：千葉県\n";
		} elseif ( $clean['area'] === "13" ){
			$auto_reply_text .= "お住まいの地域：東京都\n";
		} elseif ( $clean['area'] === "14" ){
			$auto_reply_text .= "お住まいの地域：神奈川県\n";
		} elseif ( $clean['area'] === "15" ){
			$auto_reply_text .= "お住まいの地域：新潟県\n";
		} elseif ( $clean['area'] === "16" ){
			$auto_reply_text .= "お住まいの地域：富山県\n";
		} elseif ( $clean['area'] === "17" ){
			$auto_reply_text .= "お住まいの地域：石川県\n";
		} elseif ( $clean['area'] === "18" ){
			$auto_reply_text .= "お住まいの地域：福井県\n";
		} elseif ( $clean['area'] === "19" ){
			$auto_reply_text .= "お住まいの地域：山梨県\n";
		} elseif ( $clean['area'] === "20" ){
			$auto_reply_text .= "お住まいの地域：長野県\n";
		} elseif ( $clean['area'] === "21" ){
			$auto_reply_text .= "お住まいの地域：岐阜県\n";
		} elseif ( $clean['area'] === "22" ){
			$auto_reply_text .= "お住まいの地域：静岡県\n";
		} elseif ( $clean['area'] === "23" ){
			$auto_reply_text .= "お住まいの地域：愛知県\n";
		} elseif ( $clean['area'] === "24" ){
			$auto_reply_text .= "お住まいの地域：三重県\n";
		} elseif ( $clean['area'] === "25" ){
			$auto_reply_text .= "お住まいの地域：滋賀県\n";
		} elseif ( $clean['area'] === "26" ){
			$auto_reply_text .= "お住まいの地域：京都府\n";
		} elseif ( $clean['area'] === "27" ){
			$auto_reply_text .= "お住まいの地域：大阪府\n";
		} elseif ( $clean['area'] === "28" ){
			$auto_reply_text .= "お住まいの地域：兵庫県\n";
		} elseif ( $clean['area'] === "29" ){
			$auto_reply_text .= "お住まいの地域：奈良県\n";
		} elseif ( $clean['area'] === "30" ){
			$auto_reply_text .= "お住まいの地域：和歌山県\n";
		} elseif ( $clean['area'] === "31" ){
			$auto_reply_text .= "お住まいの地域：鳥取県\n";
		} elseif ( $clean['area'] === "32" ){
			$auto_reply_text .= "お住まいの地域：島根県\n";
		} elseif ( $clean['area'] === "33" ){
			$auto_reply_text .= "お住まいの地域：岡山県\n";
		} elseif ( $clean['area'] === "34" ){
			$auto_reply_text .= "お住まいの地域：広島県\n";
		} elseif ( $clean['area'] === "35" ){
			$auto_reply_text .= "お住まいの地域：山口県\n";
		} elseif ( $clean['area'] === "36" ){
			$auto_reply_text .= "お住まいの地域：徳島県\n";
		} elseif ( $clean['area'] === "37" ){
			$auto_reply_text .= "お住まいの地域：香川県\n";
		} elseif ( $clean['area'] === "38" ){
			$auto_reply_text .= "お住まいの地域：愛媛県\n";
		} elseif ( $clean['area'] === "39" ){
			$auto_reply_text .= "お住まいの地域：高知県\n";
		} elseif ( $clean['area'] === "40" ){
			$auto_reply_text .= "お住まいの地域：福岡県\n";
		} elseif ( $clean['area'] === "41" ){
			$auto_reply_text .= "お住まいの地域：佐賀県\n";
		} elseif ( $clean['area'] === "42" ){
			$auto_reply_text .= "お住まいの地域：長崎県\n";
		} elseif ( $clean['area'] === "43" ){
			$auto_reply_text .= "お住まいの地域：熊本県\n";
		} elseif ( $clean['area'] === "44" ){
			$auto_reply_text .= "お住まいの地域：大分県\n";
		} elseif ( $clean['area'] === "45" ){
			$auto_reply_text .= "お住まいの地域：宮崎県\n";
		} elseif ( $clean['area'] === "46" ){
			$auto_reply_text .= "お住まいの地域：鹿児島県\n";
		} elseif ( $clean['area'] === "47" ){
			$auto_reply_text .= "お住まいの地域：沖縄県\n";
		} else {
			$auto_reply_text .= "お住まいの地域：\n";
		}
		
		$auto_reply_text .= "お問い合わせ種別：";
		if( $clean['request1'] === "1" ){
			$auto_reply_text .= "売買物件管理・ポータル連動　";
		}
		if ( $clean['request2'] === "2" ){
			$auto_reply_text .= "賃貸物件管理・ポータル連動　";
		}
		if ( $clean['request3'] === "3" ){
			$auto_reply_text .= "自社ホームページ作成　";
		}
		if ( $clean['request4'] === "4" ){
			$auto_reply_text .= "顧客管理　";
		}
		if ( $clean['request5'] === "5" ){
			$auto_reply_text .= "その他　";
		}
		$auto_reply_text .= "\n";

		$auto_reply_text .= "お問い合わせ内容：" . nl2br($clean['contact']) . "\n\n";
		$auto_reply_text .= "株式会社イー・ビジョン";
		
		// テキストメッセージをセット
		$body = "--__BOUNDARY__\n";
		$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
		$body .= $auto_reply_text . "\n";
		$body .= "--__BOUNDARY__\n";
	
		// 自動返信メール送信
		mb_send_mail( $clean['email'], $auto_reply_subject, $body, $header);
	
		// 運営側へ送るメールの件名
		$admin_reply_subject = "お問い合わせを受け付けました";
	
		// 本文を設定
		$admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
		$admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
		$admin_reply_text .= "お名前：" . $clean['your_name'] . "\n";
		$admin_reply_text .= "電話番号：" . $clean['tel'] . "\n";
		$admin_reply_text .= "E-Mail：" . $clean['email'] . "\n";
		$admin_reply_text .= "会社名（店舗名）：" . $clean['company_name'] . "\n";
		$admin_reply_text .= "宅建番号：" . $clean['num'] . "\n";
		
		if( $clean['area'] === "1" ){
			$admin_reply_text .= "お住まいの地域：北海道\n";
		} elseif ( $clean['area'] === "2" ){
			$admin_reply_text .= "お住まいの地域：青森県\n";
		} elseif ( $clean['area'] === "3" ){
			$admin_reply_text .= "お住まいの地域：岩手県\n";
		} elseif ( $clean['area'] === "4" ){
			$admin_reply_text .= "お住まいの地域：宮城県\n";
		} elseif ( $clean['area'] === "5" ){
			$admin_reply_text .= "お住まいの地域：秋田県\n";
		} elseif ( $clean['area'] === "6" ){
			$admin_reply_text .= "お住まいの地域：山形県\n";
		} elseif ( $clean['area'] === "7" ){
			$admin_reply_text .= "お住まいの地域：福島県\n";
		} elseif ( $clean['area'] === "8" ){
			$admin_reply_text .= "お住まいの地域：茨城県\n";
		} elseif ( $clean['area'] === "9" ){
			$admin_reply_text .= "お住まいの地域：栃木県\n";
		} elseif ( $clean['area'] === "10" ){
			$admin_reply_text .= "お住まいの地域：群馬県\n";
		} elseif( $clean['area'] === "11" ){
			$admin_reply_text .= "お住まいの地域：埼玉県\n";
		} elseif ( $clean['area'] === "12" ){
			$admin_reply_text .= "お住まいの地域：千葉県\n";
		} elseif ( $clean['area'] === "13" ){
			$admin_reply_text .= "お住まいの地域：東京都\n";
		} elseif ( $clean['area'] === "14" ){
			$admin_reply_text .= "お住まいの地域：神奈川県\n";
		} elseif ( $clean['area'] === "15" ){
			$admin_reply_text .= "お住まいの地域：新潟県\n";
		} elseif ( $clean['area'] === "16" ){
			$admin_reply_text .= "お住まいの地域：富山県\n";
		} elseif ( $clean['area'] === "17" ){
			$admin_reply_text .= "お住まいの地域：石川県\n";
		} elseif ( $clean['area'] === "18" ){
			$admin_reply_text .= "お住まいの地域：福井県\n";
		} elseif ( $clean['area'] === "19" ){
			$admin_reply_text .= "お住まいの地域：山梨県\n";
		} elseif ( $clean['area'] === "20" ){
			$admin_reply_text .= "お住まいの地域：長野県\n";
		} elseif ( $clean['area'] === "21" ){
			$admin_reply_text .= "お住まいの地域：岐阜県\n";
		} elseif ( $clean['area'] === "22" ){
			$admin_reply_text .= "お住まいの地域：静岡県\n";
		} elseif ( $clean['area'] === "23" ){
			$admin_reply_text .= "お住まいの地域：愛知県\n";
		} elseif ( $clean['area'] === "24" ){
			$admin_reply_text .= "お住まいの地域：三重県\n";
		} elseif ( $clean['area'] === "25" ){
			$admin_reply_text .= "お住まいの地域：滋賀県\n";
		} elseif ( $clean['area'] === "26" ){
			$admin_reply_text .= "お住まいの地域：京都府\n";
		} elseif ( $clean['area'] === "27" ){
			$admin_reply_text .= "お住まいの地域：大阪府\n";
		} elseif ( $clean['area'] === "28" ){
			$admin_reply_text .= "お住まいの地域：兵庫県\n";
		} elseif ( $clean['area'] === "29" ){
			$admin_reply_text .= "お住まいの地域：奈良県\n";
		} elseif ( $clean['area'] === "30" ){
			$admin_reply_text .= "お住まいの地域：和歌山県\n";
		} elseif ( $clean['area'] === "31" ){
			$admin_reply_text .= "お住まいの地域：鳥取県\n";
		} elseif ( $clean['area'] === "32" ){
			$admin_reply_text .= "お住まいの地域：島根県\n";
		} elseif ( $clean['area'] === "33" ){
			$admin_reply_text .= "お住まいの地域：岡山県\n";
		} elseif ( $clean['area'] === "34" ){
			$admin_reply_text .= "お住まいの地域：広島県\n";
		} elseif ( $clean['area'] === "35" ){
			$admin_reply_text .= "お住まいの地域：山口県\n";
		} elseif ( $clean['area'] === "36" ){
			$admin_reply_text .= "お住まいの地域：徳島県\n";
		} elseif ( $clean['area'] === "37" ){
			$admin_reply_text .= "お住まいの地域：香川県\n";
		} elseif ( $clean['area'] === "38" ){
			$admin_reply_text .= "お住まいの地域：愛媛県\n";
		} elseif ( $clean['area'] === "39" ){
			$admin_reply_text .= "お住まいの地域：高知県\n";
		} elseif ( $clean['area'] === "40" ){
			$admin_reply_text .= "お住まいの地域：福岡県\n";
		} elseif ( $clean['area'] === "41" ){
			$admin_reply_text .= "お住まいの地域：佐賀県\n";
		} elseif ( $clean['area'] === "42" ){
			$admin_reply_text .= "お住まいの地域：長崎県\n";
		} elseif ( $clean['area'] === "43" ){
			$admin_reply_text .= "お住まいの地域：熊本県\n";
		} elseif ( $clean['area'] === "44" ){
			$admin_reply_text .= "お住まいの地域：大分県\n";
		} elseif ( $clean['area'] === "45" ){
			$admin_reply_text .= "お住まいの地域：宮崎県\n";
		} elseif ( $clean['area'] === "46" ){
			$admin_reply_text .= "お住まいの地域：鹿児島県\n";
		} elseif ( $clean['area'] === "47" ){
			$admin_reply_text .= "お住まいの地域：沖縄県\n";
		} else {
			$admin_reply_text .= "お住まいの地域：\n";
		}
		$admin_reply_text .= "お問い合わせ種別：";
		if( $clean['request1'] === "1" ){
			$admin_reply_text .= "売買物件管理・ポータル連動　";
		}
		if ( $clean['request2'] === "2" ){
			$admin_reply_text .= "賃貸物件管理・ポータル連動　";
		}
		if ( $clean['request3'] === "3" ){
			$admin_reply_text .= "自社ホームページ作成　";
		}
		if ( $clean['request4'] === "4" ){
			$admin_reply_text .= "顧客管理　";
		}
		if ( $clean['request5'] === "5" ){
			$admin_reply_text .= "その他　";
		}
		$admin_reply_text .= "\n";
	
		$admin_reply_text .= "お問い合わせ内容：" . nl2br($clean['contact']) . "\n\n";
		
		// テキストメッセージをセット
		$body = "--__BOUNDARY__\n";
		$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
		$body .= $admin_reply_text . "\n";
		$body .= "--__BOUNDARY__\n";
	
		// 管理者へメール送信
		// mb_send_mail( 'k.kobayashi@adlive.asia', $admin_reply_subject, $body, $header);
		mb_send_mail( 'russel.jeff@bpoc.co.jp', $admin_reply_subject, $body, $header);
		
	} else {
		$page_flag = 0;
	}	
}
function validation($data) {
	$error = array();
	// 氏名のバリデーション
	if( empty($data['your_name']) ) {
		$error['your_name'] = "「氏名」は入力必須項目です。";
	} elseif( 20 < mb_strlen($data['your_name']) ) {
		$error['your_name'] = "20文字以内で入力してください。";
	}
	// メールアドレスのバリデーション//
	if( empty($data['email']) ) {
		$error['email'] = "「メールアドレス」は入力必須項目です。";
	} elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email']) ) {
		$error['email'] = "正しい形式で入力してください。";
	}
	// ホームページURLのバリデーション
//	if( empty($data['url']) ) {
//		$error['url'] = "「メールアドレス」は入力必須項目です。";
//	} elseif( !preg_match( '/^(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)$/', $data['url']) ) {
//		$error['url'] = "正しい形式で入力してください。";
//	}
	// 電話番号のバリデーション
	if( empty($data['tel']) ) {
		$error['tel'] = "「メールアドレス」は入力必須項目です。";
	} elseif( !preg_match( '/^[0-9]+[0-9.-]+$/', $data['tel']) ) {
		$error['tel'] = "正しい形式で入力してください。";
	}
	// 地域のバリデーション
//	if( empty($data['area']) ) {
//		$error['area'] = "「郵便番号」は入力必須項目です。";
//	} elseif( !preg_match( '/^[0-9]+[0-9.-]+$/', $data['area']) ) {
//		$error['area'] = "正しい形式で入力してください。";
//	}
	// 住所のバリデーション
//	if( empty($data['address']) ) {
//		$error['address'] = "「住所」は入力必須項目です。";
//	}
	// 性別のバリデーション
//	if( empty($data['gender']) ) {
//		$error['gender'] = "「性別」は入力必須項目です。";
//	} elseif( $data['gender'] !== 'male' && $data['gender'] !== 'female' ) {
//		$error['gender'] = "「性別」は入力必須項目です。";
//	}
	// 年齢のバリデーション
//	if( empty($data['age']) ) {
//		$error['age'] = "「年齢」は入力必須項目です。";
//	} elseif( (int)$data['age'] < 1 || 6 < (int)$data['age'] ) {
//		$error['age'] = "「年齢」は入力必須項目です。";
//	}
	// ご訪問希望日のバリデーション
//	if( empty($data['date']) ) {
//		$error['date'] = "「ご訪問希望日」は入力必須項目です。";
//	}
	// お問い合わせ内容のバリデーション
//	if( empty($data['contact']) ) {
//		$error['contact'] = "「お問い合わせ内容」は入力必須項目です。";
//	}
	// プライバシーポリシー同意のバリデーション
	if( empty($data['agreement']) ) {
		$error['agreement'] = "プライバシーポリシーをご確認ください。";
	} elseif( (int)$data['agreement'] !== 1 ) {
		$error['agreement'] = "プライバシーポリシーをご確認ください。";
	}
	return $error;
}
?>

<?php if( $page_flag === 1 ):
	// 確認画面読み込み
require_once(dirname(__FILE__)."/inc/confirm.html");
 ?>
<?php elseif( $page_flag === 2 ):
	// サンクスページへリダイレクト
$url = "https://www.e-vision.co.jp/lp/inc/thanks.php";
header('Location: ' . $url, true, 301);
exit;
 ?>
<?php else:
	// フォーム画面読み込み
require_once(dirname(__FILE__)."/inc/form.html");
 ?>
<?php endif; ?>
