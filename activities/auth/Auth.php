<?php

namespace auth;


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
        $hashPassword = password_hash($password,PASSWORD_DEFAULT);
    }


    private function sendMail($email,$subject,$body, array $attachment = [])
    {
        
    }

}