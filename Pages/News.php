<?php

namespace Pages;

use Models\NewsModel;
class News extends Page{
    protected $newsModel;
    function __construct() {
        $this->newsModel=new NewsModel();
        Parent::__construct();
    }
    public function index() {
        $this->data['news']=$this->newsModel->getAll();
        $this->load('views/frontend/news/index.php');

    }

   

}