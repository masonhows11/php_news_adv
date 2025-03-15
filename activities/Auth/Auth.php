<?php

namespace Auth;


use Database\Database;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Auth
{

    private string $currentDomain;
    private string $basePath;

    public function __construct()
    {
        $this->currentDomain = CURRENT_DOMAIN;
        $this->basePath = BASE_PATH;
    }

    protected function redirect($url): void
    {
        header('Location: ' . trim($this->currentDomain, '/ ') . '/' . trim($url));
        exit();
    }

    protected function redirectBack($url = null): void
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    private function hash($password)
    {
      return  $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    }

    private function random(): string
    {
        return bin2hex(openssl_random_pseudo_bytes(32));
    }

    public function activationMessage($user, $token): string
    {
        return "<h1>فعال سازس حساب کاربری</h1><br>" .
            "<p>'.$user.'عزیز برای فعال سازی حساب کاربری خود روی لینک زیر کلیک کنید</p>" .
            "<div><a href='فعال سازی حساب کابری'></a></div>";
    }

    private function sendMail($email, $subject, $body, array $attachment = [])
    {
        $mail = new PHPMailer(true);


        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = MAIL_HOST;                     //Set the SMTP server to send through
        $mail->SMTPAuth = SMTP_AUTH;                                   //Enable SMTP authentication
        $mail->Username = MAIL_USERNAME;                     //SMTP username
        $mail->Password = MAIL_PASS;                               //SMTP password
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->SMTPSecure = 'tls';
        $mail->Port = MAIL_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom(SENDER_MAIL, SENDER_NAME);
        $mail->addAddress('mason.hows11@gmail.com', 'Mason hows');     //Add a recipient
//            $mail->addAddress('ellen@example.com');               //Name is optional
//            $mail->addReplyTo('info@example.com', 'Information');
//            $mail->addCC('cc@example.com');
//            $mail->addBCC('bcc@example.com');

        //Attachments
//            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        try {
            $mail->send();
            // echo 'Message has been sent';
            return true;
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return false;
        }
    }


    public function register_form()
    {

        view('template.auth.register');
    }


    public function register($request)
    {

        if (empty($_POST['email']) && empty($_POST['name']) && empty($_POST['password'])) {

            $this->redirectBack();

        } elseif (strlen($_POST['password']) < 8) {

            $this->redirectBack();

        } elseif (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
            $this->redirectBack();
        } else {

            $db = new Database();
            $user = $db->select('SELECT * FROM users WHERE email = ?', $request['email'])->fetch();
            if (!empty($user)) {

                $this->redirectBack();
            } else {
                $randomToken = $this->random();
                $activationMessage = $this->activationMessage($user['name'], $randomToken);
                $result = $this->sendMail($user['email'], 'فعال سازی حساب کاربری', $activationMessage);
                if ($result) {
                    $request['verify_token'] = $randomToken;
                    $request['password'] = $this->hash($request['password']);
                    $db->insert('users',array_keys($request),$request);
                }

            }
        }

    }


    public function login_form()
    {

        view('template.auth.login');
    }


    public function login($request)
    {

    }

}