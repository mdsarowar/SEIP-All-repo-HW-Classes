<?php


namespace App\classes;


use mysql_xdevapi\Result;

class Products
{
    protected $allProductsl;
    protected $reslut=[];

    public function index(){
        return[
          0=>[
              'id'=>1,
              'categoryid'=>1,
              'name'=>'T-shirt',
              'price'=>700,
              'description'=>'product description',
              'image'=>'assets/img/ms2.jpg',
          ],
            1=>[
                'id'=>2,
                'categoryid'=>1,
                'name'=>'T-shirt',
                'price'=>700,
                'description'=>'product description',
                'image'=>'assets/img/ms1.jpg',
            ],
            2=>[
                'id'=>3,
                'categoryid'=>2,
                'name'=>'T-shirt',
                'price'=>700,
                'description'=>'product description',
                'image'=>'assets/img/ws2.jpg',
            ],
            3=>[
                'id'=>3,
                'categoryid'=>2,
                'name'=>'T-shirt',
                'price'=>700,
                'description'=>'product description',
                'image'=>'assets/img/ws1.jpg',
            ],

            4=>[
                'id'=>3,
                'categoryid'=>3,
                'name'=>'T-shirt',
                'price'=>700,
                'description'=>'product description',
                'image'=>'assets/img/k2.jpg',
            ],

            5=>[
                'id'=>6,
                'categoryid'=>3,
                'name'=>'T-shirt',
                'price'=>700,
                'description'=>'product description',
                'image'=>'assets/img/k1.jpg',
            ]

        ];
    }
    public function shortProducts($categoryid){
        $this->allProductsl=$this->index();
        foreach ($this->allProductsl as $product){
            if ($product['categoryid']== $categoryid){
                array_push($this->reslut,$product);
            }
        }
        return $this->reslut;


    }
    public function productid($prodid){
        $this->allProductsl=$this->index();
        foreach ($this->allProductsl as $product){
            if ($product['id']== $prodid){
                return $product;
            }
        }



    }

}