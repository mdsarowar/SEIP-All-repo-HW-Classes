<?php


namespace App\classes;


class Auth
{
    protected $email;
    protected $password;
    protected $authEmail;
    protected $authPassword;
    public function __construct($data=null)
    {
        if ($data){
            $this->email=$data['email'];
            $this->password=$data['password'];

        }
    }

    public function login(){
        $this->authEmail='admin@admin.com';
        $this->authPassword='123456';

        if ($this->email==$this->authEmail && $this->password==$this->authPassword){
            header('Location: action.php?pages=file-upload');
        }
        else{
            return 'Sorry ......... Abar try koren vaya';
        }

    }

    public function logout(){
        header('Location: action.php?pages=login');
    }

}