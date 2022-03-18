<?php

namespace Pages;

use Models\NewsModel;
use Models\CategoriesModel;
class News extends Page{
    protected $newsModel;
    protected $categoriesModel;
    function __construct() {
        $this->newsModel=new NewsModel();
        $this->categoriesModel=new CategoriesModel();
        Parent::__construct();
    }
    public function index() {
        $categoryId=isset($_GET['category']) && $_GET['category'] ? $_GET['category']:null;
        $keyword=isset($_GET['keyword']) && $_GET['keyword'] ? $_GET['keyword']:null;
        
        $this->data['news']=$this->newsModel->getFiltered($categoryId, $keyword);
        $this->data['categories']=$this->categoriesModel->getAll();
        $this->data['keyword']= $keyword;
        $this->data['categoryId']= $categoryId;
        $this->load('views/frontend/news/index.php');

    }

   public function view(){
       $id= $_GET['id'];
       $this->data['news']=$this->newsModel->getBYID($id);
       $this->load('views/frontend/news/view.php');
   }

}