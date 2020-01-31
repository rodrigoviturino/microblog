<?php 

class Database {

    public $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:dbname=microblog_php;host:localhost", "root","");
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

    public function adicionar( $nome, $email,$senha) {
        
        $sql = " INSERT INTO usuarios ( nome, email, senha ) VALUES ( :nome, :email, :senha ) ";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();
    
    } 


    private function existeEmail($email){
        $sql = " SELECT * FROM usuarios WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
        
        if($sql->rowCount() > 0){
           echo "Foi Adicionado!";
        } else {
            echo "Não foi!";
        }
    }
    

}

?>