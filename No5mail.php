<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
  
require("PHPMailer-master/class.phpmailer.php");
$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->Host = 'ssl://smtp.gmail.com:465';
$mailer->SMTPAuth = TRUE;
$mailer->Username = 'sasakisystema@gmail.com';  //①Gmailのアカウント名
$mailer->Password = 'sasaki!sasaki';  //②Gmailのパスワード
$mailer->From     = 'sasakisystema@gmail.com';  //③Fromのメールアドレス
$fromname = "システム演習A"; //fromの名前
$mailer->FromName = mb_encode_mimeheader(mb_convert_encoding($fromname,"JIS","UTF-8"));
$subject = "確認メールです"; //メールの件名
$mailer->Subject  = mb_encode_mimeheader(mb_convert_encoding($subject,"JIS","UTF-8"));
$mailmain = "PHPからメール送信の\r\nテスト中です〜";
$mailer->Body     = mb_convert_encoding($mailmain,"JIS","UTF-8");
$mailer->AddAddress('hoge@hoge.org'); // 宛先
// $mailer->AddReplyTo($email, $from);

if(!$mailer->Send()){
   echo "Message was not sent<br/ >";
   echo "Mailer Error: " . $mailer->ErrorInfo;
} else {
   echo "Message has been sent";
}
?>