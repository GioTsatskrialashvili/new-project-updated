<?php
namespace Pages;
use Pages\Page;
use Models\CategoriesModel;
use Models\AboutModel;
use Models\MainModel;
use Models\NewsModel;
class Home extends Page{
    protected $categoryModel;
    protected $aboutModel;
    protected $mainModel;
    protected $newsModel;
    function __construct() {
        $this->categoryModel = new CategoriesModel();
        $this->aboutModel = new AboutModel();
        $this->mainModel=new MainModel();
        $this->newsModel=new NewsModel();
        Parent::__construct();
    }

public function index(){
    
 $this->data['categories'] = $this->categoryModel->getHomeCategories();
 $this->data['about']=$this->aboutModel->getData();
 $this->data['main']=$this->mainModel->getData();
 $this->data['news']=$this->newsModel->getMainNews();
   $this->load('views/frontend/home/index.php');
}
}