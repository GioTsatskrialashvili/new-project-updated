<?php 
namespace Models;
use Models\Database;
class NewsModel extends Database{
    public function getAll(){
        $stm= $this->connection->query('SELECT*FROM news ORDER BY id DESC');
        $stm->execute();
        return $stm->fetchAll();
    }
    public function getMainNews(){
        $stm= $this->connection->query('SELECT*FROM news ORDER BY id DESC Limit 3');
        $stm->execute();
        return $stm->fetchAll();
    }
    public function store($title,$short_text,$text,$category_id,$imageName){
        $stm=$this->connection->prepare('INSERT INTO news(title,short_text,text,category_id,image)VALUES(:title,:short_text,:text,:category_id,:image)');
        $stm->bindParam('title',$title);
        $stm->bindParam('short_text',$short_text);
        $stm->bindParam('text',$text);
        $stm->bindParam('category_id',$category_id);
        $stm->bindParam('image',$imageName);
        $stm->execute();
    }
}