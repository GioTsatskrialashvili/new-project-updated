<?php
namespace Pages\Admin;
use Pages\Admin\Page;
use Models\MainModel;
class Main extends Page{
    private $mainModel;
    function __construct(){
        $this->mainModel=new MainModel();
        Parent::__construct();
    }
public function index(){
    $this->data['main']=$this->mainModel->getData();
    
    $this->load('Views/admin/main/index.php');
}
public function update(){
    $imagename='';
    if($_FILES['image']['size']){
        $imageName=$_FILES['image']['name'];
        $tmp=$_FILES['image']['tmp_name'];
        $imageName='assets/uploads/'.$imageName;
        move_uploaded_file($tmp,$imageName);
    }
    $title=$_POST['title'];
    $header=$_POST['header'];
    $text=$_POST['text'];
    $this->mainModel->update($title,$header,$text,$imageName);
    header('Location: ?type=admin&page=main');
}
}