<?php
namespace App\Table;

use Core\Table\Table;

class ProduitTable extends Table{

    protected $table = 'produits';

    /**
     * Récupère les derniers article
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.date, produits.prix, produits.img, produits.img2, produits.img3, produits.tags_id
            FROM articles
            ORDER BY produits.date DESC");
    }

    /**
     * Récupère les derniers produits de la category demandée
     * @param $category_id int
     * @return array
     */
    public function lastByCategory($category_id){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.date, produits.prix, produits.img, produits.img2, produits.img3, produits.utilisation, produits.ingredients 
            FROM produits
            WHERE produits.category_id = ?
            ORDER BY produits.date DESC", [$category_id]);
    }

    /**
     * Récupère un produit en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\ProduitEntity
     */
    public function findWithCategory($id){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.date, produits.prix,  produits.img,  produits.img2,  produits.img3,  produits.utilisation, produits.ingredients, produits.category_id, categories.titre as categorie
            FROM produits
            LEFT JOIN categories ON category_id = categories.id
            WHERE produits.id = ?", [$id], true);
    }

     /**
     * Récupère un produit en liant la sous-catégorie associée
     * @param $id int
     * @return \App\Entity\ProduitEntity
     */
    public function findWithSousCategories($id){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.date, produits.prix,  produits.img,  produits.img2,  produits.img3,  produits.utilisation, produits.ingredients, produits.sous_category_id, sous_categories.titre as sous_categories
            FROM produits
            LEFT JOIN sous_categories ON sous_category_id = sous_categories.id
            WHERE produits.id = ?", [$id], true);
    }

      /**
     * Récupère un produit en liant les tags associée
     * @param $id int
     * @return \App\Entity\ProduitEntity
     */
    public function findWithTags($id){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.date, produits.prix,  produits.img,  produits.img2,  produits.img3,  produits.utilisation, produits.ingredients, produits.tags_id, tags.titre as tags
            FROM produits
            LEFT JOIN tags ON produits.tags_id = tags.id
            WHERE produits.tags_id = ?", [$id], true);
    }
}