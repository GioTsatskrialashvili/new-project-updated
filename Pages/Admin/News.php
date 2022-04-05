<?php

namespace Pages\Admin;

use Pages\Admin\Page;
use Models\NewsModel; 
use Models\CategoriesModel; 
use Helpers\Paging;
class News extends Page {
    protected $newsModel;
    protected $categoriesModel;
    function __construct() {
        $this->newsModel=new NewsModel();
        $this->categoriesModel=new CategoriesModel();
        Parent::__construct();
    }

    public function index() {
        $page=isset($_GET['p']) && $_GET['p']>0 ? $_GET['p']:1;
        $limit=5;
        $offset=($page * $limit)-$limit;

        $cnt= $this->newsModel->getCount();
        
        $this->data['page']=$page;
        $this->data['limit']=$limit;
        $this->data['cnt']=$cnt['cnt'];
        $this->data['paging']=Paging::execute($cnt['cnt'],$limit,$page,'?type=admin&page=news');
        $this->data['news']=$this->newsModel->getByPaging($offset,$limit);

        $this->load('views/admin/news/index.php');
    }
    public function add(){
    $this->data['categories']=$this->categoriesModel->getAll();
        $this->load('views/admin/news/add.php');
    }
    public function store(){
    $title=$_POST['title'];
    $text=$_POST['text'];
    $short_text=$_POST['short_text'];
    $category_id=$_POST['category_id'];

    $imageName='';
    if($_FILES['image']['size']){
        $imageName=$_FILES['image']['name'];
        $tmp=$_FILES['image']['tmp_name'];
        $imageName='assets/uploads/news/'.time().'_'.$imageName;
        move_uploaded_file($tmp,$imageName);
    }
    $this->newsModel->store($title,$short_text,$text,$category_id,$imageName);
    header('Location: ?type=admin&page=news');
}
    public function edit(){
        $id=$_GET['id'];
        $this->data['news']= $this->newsModel->getByID($id);
        $this->data['categories']=$this->categoriesModel->getAll();
        
        $this->load('views/admin/news/edit.php');
    }
    public function update(){
        $title=$_POST['title'];
        $text=$_POST['text'];
        $short_text=$_POST['short_text'];
        $category_id=$_POST['category_id'];
        $id=$_POST['id'];
        $imageName='';
        if($_FILES['image']['size']){
            $imageName=$_FILES['image']['name'];
            $tmp=$_FILES['image']['tmp_name'];
            $imageName='assets/uploads/news/'.time().'_'.$imageName;
            move_uploaded_file($tmp,$imageName);
        }
        $this->newsModel->update($title,$short_text,$text,$category_id,$imageName,$id);
        header('Location: ?type=admin&page=news');
    }
    public function delete(){
        
        $id=$_POST['id'];
        $this->newsModel->delete($id);
        header('Location:?type=admin&page=news');
    }
}