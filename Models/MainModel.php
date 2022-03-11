<?php

namespace Models;
use Models\Database;
class MainModel extends Database{
    public function getData(){
        $stm = $this->connection->query('SELECT * FROM main ');
        $stm->execute();
        return $stm->fetch();
    }
    public function update($title,$header,$text,$imageName){
        $stm=$this->connection->prepare('UPDATE main
                                            SET title=:title,
                                                header=:header,
                                                text=:text
                                                WHERE id=1');
        $stm->bindParam('title',$title);
        $stm->bindParam('header',$header);
        $stm->bindParam('text',$text);
        $stm->execute();
        
        if($imageName){
               $stm=$this->connection->prepare('UPDATE main
                                            SET image=:image
                                                WHERE id=1');
        $stm->bindParam('image',$imageName);
        $stm->execute();
        }
    }
}