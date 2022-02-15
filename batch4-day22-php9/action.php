<?php
require_once 'vendor/autoload.php';
use App\classes\Series;
use App\classes\Calculator;
use App\classes\Odd;
use App\classes\Catagori;
use App\classes\Products;

if (isset($_GET['pages']))
{
    if ($_GET['pages']=='home')
    {
        include 'pages/home.php';
    }
    elseif($_GET['pages']=='odd')
    {
        include 'pages/Oddeven.php';
    }
    elseif($_GET['pages']=='all-products')
    {
        $category=new Catagori();
        $categores=$category->category();
        $product=new Products();
        $products=$product->index();
        include 'pages/allproduct.php';
    }
    elseif ($_GET['pages']=='category-products'){
        $category=new Catagori();
        $categores=$category->category();
        $product=new Products();
        $products=$product->shortProducts($_GET['category-id']);
        include 'pages/allproduct.php';

    }
    elseif ($_GET['pages']=='product-details'){
        $category=new Catagori();
        $categores=$category->category();
        $product=new Products();
        $productsall=$product->productid($_GET['product_id']);
        include 'pages/viewproduct.php';

    }
}
elseif (isset($_POST['btn']))
{
    $calculator=new Calculator($_POST);
    $result=$calculator->index();
//    echo $result;
    include 'pages/home.php';

}

elseif (isset($_POST['btn1'])){
    $odd=new Odd();
    $odd->index();

}