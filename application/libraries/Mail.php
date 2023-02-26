<?php
/**
 * PHPMailer for Codeigniter
 *
 * @package        	CodeIgniter
 * @category    	Libraries
 * @porting author	Masriadi
 *
 * @version		1.0
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail
{
	public function send_mail($params = array()) {
		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(TRUE);

		try {
		    //Server settings
		    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
		    $mail->isSMTP();
		    $mail->Host       = 'ssl://mail.kuansing.go.id';
		    $mail->SMTPAuth   = TRUE;
		    $mail->Username   = 'simpan.spbe@kuansing.go.id';
		    $mail->Password   = 'G~+}Bbd$Aw8P';
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		    $mail->Port       = 465;

		    //Recipients
		    $mail->setFrom('simpan.spbe@kuansing.go.id', 'Simpan SPBE');
		    $mail->addAddress($params['to']);

		    // Content
		    $mail->isHTML(TRUE);
		    $mail->Subject = $params['subject'];
		    $mail->Body    = $params['message'];

		    $mail->send();
		    return TRUE;
		} catch (Exception $e) {
		    log_message('error', $mail->ErrorInfo);
		    return FALSE;
		}
	}
}
