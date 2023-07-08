<?php
    namespace App\Models;

    class User {
        
        public static function select(int $id) {
            $db = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            $r = $db->prepare("SELECT * FROM user WHERE id=?");
            $r->execute(array($id));
            
            if ($r->rowCount()>0) {
                return $r->fetchAll(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Nenhum usuário encontrado!");
            }
        }

        public static function selectAll() {
            $db = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            $r = $db->query("SELECT * FROM user");

            if ($r->rowCount()>0) {
                return $r->fetchAll(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Nenhum usuário encontrado!");
            }
        }

        public static function insert($data) {
            $db = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
            $r = $db->prepare("INSERT INTO user (email,password,name) VALUES (?,?,?)");
            $r->execute(array($data['email'],$data['password'],$data['name']));

            if ($r->rowCount()>0) {
                return "Usuário inserido!";
            } else {
                throw new \Exception("Falha ao inserir usuário!");
            }
        }
    }