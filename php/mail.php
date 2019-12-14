<?php
require './PHPMailer/PHPMailerAutoload.php';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail = new PHPMailer(); // 建立新物件
$mail->IsSMTP(); // 設定使用SMTP方式寄信
$mail->SMTPAuth = true; // 設定SMTP需要驗證
$mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線
$mail->Host = "smtp.gmail.com"; // Gmail的SMTP主機
$mail->Port = 465; // Gmail的SMTP主機的port為465
$mail->CharSet = "utf-8"; // 設定郵件編碼
$mail->Encoding = "base64";
$mail->WordWrap = 50; // 每50個字元自動斷行
$mail->Username = "rwd1tw@gmail.com"; // 設定驗證帳號
$mail->Password = "168168&&"; // 設定驗證密碼
$mail->From = $email; // 設定寄件者信箱
$mail->FromName = $name; // 設定寄件者姓名
$mail->addAddress("carefreein0906@gmail.com"); // Name is optional
$mail->IsHTML(true); // 設定郵件內容為HTML

$mail->Subject = $subject; // 設定郵件標題
$mail->Body = $message;

if(!$mail->send()) {
echo 'Message could not be sent.';
echo 'Mailer Error:' . $mail->ErrorInfo;
}
else {
echo 'Message has been sent';
}
?>