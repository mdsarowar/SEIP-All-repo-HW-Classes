<?php
require_once 'vendor/autoload.php';
use App\classes\FileUpload;
use App\classes\Auth;

if (isset($_GET['pages'])){
    if ($_GET['pages']=='file-upload'){
        include 'pages/file-upload.php';
    }
    elseif ($_GET['pages']=='view-student'){
        $fileuplad=new FileUpload();
        $student=$fileuplad->getAllStudentInput();
         include 'pages/viewStudents.php';
    }
    elseif ($_GET['pages']=='login'){
        include 'pages/login.php';
    }
    elseif ($_GET['pages']=='logout'){
        $auth=new Auth();
        $auth->logout();
    }
}
elseif (isset($_POST['btn'])){
    $fileuplad=new FileUpload($_POST,$_FILES);
    $message=$fileuplad->index();
    include 'pages/file-upload.php';

}
elseif (isset($_POST['loginbtn'])){
    $auth=new Auth($_POST);
    $message=$auth->login();
    include 'pages/login.php';

}