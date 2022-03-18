<?php 
namespace Models;
use Models\Database;
class NewsModel extends Database{
    public function getAll(){
        $stm= $this->connection->query('SELECT*FROM news ORDER BY id DESC');
        $stm->execute();
        return $stm->fetchAll();
    }
    public function getFiltered($categoryId,$keyword){
        $whereQuery='';
        if($categoryId){
            $whereQuery= 'WHERE category_id='.$categoryId;
        }
        if($keyword){
            if($whereQuery){
                $whereQuery .= ' AND (title LIKE "%'.$keyword.'%" OR text LIKE "%'.$keyword.'%" OR short_text LIKE "%'.$keyword.'%")';
            }else{
                $whereQuery='WHERE title LIKE "%'.$keyword.'%" OR text LIKE "%'.$keyword.'%" OR short_text LIKE "%'.$keyword.'%"';
            }
        }
        
        $stm= $this->connection->query('SELECT*FROM news  '.$whereQuery.' ORDER BY id DESC');
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
    public function getByID($id){
        $stm=$this->connection->prepare('SELECT n.*, c.title as category_title
                                            FROM news n
                                        INNER JOIN categories c ON c.id=n.category_id
                                            WHERE n.id=:id');
        $stm->bindparam('id',$id);
        $stm->execute();

        return $stm->fetch();
    }
    public function update($title,$short_text,$text,$category_id,$image,$id){
        $stm=$this->connection->prepare('  UPDATE news
                                           SET title=:title,
                                            short_text=:short_text,
                                            text=:text,
                                            category_id=:category_id
                                            WHERE id=:id');
        $stm->bindParam('title',$title);
        $stm->bindParam('short_text',$short_text);
        $stm->bindParam('text',$text);
        $stm->bindParam('category_id',$category_id);
      
        $stm->bindParam('id',$id);
        $stm->execute();
        if($image){
            $stm=$this->connection->prepare('UPDATE news
                                         SET image=:image
                                             WHERE id=:id');
     $stm->bindParam('image',$image);
     $stm->bindParam('id',$id);
     $stm->execute();
        }
    } 
    public function delete($id){
        $stm=$this->connection->prepare('DELETE FROM news WHERE id = :id');
        $stm->bindParam('id',$id);
        
        $stm->execute();

    }
}