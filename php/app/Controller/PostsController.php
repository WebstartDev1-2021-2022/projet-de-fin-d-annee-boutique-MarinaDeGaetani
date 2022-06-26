<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class PostsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Category');
        $this->loadModel('Produit');
        $this->loadModel('SousCategory');

    }

    public function index(){
        $posts = $this->Post->last();
        $categories = $this->Category->all();
        $produits = $this->Produit->all();

        $moments = $incontournables = $recommandations = $nouveautées = array();

        foreach($produits as $produit){
            if($produit->tags_id == '1'){
                $moments[$produit->id] = $produit;
            }
            if($produit->tags_id == '5'){
                $incontournables[$produit->id] = $produit;
            }
            if($produit->tags_id == '4'){
                $recommandations[$produit->id] = $produit;
            }
            if($produit->tags_id == '3'){
                $nouveautées[$produit->id] = $produit;
            }
        }

        $this->render('posts.index', compact('posts', 'categories', 'produits', 'moments', 'incontournables', 'recommandations', 'nouveautées'));
    }

    public function category(){
        $categorie = $this->Category->find($_GET['id']);
        if($categorie === false){
            $this->notFound();
        }
        $articles = $this->Post->lastByCategory($_GET['id']);
        $produits = $this->Produit->lastByCategory($_GET['id']);
        $souscategorys = $this->Produit->findWithSousCategories($_GET['id']);
        $categories = $this->Category->all();
        $this->render('posts.category', compact('articles', 'categories', 'categorie', 'produits','souscategorys'));
    }

    public function show(){

        $article = $this->Post->findWithCategory($_GET['id']);
        App::getInstance()->title = $article->titre;

        $this->render('posts.show', compact('article'));
    }

}