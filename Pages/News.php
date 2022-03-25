<?php

namespace Pages;

use Models\NewsModel;
use Models\CategoriesModel;
use Helpers\Paging;
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

        $page=isset($_GET['p']) && $_GET['p']>0 ? $_GET['p']:1;
        $limit=4;
        $offset=($page * $limit)-$limit;

        $cnt= $this->newsModel->getFilteredCnt($categoryId, $keyword);
        $this->data['page']=$page;
        $this->data['limit']=$limit;
        $this->data['cnt']=$cnt['cnt'];
        $this->data['paging']=Paging::execute($cnt['cnt'],$limit,$page,'?page=news');
        $this->data['news']=$this->newsModel->getFiltered($categoryId, $keyword,$offset,$limit);
        
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