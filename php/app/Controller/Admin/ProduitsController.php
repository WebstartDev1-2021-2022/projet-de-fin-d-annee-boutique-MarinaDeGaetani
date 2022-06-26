<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class ProduitsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Produit');
    }

    public function index(){
        $produits = $this->Produit->all();
        $this->render('admin.produits.index', compact('produits'));
    }

    public function add(){
        if (!empty($_POST)) {
            //Enregistrement de l'image
            $image = $this->uploadImage('img');
            $image2 = $this->uploadImage('img2');
            $image3 = $this->uploadImage('img3');

            $result = $this->Produit->create([
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'date' => date('Ymd'),
                'img' => ($image)? $image : null,
                'img2' => ($image2)? $image2 : null,
                'img3' => ($image3)? $image3 : null,
                'prix' => $_POST['prix'], 
                'category_id' => $_POST['category_id'],
                'sous_category_id' => $_POST['sous_category_id'],
                'tags_id' => $_POST['tags_id'],
                'utilisation' => $_POST['utilisation'],
                'ingredients' => $_POST['ingredients'],
            ]);
            if($result){
                return $this->index();
            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->extract('id', 'titre');
        
        $this->loadModel('SousCategory');
        $sousCategories = $this->SousCategory->extract('id', 'titre');
        
        $this->loadModel('Tags');
        $tags = $this->Tags->extract('id', 'titre');
        
        $form = new BootstrapForm($_POST);
        $this->render('admin.produits.edit', compact('categories', 'sousCategories', 'tags', 'form'));
    }

    public function edit(){
        $produit = $this->Produit->find($_GET['id']);

        if (!empty($_POST)) {
            //Enregistrement de l'image
            $image = $this->uploadImage('img');
            $image2 = $this->uploadImage('img2');
            $image3 = $this->uploadImage('img3');

            $result = $this->Produit->update($_GET['id'], [
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'img' => ($image)? $image : $produit->img,
                'img2' => ($image2)? $image2 : $produit->img2,
                'img3' => ($image3)? $image3 : $produit->img3,
                'prix' => $_POST['prix'],
                'category_id' => $_POST['category_id'],
                'sous_category_id' => $_POST['sous_category_id'],
                'tags_id' => $_POST['tags_id'],
                'utilisation' => $_POST['utilisation'],
                'ingredients' => $_POST['ingredients'],
            ]);
                
            if($result){
                return $this->index();
            }
        }
        
        $this->loadModel('Category');
        $categories = $this->Category->extract('id', 'titre');

        $this->loadModel('SousCategory');
        $sousCategories = $this->SousCategory->extract('id', 'titre');

        $this->loadModel('Tags');
        $tags = $this->Tags->extract('id', 'titre');

        $form = new BootstrapForm($produit);
        $this->render('admin.produits.edit', compact('categories','sousCategories','tags' ,'form'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Produit->delete($_POST['id']);
            return $this->index();
        }
    }

    /*
    * Fonction d'enregistrement d'image 
    */
    public function uploadImage($img){
        //Vérifier si le formulaire a été soumis
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // Vérifie si le fichier a été uploadé sans erreur.
            if(isset($_FILES[$img]) && $_FILES[$img]["error"] == 0){

                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "webp" => "image/webp");
                $filename = $_FILES[$img]["name"];
                $filetype = $_FILES[$img]["type"];
                $filesize = $_FILES[$img]["size"];
                
                // Vérifie l'extension du fichier
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

                // Vérifie la taille du fichier - 2Mo maximum
                $maxsize = 2 * 1024 * 1024;
                if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée 2Mo.");

                // Vérifie le type MIME du fichier
                if(in_array($filetype, $allowed)){
                    move_uploaded_file($_FILES[$img]["tmp_name"], "../public/img/upload/" . $_FILES[$img]["name"]);
                    //echo "Votre fichier a été téléchargé avec succès.";
                    return $filename;
                } else{
                    echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
                    return false;
                }
            } else{
               
                return false;
            }
        }
    }

}