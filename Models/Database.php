<?php
namespace Models;
use PDO;
class Database{    
    public $serverName = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'new-news-web';
    public $charset='utf8';
    public $connection;

    function __construct() {
        $this->connection = new PDO("mysql:host=".$this->serverName.";dbname=".$this->dbname.";charset=".$this->charset,
                    $this->username, $this->password);
    }
}
//     public function getAll($query) {
//         $stm = $this->connection->query($query);
//         $stm->execute();

//         return $stm->fetchAll();
//     }
//     // public function getSingle($table,$id) {
//     //     $stm = $this->connection->query("SELECT * FROM".$table."WHERE id=".$id);
//     //     $stm->execute();

//     //     return $stm->fetch();
//     // }

//     public function queryExecute($query) {
//         $stm = $this->connection->query($query);

//         return $stm->execute();
//     }

// }