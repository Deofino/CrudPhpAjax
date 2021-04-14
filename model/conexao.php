<?php
    class Conexao{
    
        public static function getConexao(){
            $banco = "formulariopw";
            $username = "root";
            $password = "";
            try {
                $pdo = new PDO("mysql:host=localhost;dbname=$banco;",$username,$password);
                if($pdo)return $pdo;
            }catch (Exception $e) {
                echo ($e->getMessage());
            }
        }
        
    }
?>