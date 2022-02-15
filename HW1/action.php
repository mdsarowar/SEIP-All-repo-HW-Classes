<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Categoris;
use App\classes\News;

if (isset($_GET['pages'])){
    if ($_GET['pages']=='worldpage'){
        $category=new Categoris();
        $categories=$category->category();
        $news=new News();
        $newses=$news->index();
        include 'pages/bangladesh.php';
    }
    elseif ($_GET['pages']=='news-categary'){
        $category=new Categoris();
        $categories=$category->category();
        $news=new News();
        $newses=$news->newses($_GET['news-id']);
        include 'pages/bangladesh.php';


    }
}
