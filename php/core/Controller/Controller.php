<?php

namespace Core\Controller;

class Controller{

    protected $viewPath;
    protected $template;

    protected function render($view, $variables = []){
        ob_start();
        //extract — Importe les variables dans la table des symboles
        extract($variables);
        // chemin abolue du dossier View
        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'templates/' . $this->template . '.php');
    }

    protected function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('Acces interdit');
    }

    protected function notFound(){
        header('HTTP/1.0 404 Not Found');
        die('Page introuvable');
    }

}