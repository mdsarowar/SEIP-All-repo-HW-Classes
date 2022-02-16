<?php


namespace App\classes;


class FileUpload
{
    protected $studentName;
    protected $studentEmail;
    protected $studentPhone;
    protected $studentImage;
    protected $value;
    protected $result;
    protected $imageName;
    protected $imageDirectory;
    protected $filePath;
    protected $file;
    protected $data;
    protected $imagePath;
    protected $array;
    protected $array1;
    protected $array2;





    public function __construct($data=null,$file=null)
    {
        if ($data){
            $this->studentName=$data['name'];
            $this->studentEmail=$data['email'];
            $this->studentPhone=$data['phone'];
            $this->value=$data;

        }
        if ($file){
            $this->studentImage=$file['image'];

        }

    }

    public function index(){
        $this->imagePath= $this->imageUpload();
        $this->filePath='db/db.txt';
        $this->file=fopen($this->filePath,'a');
        $this->data="$this->studentName,$this->studentEmail,$this->studentPhone,$this->imagePath$";
//        foreach ($this->value as $item)
//        {
//            fwrite($this->file,$item.'');
//
//        }
        fwrite($this->file,$this->data);
        fclose($this->file);
        return 'data saved successfully';

    }
    protected function imageUpload()
    {
        $this->imageName=time().$this->studentImage['name'];
        $this->imageDirectory='assets/img/upload/'.$this->imageName;
        move_uploaded_file($this->studentImage['tmp_name'],$this->imageDirectory);
        return $this->imageDirectory;
    }

    public function getAllStudentInput(){
        $this->filePath='db/db.txt';
        $this->data=file_get_contents($this->filePath);
        $this->array= explode('$',$this->data);
        foreach ($this->array as $key=> $data){
            $this->array2=explode(',',$data);
            if ($this->array2[0]){
                $this->array1[$key]['name']=$this->array2[0];
                $this->array1[$key]['email']=$this->array2[1];
                $this->array1[$key]['phone']=$this->array2[2];
                $this->array1[$key]['image']=$this->array2[3];
            }


        }
        return $this->array1;
    }
}