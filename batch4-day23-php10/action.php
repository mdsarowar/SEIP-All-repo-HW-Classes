<?php
require_once 'vendor/autoload.php';
use App\classes\studentinfo;

if (isset($_GET['pages'])){
    if ($_GET['pages']=='home'){
        include 'pages/home.php';
    }
}
elseif (isset($_POST['btn'])){

    $student=new studentinfo($_POST,$_FILES);
    $student->index();

}