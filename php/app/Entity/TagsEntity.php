<?php
namespace App\Entity;

use Core\Entity\Entity;

class TagsEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=posts.tags&id=' . $this->id;
    }

}