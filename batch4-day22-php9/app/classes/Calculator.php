<?php


namespace App\classes;


class Calculator
{
    protected $firstNumber;
    protected $lastNumber;
    protected $value;
    protected $result;
    public function __construct($data=null)
    {
        if ($data){
            $this->firstNumber=$data['first_number'];
            $this->lastNumber=$data['last_number'];
            $this->value=$data['option'];
        }


    }
    protected function add(){
        return $this->firstNumber+$this->lastNumber;
    }

    protected function sub(){
        return $this->firstNumber-$this->lastNumber;
    }
    protected function mul(){
        return $this->firstNumber * $this->lastNumber;
    }
    protected function div(){
        return $this->firstNumber / $this->lastNumber;
    }
    protected function mod(){
        return $this->firstNumber % $this->lastNumber;
    }

    public function index(){
        switch ($this->value){
            case '+':
                $this->result=$this->add();
                break;


            case '-':
                $this->result=$this->sub();
                break;


            case '*':
                $this->result=$this->mul();
                break;


            case '/':
                $this->result=$this->div();
                break;

            case '%':
                $this->result=$this->mod();
                break;

        }
        return $this->result;

    }

}