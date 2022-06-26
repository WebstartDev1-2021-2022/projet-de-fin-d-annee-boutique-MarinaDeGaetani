<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;
use \App;

class ProduitsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Produit');
        $this->loadModel('Category');
        $this->loadModel('SousCategory');

    }

    public function index(){
        $produits = $this->Produit->last();
        $categories = $this->Category->all();
        
        $this->render('produits.index', compact('produits', 'categories'));
    }
    

    public function category(){
        $categorie = $this->Category->find($_GET['id']);

        if($categorie === false){
            $this->notFound();
        }
        $souscategory = $this->Produit->findWithSousCategories($_GET['id']);
        //var_dump($souscategory);
        $articles = $this->Post->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $this->render('posts.category', compact('articles', 'categories', 'categorie','souscategory',));
    }

    public function show(){

        $produits = $this->Produit->all();

        
         $recommandations =  array();

        foreach($produits as $produit){
            if($produit->tags_id == '4'){
                $recommandations[$produit->id] = $produit;
            }
        }

        $produit = $this->Produit->findWithCategory($_GET['id']);
        App::getInstance()->title = $produit->titre;

        $form = new BootstrapForm();
        $this->render('produits.show', compact('produit', 'form', 'recommandations'));
    }

}