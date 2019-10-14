<?php

namespace Form;

use Form\Form;
use Articles\Article;
use PDO;

class FormArticle extends Form {

    public function onSubmit($title,$content,$created_at) {
        $article = new Article($title,$content,$created_at);
        $article->createArticle($title,$content,$created_at);
    }

    

}