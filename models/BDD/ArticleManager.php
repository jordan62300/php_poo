<?php

namespace BDD;

use BDD\Connexion_BDD;
use PDO;

class ArticleManager extends Connexion_BDD{


    public function __construct(){
      $this->connexion();
    }

    
    public function getArticles() {
      $pdo =  $this->getPDO();
      $req =  $pdo->query("SELECT * FROM article");
      $res = $req->fetchAll(PDO::FETCH_OBJ);
      return $res;
    }

    public function createArticle($title,$content,$created_at) {
      $pdo = $this->getPDO();
      $req = $pdo->prepare("INSERT INTO article (title,content,created_at) VALUES (?,?,?)");
      $req->execute([
        $title,
        $content,
        $created_at
      ]);
    }

    public function deleteArticle($id){
      $pdo = $this->getPDO();
      $req = $pdo->prepare("DELETE FROM article WHERE id >= :id");
                $req->bindParam(':id', $id, PDO::PARAM_INT);
                $req->execute();
               
    }

}