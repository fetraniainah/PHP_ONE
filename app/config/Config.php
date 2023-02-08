<?php
    namespace App\Config;
    class Config{
        
        #configuration de conection database
        public function Db(){
            $pdo = null;
            if ($pdo === null) {
               $pdo = new \PDO("mysql:host=localhost; dbname=appgsi",'root' ,'');
               $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }
     
            return $pdo;
        }


        public function all($table){
            $data = $this->Db();
            $req = $data->query("SELECT * FROM ".$table);
            $res = $req->fetchAll(\PDO::FETCH_OBJ);
            return $res;
          }
        
          public function where($table,$reference,$equal){
            $data = $this->Db();
            $req = $data->query("SELECT * FROM ".$table." WHERE ".$reference." = ".$equal);
            $res = $req->fetchAll(\PDO::FETCH_OBJ);
            return $res;
          }

    }