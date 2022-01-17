<?php

class Articles
{


    public $id;
    public $title;
    public $content;
    public $sentence;
    public $date;
    public $author;
    public $category;


    /**
     * __construct
     * Article constructor
     * @param  mixed $id
     * @return void
     */
    function __construct($id)
    {
        global $db;

        $repArticle = $db->prepare('
            SELECT a.* , au.firstname ,au.lastname, c.name AS category
            FROM articles a
            INNER JOIN authors au ON au.id = a.author_id
            INNER JOIN categories c ON c.id = a.category_id
            WHERE a.id = ?
        ');

        $repArticle->execute([$id]);
        $data = $repArticle->fetch();

        $this->id = $id;
        $this->title = $data["title"];
        $this->content = $data["content"];
        $this->sentence = $data["sentence"];
        $this->date = $data["date"];
        $this->author = $data["firstname"] . " " . $data["lastname"];
        $this->category = $data["category"];
    }

    /**
     * getAllArticles
     * Envoie tous les articles
     * @return void
     */
    static function getAllArticles()
    {

        global $db;

        $repArticles = $db->prepare('
            SELECT a.* , au.firstname ,au.lastname, c.name AS category
            FROM articles a
            INNER JOIN authors au ON au.id = a.author_id
            INNER JOIN categories c ON c.id = a.category_id
        ');

        $repArticles->execute([]);

        return  $repArticles->fetchAll();
    }

    /**
     * getlastArticle
     * Envoie tous les articles
     * @return void
     */
    static function getlastArticle($categoryId = null)
    {

        global $db;

        if ($categoryId == null) {
            $repArticles = $db->prepare('
                SELECT a.* , au.firstname ,au.lastname, c.name AS category
                FROM articles a
                INNER JOIN authors au ON au.id = a.author_id
                INNER JOIN categories c ON c.id = a.category_id
                ORDER BY id DESC
                LIMIT 1
            ');
            $repArticles->execute([]);
        } else {
            $repArticles = $db->prepare('
                SELECT a.* , au.firstname ,au.lastname, c.name AS category
                FROM articles a
                INNER JOIN authors au ON au.id = a.author_id
                INNER JOIN categories c ON c.id = a.category_id
                WHERE c.id = ? 
                ORDER BY id DESC
                LIMIT 1
            ');
            $repArticles->execute([$categoryId]);
        }

        return  $repArticles->fetch();
    }
}
