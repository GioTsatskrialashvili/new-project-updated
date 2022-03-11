<?php

namespace Pages;
use Models\CategoriesModel;

class Categories extends Page{
    private $categoryModel;
    function __construct(){
        $this->categoryModel=new CategoriesModel();
        Parent:: __construct();
    }
    public function index() {
        $this->data['categories']=$this->categoryModel->getAll();
        
        $this->load('views/frontend/categories/index.php');

    }

}