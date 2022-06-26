<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class MentionsLégalesController extends AppController{

   public function contact(){
   
        $this->render('mentionsLégales.contact');
    }

   public function cgv(){
   
        $this->render('mentionsLégales.cgv');
    }

   public function mentionLégales(){
   
        $this->render('mentionsLégales.mentionLégales');
    }

}  