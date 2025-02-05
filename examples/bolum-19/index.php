<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'config.php';

if(!empty($_POST)){
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true); // try catch bloğu kullanılacaksa true verilmeli

    try{
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls'; // ssl
        $mail->Port = $port; // ssl için 465
        $mail->Host = $host;
        $mail->Username = $username;
        $mail->Password = $password;

        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->isHTML(true);

        $mail->addAddress("info@sadikuran.com");
        $mail->send();
        echo "mail başarıyla gönderildi";

    }
    catch(Exception $e){
        echo "mail hatası ".$mail->ErrorInfo;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="container my-3">
        <form method="post">
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Mesaj</label>
                <textarea name="message" id="message" class="form-control"></textarea>
            </div>
            <button type="submit" name="sendEmail" class="btn btn-primary">Gönder</button>
        </form>
    </div>

</body>

</html>