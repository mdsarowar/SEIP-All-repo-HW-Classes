<?php
require_once "vendor/autoload.php";
use App\classes\Example;

if (isset($_GET['pages']))
{
    if ($_GET['pages']=='fullName')
    {
        include 'pages/fullName.php';

    }
}
elseif (isset($_POST['btn']))
{
    $example=new Example($_POST);
   $result= $example->getname();
   include 'pages/fullName.php';
}
