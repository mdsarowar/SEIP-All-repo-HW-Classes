<?php


namespace App\classes;


class Example
{
    public $name;
    public $data=[];
  public function index(){
//      echo "hello world";
//      $this->name='BITM';
//      $this->name='BASIS';
//      echo $this->name;

//      $this->data=[10, 20, 30, 'BITM', 'BASIS', 100.200, true];
//      echo $this->data[0];
//      foreach ($this->data as $key=> $item){
//          echo $key .' '.$item."<br/>";
      $this->data=[
         0=>[
             'name'    =>'Sagor',
             'email'   =>'sagor@gmail.com',
             'mobile'  =>[
                 'person'=>'123456789',
                 'parent'=>'123456789'
             ]
         ],
          1=>[
              'name'    =>'Ssssagor',
              'email'   =>'sagor@gmail.com',
              'mobile'  =>[
                  'person'=>'123456789',
                  'parent'=>'123456789'
              ]
          ],
          2=>'BITM',
          3=>[
              'name'    =>'Ssssagor',
              'email'   =>'sagor@gmail.com',
              'mobile'  =>[
                  'person'=>'123456789',
                  'parent'=>'123456789'
              ]
          ]

      ];
//      echo $this->data[1]['name'];

//      foreach ($this->data as $item){
////          echo $item['name'].' '.$item['email'].' '.$item['mobile'].'<br/>';
//          if (is_array($item)){
//              foreach ($item as $value){
//                  if (is_array($value)){
//                      foreach ($value as $v_value){
//                          echo $v_value;
//                      }
//                  }
//                  else{
//                      echo $value;
//                  }
//              }
//
//          }
//          else{
//              echo $item;
//          }
//
//
//      }
//      echo '<pre>';
////      print_r($this->data);
//
//      var_dump($this->data);



      }
}