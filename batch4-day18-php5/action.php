<?php
require_once 'vendor/autoload.php';
use App\classes\FullName;


//echo '<pre>';
//print_r($_POST);


if (isset($_GET['pages']))
{
    if ($_GET['pages']=='full-name')
    {
        include 'pages/full-name.php';
    }
}
elseif (isset($_POST['btn']))
{
    $fullname=new FullName($_POST);
    $result=$fullname->getfullname();
//    echo $result;
    include 'pages/full-name.php';

}


