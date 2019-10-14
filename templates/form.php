<?php

include(dirname(__DIR__).'/utils.php');


use Form\FormArticle;

$formArticle = new FormArticle();

if($_SERVER['REQUEST_METHOD'] === 'POST') { 
    var_dump($_POST['title']);
    if(isset($_POST['title'] ) && isset($_POST['content'])) {
        $formArticle->onSubmit($_POST['title'],$_POST['content'],$created_at = date("Y-m-d H:i:s"));
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Creer un nouveau article </h1>
    <div class="container">
    <form id="articleform" action="" method="post">
   <?= $formArticle->newField('title' , 'text') ?>
   <?= $formArticle->newField('content' , 'text') ?>
   <?= $formArticle->submitBtn() ?>
        </form>
   </div>
</body>
</html>