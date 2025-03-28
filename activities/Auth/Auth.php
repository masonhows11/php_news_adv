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
        return $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    }

    private function random(): string
    {
        return bin2hex(openssl_random_pseudo_bytes(32));
    }

    public function activationMessage($user, $token): string
    {
        $url = url('activation/' . $token);
        return "<h1>فعال سازس حساب کاربری</h1><br>" .
            "<p style='font-weight: bold'> عزیز برای فعال سازی حساب کاربری خود روی لینک زیر کلیک کنید $user  </p> " .
            "<div><a style='font-weight: bold' href='$url'>فعال سازی حساب کابری</a></div>";
    }

    public function forgotMessage($user, $token): string
    {
        $url = url('change_password/' . $token);
        return "<h1>فراموشی رمز عبور</h1><br>" .
            "<p style='font-weight: bold'> عزیز برای تغییر رمز عبور حساب کاربری خود روی لینک زیر کلیک کنید $user  </p> " .
            "<div><a style='font-weight: bold' href='$url'>تغییر رمز عیور</a></div>";
    }

    private function sendMail($email, $subject, $body, array $attachment = [])
    {
        $mail = new PHPMailer(true);

        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();                 //Send using SMTP
        $mail->Host = MAIL_HOST;     //Set the SMTP server to send through
        $mail->SMTPAuth = SMTP_AUTH;     //Enable SMTP authentication
        $mail->Username = MAIL_USERNAME; //SMTP username
        $mail->Password = MAIL_PASS;     //SMTP password
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->SMTPSecure = 'tls';
        $mail->Port = MAIL_PORT; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom(SENDER_MAIL, SENDER_NAME);
        $mail->addAddress('mason.hows11@gmail.com', 'Mason hows'); //Add a recipient
        //            $mail->addAddress('ellen@example.com');               //Name is optional
        //            $mail->addReplyTo('info@example.com', 'Information');
        //            $mail->addCC('cc@example.com');
        //            $mail->addBCC('bcc@example.com');

        //Attachments
        //      $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //      $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true); //Set email format to HTML
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

    public function register_form(): void
    {

        view('template.auth.register');
    }

    public function register($request): void
    {

        if (empty($_POST['email']) && empty($_POST['name']) && empty($_POST['password'])) {

            flashMessage('register_error', 'تمامی فیلدها الزامی می باشند');
            $this->redirectBack();

        } elseif (strlen($_POST['password']) < 8) {

            flashMessage('register_error', 'رمز عبور وارد شده حداقل 8 کاراکتر باید باشد');
            $this->redirectBack();

        } elseif (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {

            flashMessage('register_error', 'ایمیل وارد شده معتبر نمی باشد');
            $this->redirectBack();

        } else {

            $db = new Database();
            $user = $db->select('SELECT * FROM users WHERE email = ?', [$request['email']])->fetch();

            if (!empty($user)) {
                flashMessage('register_error', 'ایمیل وارد شده تکراری  است');
                $this->redirectBack();

            } else {
                $randomToken = $this->random();
                $activationMessage = $this->activationMessage($request['name'], $randomToken);
                $result = $this->sendMail($request['email'], 'فعال سازی حساب کاربری', $activationMessage);
                // if email send user register & redirect to login page
                if ($result) {
                    $request['verify_token'] = $randomToken;
                    $request['password'] = $this->hash($request['password']);
                    $db->insert('users', array_keys($request), $request);
                    $this->redirect('login');
                } else {
                    // if email not send user redirect back
                    flashMessage('register_error', 'ارسال ایمیل موفقیت آمیز نبوده');
                    $this->redirectBack();
                }

            }
        }

    }

    public function login_form(): void
    {

        view('template.auth.login');
    }

    public function activation($token)
    {
        $db = new Database();
        $user = $db->select("SELECT * FROM users WHERE verify_token = ? AND is_active = 0", [$token])->fetch();
        if (empty($user)) {

            $this->redirect('login');

        } else {

            flashMessage('register_success', 'حساب کاربری با موفقیت فعال شد');
            $db->update('users', $user['id'], ['is_active'], [1]);
            $this->redirect('login');
        }

    }

    public function login($request)
    {
        if (empty($_POST['email']) && empty($_POST['password'])) {

            flashMessage('login_error', 'تمامی فیلدها الزامی می باشند');
            $this->redirectBack();

        } elseif (strlen($_POST['password']) < 8) {

            flashMessage('login_error', 'رمز عبور وارد شده حداقل 8 کاراکتر باید باشد');
            $this->redirectBack();

        } elseif (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {

            flashMessage('login_error', 'ایمیل وارد شده معتبر نمی باشد');
            $this->redirectBack();

        } else {
            $db = new Database();
            $user = $db->select('SELECT * FROM users WHERE email = ? ', [$request['email']])->fetch();
            if (empty($user)) {
                flashMessage('login_error', 'کاربری با ایمیل وارد شده وجود ندارد');
                $this->redirectBack();

            } else {
                if (password_verify($request['password'], $user['password']) && $user['is_active'] == 1) {
                    $_SESSION['auth_user'] = $user['email'];
                    $this->redirect('');
                    //$this->redirect('admin');

                } else {
                    flashMessage('login_error', 'کاربری با ایمیل وارد شده وجود ندارد یا فعال نشده است');
                    $this->redirect('login');
                }

            }

        }
    }

    public function checkAdmin(): void
    {
        if (isset($_SESSION['auth_user'])) {
            $db = new Database();
            $user = $db->select('SELECT * FROM users WHERE email = ? ', [$_SESSION['auth_user']])->fetch();
            if (!empty($user)) {
                if ($user['permission'] != 'admin') {
                    $this->redirect('');
                }
            } else {
                $this->redirect('');
            }
        } else {
            $this->redirect('');
        }
    }

    public function checkAuth(): bool
    {
        if (isset($_SESSION['auth_user'])) {
            return true;
        } else {
            return false;
        }
    }

    public function logout(): void
    {
        if (isset($_SESSION['auth_user'])) {

            unset($_SESSION['auth_user']);
            session_unset();
            $this->redirect('');
        } else {
            $this->redirect('');
        }
    }

    public function forgotPassword(): void
    {
        view('template.auth.forgot_password');
    }

    public function forgotRequest($request): void
    {
        if (empty($request['email'])) {

            flashMessage('forgot_error', 'ایمیل الزامی می باشد');

            $this->redirectBack();
        } elseif (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {

            flashMessage('forgot_error', 'ایمیل وارد شده معتبر نمی باشد');
            $this->redirectBack();

        } else {

            $db = new Database();
            $user = $db->select('SELECT * FROM users WHERE email = ? ', [$request['email']])->fetch();

            if (empty($user)) {

                flashMessage('forgot_error', 'کاربری با ایمیل وارد شده وجود ندارد');
                $this->redirectBack();

            } else {

                $randomToken = $this->random();
                $forgotMessage = $this->forgotMessage($user['name'], $randomToken);
                $result = $this->sendMail($request['email'], 'بازیابی رمز عبور', $forgotMessage);
                if ($result) {
                    $db = new Database();
                    date_default_timezone_set('Asia/Tehran');
                    // add 15 minutes to forgot_token_expire
                    $user = $db->update('users', $user['id'], ['forgot_token', 'forgot_token_expire'],
                        [$randomToken, date('Y-m-d H:i:s', strtotime('+3 minutes'))]);
                    $this->redirect('login');
                } else {
                    flashMessage('forgot_error', 'ارسال ایمیل انجام نشد');
                    $this->redirectBack();
                }
            }
        }
    }

    public function changePasswordForm($token): void
    {
        require_once BASE_PATH . '/template/auth/reset_password.php';
    }

    public function resetPassword($request, $token): void
    {

        $pass = $request['password'];

        // dd($pass);
        if (!isset($request['password']) || strlen($request['password']) < 8) {

            flashMessage('change_error',
                'رمز عبور وارد شده باید بیشتر از 8 کاراکتر باشد');
            $this->redirectBack();

        } else {

            $db = new Database();
            $user = $db->select('SELECT * FROM users WHERE forgot_token = ? ', [$token])->fetch();

            if (empty($user)) {
                flashMessage('change_error', 'کاربری یافت نشد');
                $this->redirectBack();

            } else {

                // set timezone is very important
                date_default_timezone_set('Asia/Tehran');
                if ($user['forgot_token_expire'] < date('Y-m-d H:i:s')) {
                    flashMessage('change_error', 'توکن ارسال شده معتبر نمی باشد');
                    $this->redirectBack();
                }

                $db->update('users', $user['id'], ['password'], [$this->hash($pass)]);
                $this->redirect('login');

            }

        }

    }

}
