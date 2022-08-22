<?php

include 'koneksi.php';
use PHPMailer\PHPMailer\PHPMailer;

require_once 'assets/phpmailer/Exception.php';
require_once 'assets/phpmailer/PHPMailer.php';
require_once 'assets/phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';
$alert2= '';

if(isset($_POST['submit'])){
  $name = $_POST['nama'];
  $email = $_POST['email'];
  $message = $_POST['pesan'];

  try{
    $query=mysqli_query($koneksi, "INSERT INTO pesan(email, nama, pesan) VALUES('$email', '$name', '$message')")
    or die(mysqli_error($koneksi));

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'nugrohorizki191@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'romas567'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('nugrohorizki191@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('nugrohorizki191@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received From Your Portofolio';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = 'success';
    $alert2= 'Message Sent! Thank you for contacting us.';
                
  } catch (Exception $e){
    $alert = 'error';
    $alert2= $e->getMessage();
  }
}
