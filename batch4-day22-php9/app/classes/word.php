<?php


namespace App\classes;


class word
{
    protected $inputValue;
    protected $wordNumber;
    protected $num=0;
    protected $type;

    public function __construct($data=null)
    {
        if ($data)
        {
            $this->inputValue=$data['input_value'];
            $this->type=$data['type'];
        }



//        echo '<pre>';
//        print_r($data);
//        exit();

//        foreach ($data as $value)
//        {
////            echo $value;
//
//            if ($value == " ")
//            {
//                $this->num++;
//            }
//
//        }
//        echo 'the number is : '.$this->num;

    }

    public function index()
    {
//        if ($this->type=='word')
//        {
//            $this->wordNumber= str_word_count($this->inputValue);
//        }
//        else{
//            $this->wordNumber= strlen($this->inputValue);
//        }

        $this->wordNumber=[
            'givenWord'=>'given word '.$this->inputValue,
            'wordCount'=>'total word'. str_word_count($this->inputValue),
            'characterCount'=>'total character'. strlen($this->inputValue),

        ];
        return $this->wordNumber;

//        $this->wordNumber= $this->inputValue;

//        return $this->wordNumber;
//        echo strlen($this->inputValue);





    }

}