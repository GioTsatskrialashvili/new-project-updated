<?php
namespace Pages;
use Pages\Page;
use Models\CategoriesModel;
use Models\AboutModel;
class Home extends Page{
    protected $categoryModel;
    protected $aboutModel;
    function __construct() {
        $this->categoryModel = new CategoriesModel();
        $this->aboutModel = new AboutModel();
        Parent::__construct();
    }

public function index(){
    
 $this->data['categories'] = $this->categoryModel->getHomeCategories();
 $this->data['about']=$this->aboutModel->getData();
   $this->load('views/frontend/home/index.php');
}
}