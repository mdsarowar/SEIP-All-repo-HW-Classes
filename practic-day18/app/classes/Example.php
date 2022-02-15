<?php

namespace App\classes;

class Example
{
    public $firstName;
    public $lastName;
    private $fullname;
    public function __construct($data)
    {
//        $this->firstName=$data['firstname'];
//        echo $data['firstname'];

//        print_r($data);
        $this->firstName=$data['firstname'];
        $this->lastName=$data['lastname'];
    }


    public function index(){
         header('Location: action.php?pages=fullName');
    }

    public function getname()
    {
        $this->fullname=$this->firstName." ".$this->lastName;
        return $this->fullname;


    }

}