<?php

namespace Models;

class AboutModel extends Database {

    public function getData() {
        $stm = $this->connection->query('SELECT * FROM about ');
        $stm->execute();
        return $stm->fetch();
    }
    public function updateData($home_title,$title,$short_text,$text){
        $stm=$this->connection->prepare('UPDATE about
                                            SET home_title=:home_title,
                                                title=:title,
                                                short_text=:short_text,
                                                text=:text
                                             WHERE id=1');
        $stm->bindParam('home_title',$home_title);
        $stm->bindParam('title',$title);
        $stm->bindParam('short_text',$short_text);
        $stm->bindParam('text',$text);
        $stm->execute();
    }
}