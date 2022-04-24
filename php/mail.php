 <?php
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

$name=$_POST['name'];
$email=$_POST['email'];
$tel = $_POST['tel'];
$feedback=$_POST['feedback'];
$title = "Отзыв из веб-сайта";
$body = "<h2>Имя клиента: </h2>".htmlspecialchars($name, ENT_QUOTES)."</br>\n".
               "<strong>Телефон: </strong>".htmlspecialchars($tel, ENT_QUOTES)."</br>\n".
               "Адрес электронной почты клиента: ".htmlspecialchars($email, ENT_QUOTES)."</br>\n".
               "<strong>Текст письма:</strong></br>\n<p>".htmlspecialchars($feedback, ENT_QUOTES)."</p>\n";
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты/
   //  $mail->Username   = 'dizel2012@gmail.com'; // Логин на почте
   //  $mail->Password   = 'nczuchahokeefndw'; // Пароль приложения
    $mail->Username   = 'dizel2012@gmail.com'; // Логин на почте
    $mail->Password   = 'nczuchahokeefndw'; // Пароль приложения
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
   //  $mail->setFrom('sidorovaaliena@gmail.com', 'Письмо от визитки'); // Адрес самой почты и имя отправителя
    $mail->setFrom('dizel2012@gmail.com', 'Письмо от визитки'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('dizel@bk.ru');
   //  $mail->addAddress('youremail@gmail.com'); // Ещё один, если нужен

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";}
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отправка письма</title>
 </head>

 <body>
    <h1>Ваше письмо отправлено Алёне</h1>
    <p><?php echo nl2br(htmlspecialchars($feedback)); ?> </p>
    <a href="./index.html">Вернуться на главную</a>
 </body>

 </html>