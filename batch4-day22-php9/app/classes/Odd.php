<?php


namespace App\classes;


class Odd
{
    protected $num;
    protected $result;

    public function __construct($data=null)
    {

        if ($data){
            $this->num=$data['check'];
        }

    }
    public function odd(){
        if ($this->num%2==0){
//            return $this->result="even";
            echo " is";

        }
        else{
//            return $this->result="odd";
            echo "odd";
        }
//
    }

    public function index()
    {
         $this->odd();
//        $this->result= $this->odd();
//        echo $this->result;

    }


}