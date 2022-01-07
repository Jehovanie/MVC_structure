<?php


class Categories
{


    public $id;
    public $name;


    /**
     *  Authors Constructor
     *
     * @param  mixed $id
     * @return void
     */
    function __construct($id)
    {
        global $db;

        $id = str_secur($id);

        $repCategorie = $db->prepare('SELECT * FROM categories WHERE id = ?');
        $repCategorie->execute([$id]);
        $data = $repCategorie->fetch();

        $this->id = $id;
        $this->name = $data["name"];
    }

    /**
     * Envoie tous les auteurs
     * getAllAuthors
     * @return void
     */
    static function getAllCategories()
    {

        global $db;

        $repCategories = $db->prepare('SELECT * FROM categories');
        $repCategories->execute();

        return $repCategories->fetchAll();
    }
}
