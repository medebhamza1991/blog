<?php
require '../app/Autoloader.php';

App\Autoloder::register();


if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}


if($p === 'home')
{
    require '../pages/home.php';
}