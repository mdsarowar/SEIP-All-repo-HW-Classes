<?php


namespace App\classes;


use mysql_xdevapi\Result;

class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $i;
    protected $result;
    protected $type;

    public function __construct($data)
    {
        $this->startingNumber=$data['starting_number'];
        $this->endingNumber=$data['ending_number'];
        $this->type=$data['type'];
    }

    public function index()
    {
//        echo "hello world"
        if ()
//        for ($this->i = $this->startingNumber ; $this->i <= $this->endingNumber; $this->i++ )
//        {
//            $this->result .= $this->i;
//
//        }
        for ($this->i = $this->startingNumber ; $this->i >= $this->endingNumber; $this->i-- )
        {
            $this->result .= $this->i;

        }
        return $this->result;

    }

}