<?php 
include(dirname(__DIR__).'/utils.php');


use Articles\Article;

$conn = new Article();
$conn->connexion();

if(isset($_GET['delete'])){
    $conn->onDelete($_GET['delete']);
    echo "done";
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
    <?= $conn->displayArticles() ?>
</body>
</html>