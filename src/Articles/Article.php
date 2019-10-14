<?php

namespace Articles;

use BDD\ArticleManager;

class Article extends ArticleManager {
    
    private $title;
    private $content;
    private $created_at;

    public function __construct(String $title = null, String $content = null, $created_at=null){
        $this->content = $content;
        $this->title = $title;
        $this->created_at;
        parent::__construct();
    }


    public function displayArticles(){
      $articles =  $this->getArticles();
        foreach($articles as $article){
            echo "
            <div class=\"row\">
                <div class=\"card bg-info col-5 col-centered mt-4\" style=\"width: 18rem;\">
                     <div class=\"card-body\">
                         <h5 class=\"card-title text-center\">".$article->title."</h5>
                         <p class=\"card-text \">".$article->content."</p>
                         <a href=\"index.php?delete=$article->id\"> <button class=\"btn btn-danger\" type=\"button\">Supprimer </button> </a>
                    </div>
                 </div>
            </div>
           " ;
        }
    }

    public function onDelete($id){
        $this->deleteArticle($id);
    }




    // GETTER & SETTER


    /**
     * Get the value of title
     */ 
    public function getTitle() : String
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(String $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent() : String
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent(String $content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at() : DateTime
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }
}