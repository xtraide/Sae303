<?php

namespace App\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;





class Mail
{


    /**
     * envoie un mail  
     * 
     * @param $addAddress  adresse mail de la victime
     * @param $subject sujet du mail 
     * @param $Body body du mail 
     * @param $pdfid id de la reservation 
     * 
     * */
    public static function sendmail(string $addAddress = "thieblemontnicolas@gmail.com", $token, $id)

    {

        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $mail->Username = 'proxtraide@gmail.com';                     //SMTP username
            $mail->Password = 'wgbyelugxrsewiox';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Host = 'smtp.gmail.com';                             //Set the SMTP server to send through
            $mail->Port = 587;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('noreply@gmail.com', 'ne pas repondre');
            $mail->addAddress($addAddress);       //Add a recipient

            //Attachments
            //Optional name


            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ]
            ];
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = self::getSubject();
            $mail->Body    = self::getBody($token, $id);


            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    private  static function getSubject()
    {
        return "validation de votre compte";
    }
    private  static function getBody($token, $id)
    {
        $verificationLink = "localhost/iut/Sae303/public/index?page=user.VerifyAccount&id=$id&token=$token"; // Replace with your actual verification link
        $body = "<h1>Welcome to Our Website</h1>";
        $body .= "<p>Thank you for signing up. Please click the link below to verify your account:</p>";
        $body .= "<a href='{$verificationLink}'>Verify Account</a>";
        $body .= "<p>If you did not sign up for this account, you can ignore this email.</p>";
        $body .= "<p>Thanks,</p>";
        $body .= "<p>Your Website Team</p>";
        return $body;
    }
}
