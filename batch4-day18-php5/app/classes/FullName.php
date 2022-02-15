<?php


namespace App\classes;


class FullName
{
    public $firstName;
    public $lastName;
    protected $fullName;

    public function __construct($data=null)
    {
//        echo "hello";

//        echo '<pre>';
//        print_r($data);
//        exit();
        if ($data)
        {
            $this->firstName=$data['firstname'];
            $this->lastName=$data['lastname'];
        }


    }

    public function index()
    {
//        echo "in index";
//        echo $this->firstName;

        header('Location: action.php?pages=full-name');

    }
    public function getfullname(){
        $fullName =$this->firstName." ".$this->lastName;
//        echo $this->firstName;
        return $fullName;
    }

}