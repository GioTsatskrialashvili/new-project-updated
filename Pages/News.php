<?php

namespace Pages;


class News extends Page{
    
    public function index() {
        
        $this->load('views/frontend/news/index.php');

    }

   

}