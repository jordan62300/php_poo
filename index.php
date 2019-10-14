<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    require './templates/header.php';
    
    if(isset($_GET['form'])) {
        require './templates/form.php';
    } else{
       
        require './templates/articles.php';
    }
    ?>
</body>
</html>