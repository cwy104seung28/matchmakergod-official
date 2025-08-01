<?php
require_once 'zutil/setting.php';
require_once 'vendor/autoload.php';
require_once 'PHPMailer/PHPMailerAutoload.php';



$phpmailer = new PHPMailer();
$phpmailer->SetLanguage('zh', '/PHPMailer/language/');
$phpmailer->ContentType = "text/html";
$phpmailer->CharSet = "UTF-8";
$phpmailer->Encoding = "base64";
$phpmailer->Timeout = 60;
/////////////////////////////////////////////////////////////////

$phpmailer->SingleTo = true; //will send mail to each email address individually


$phpmailer->IsSMTP();
$phpmailer->SMTPDebug = 2; //上線應該要刪掉
$phpmailer->SMTPAuth = true;
$phpmailer->SMTPSecure = "ssl";
$phpmailer->Host = "smtp.gmail.com";
$phpmailer->Port = 465;
$phpmailer->Username = "sendmail@goods-design.com.tw";
$phpmailer->Password = "jojegzonugxayyrv";


$phpmailer->SetFrom('sendmail@goods-design.com.tw', '優源科技');
$phpmailer->AddReplyTo('sendmail@goods-design.com.tw', '優源科技');

$phpmailer->AddAddress('ts01173166@gmail.com', '優源科技-聯絡我們通知');

// $phpmailer->AddBCC('ts01173166@gmail.com', '優源科技-聯絡我們通知');






if (!isset($_SESSION['checkPost'])) {

  header("Location: ./");
  exit;

}



if($_SESSION['checkPost'] == 1 ){

  unset($_SESSION['checkPost']);

  header("Location: ./");
  exit;

}




if ( isset($_SESSION['checkPost']) && $_SESSION['checkPost'] == 0 && $_SERVER['REQUEST_METHOD'] === 'POST'){



  $_SESSION['checkPost'] = 1;



  $m_name = strip_tags(addslashes(trim($_POST['name'])));
  $m_phone = strip_tags(addslashes(trim($_POST['phone'])));
  $m_message = strip_tags(addslashes(trim($_POST['message'])));




  // mail
  $phpmailer->Subject = "優源科技-聯絡我們通知 - $m_name";


  $mailContent = "<div style='max-width: 500px; letter-spacing: 1px;'>"

  ."優源科技官網管理員，您好！<br><br>"

  ."==================================================<br><br><br>"

  ."姓名： $m_name <br><br>"

  ."電話： $m_phone <br><br>"

  ."<div style='line-height: 2;'>"

  ."內容： $m_message <br><br>"

  ."</div>"

  ."==================================================<br><br>"

  ."請您盡快回覆客戶，謝謝。<br><br><br>"

  ."<div style='color: red;'>此為系統發信，請勿直接回覆。</div>"

  ."</div>";



  $phpmailer->Body = $mailContent;

  $phpmailer->IsHTML(true);



  if(!$phpmailer->Send()) {

    echo "傳送時失敗，請稍後再試，或連絡客服！";

  }





  // graphql
  $tokensquery = <<<GRAPHQL
mutation loginMutation {
  login(
    input: {username: "ryder", password: "h[_]I[rfQWJ;", clientMutationId: "uniqueId"}
  ) {
    authToken
    refreshToken
  }
}
GRAPHQL;

  $token = graphqlQuery($tokensquery)->login->authToken;


  $contactquery = <<<GRAPHQL
mutation createContact {
	createContact(input: { title: "$m_name", phone: "$m_phone", message: "$m_message" }) {
		contact {
			id
		}
	}
}
GRAPHQL;

  $work = graphqlCreate($contactquery, $token);



  unset($_SESSION['checkPost']);

}else{

  unset($_SESSION['checkPost']);

  header("Location: ./");
  exit;
}

