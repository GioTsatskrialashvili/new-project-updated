<?php

namespace Pages\Admin;

use Pages\Admin\Page;
use Models\AboutModel;
class About extends Page{
     function __construct(){
        $this->model=new AboutModel();
        Parent::__construct();
    }
    public function index() {
        $this->data['about']=$this->model->getData();
        $this->load('views/admin/about/index.php');

    }
public function update(){
    
    $home_title=$_POST['home_title'];
    $title=$_POST['title'];
    $short_text=$_POST['short_text'];
    $text=$_POST['text'];
    $this->model->updateData($home_title,$title,$short_text,$text);
    header('Location: ?type=admin&page=about');
}
}