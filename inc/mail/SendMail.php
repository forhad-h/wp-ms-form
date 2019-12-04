<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once dirname(__FILE__).'/lib/PHPMailer/src/Exception.php';
require_once dirname(__FILE__)."/lib/PHPMailer/src/PHPMailer.php";
require_once dirname(__FILE__)."/template/index.php";

$emailFrom = "admin@reservecar.technowand.biz";
$emailTo = "forhad19s@gmail.com";

$mail = new PHPMailer(TRUE);

if($_SERVER["REQUEST_METHOD"] == "POST") {

  try{
      $mail->isHTML(true);
      // Set the mail sender.
      $mail->setFrom($emailFrom, 'WILSON Auto');
      // Add a recipient.
      $mail->addAddress($emailTo);
      // Set the subject.
      $mail->Subject = 'Accident Management & Replacement Vehicles';
      // Set the mail message body.
      $mail->Body = emailMessage();

      // Attachments
      $reg_paper_files = $_FILES['id_reg_papers'];
      $licence_scan_file = $_FILES['id_licencse_scan'];

      if($reg_paper_files['tmp_name']) {
          $mail->addAttachment($_FILES['id_reg_papers']['tmp_name'], $_FILES['id_reg_papers']['name']);
      }
      if($licence_scan_file['tmp_name']) {
          $mail->addAttachment($_FILES['id_licencse_scan']['tmp_name'], $_FILES['id_licencse_scan']['name']);
      }

      /* Finally send the mail. */
      $mail->send();
      header("Location: http://reservecar.technowand.biz/");
      exit();
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

}
