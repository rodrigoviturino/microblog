<?php

include_once "../config/Database.php";

    class Usuario extends Database {
        public $id;
        public $nome;
        public $email;

        public function __construct() {
            $this->connect();
        }

        public function getAll(){
            $sql = " SELECT * FROM contatos ";
            $sql = $this->pdo->query($sql);
            
            if($sql->rowCount() > 0 ) {
                return $sql->fetchAll();
            } else {
                return array();
            }
        }

        public function adicionar( $email, $nome) {
            $sql = " INSERT INTO contatos ( nome, email ) VALUES ( :nome, :email ) ";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->execute();
        }

    }

?>