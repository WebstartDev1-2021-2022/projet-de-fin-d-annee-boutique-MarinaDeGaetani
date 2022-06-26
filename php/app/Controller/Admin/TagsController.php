<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class TagsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Tags');
    }

    public function index(){
        $items = $this->Tags->all();
        $this->render('admin.tags.index', compact('items'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->Tags->create([
                'titre' => $_POST['titre'],
                'category_id' => $_POST['category_id']
            ]);
            return $this->index();
        }
        $this->loadModel('Category');
        $categories = $this->Category->extract('id', 'titre');
        $form = new BootstrapForm($_POST);
        $this->render('admin.tags.edit', compact('categories','form'));
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Tags->update($_GET['id'], [
                'titre' => $_POST['titre'],
                'category_id' => $_POST['category_id']
            ]);
            return $this->index();
        }

        $tags = $this->Tags->find($_GET['id']);
        $this->loadModel('Category');
        $categories = $this->Category->extract('id', 'titre');
        $form = new BootstrapForm($tags);
        $this->render('admin.tags.edit', compact('categories', 'form'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Tags->delete($_POST['id']);
            return $this->index();
        }
    }

}