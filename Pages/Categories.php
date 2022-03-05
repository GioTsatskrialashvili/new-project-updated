<?php

namespace Pages;


class Categories extends Page{
    
    public function index() {
        
        $this->load('views/frontend/categories/index.php');

    }

}