<?php
    require_once('../model/conexao.php');
    class Message{
        private  $id,$name,$lastname,$email,$subject,$message;
        
        public function getId(){
                return $this->id;
        }
        public function setId($id){
                $this->id = $id;
                return $this;
        }
        public function getName(){
                return $this->name;
        }
        public function setName($name){
                $this->name = $name;
                return $this;
        }
        public function getLastname(){
                return $this->lastname;
        }
        public function setLastname($lastname){
                $this->lastname = $lastname;

                return $this;
        }
        public function getEmail(){
                return $this->email;
        }

        public function setEmail($email){
                $this->email = $email;
                return $this;
        }
        public function getSubject(){
                return $this->subject;
        }
        public function setSubject($subject){
                $this->subject = $subject;
                return $this;
        }
        public function getMessage(){
                return $this->message;
        }
        public function setMessage($message){
                $this->message = $message;
                return $this;
        }

        public static function insertData($message){
                try {
                        $conexao = Conexao::getConexao();
                        $query = $conexao->prepare("INSERT INTO tbmensagem(nome,sobrenome,email,assunto,mensagem) VALUES(?,?,?,?,?)");
                        $query->bindValue(1,$message->getName());
                        $query->bindValue(2,$message->getLastname());
                        $query->bindValue(3,$message->getEmail());
                        $query->bindValue(4,$message->getSubject());
                        $query->bindValue(5,$message->getMessage());
                        return $query->execute()?"Mensagem Cadastrada com sucesso!":"error";
                } catch (Exception $e) {
                        return "error";
                }
        }

        public static function readData(){
                try {
                        $conexao = Conexao::getConexao();
                        $query = $conexao->query("SELECT id,nome,sobrenome,email,assunto,mensagem FROM tbmensagem");
                        $query->execute();
                        return $query->fetchAll();
                } catch (Exception $e) {
                        return 'error';
                }
        }
        public static function read($id=-1){
                try {
                        $conexao = Conexao::getConexao();
                        $query = $conexao->prepare("SELECT id,nome,sobrenome,email,assunto,mensagem FROM tbmensagem WHERE id = ?");
                        $query->bindValue(1,$id);
                        $query->execute();
                        return $query->fetch();
                } catch (Exception $e) {
                        return 'error';
                }  
        }
        public static function update($message,$id){
                try {
                        $conexao = Conexao::getConexao();
                        $query = $conexao->prepare("UPDATE tbmensagem SET nome = ?, sobrenome = ?,email = ?, assunto = ?, mensagem = ? WHERE id = ?");
                        $query->bindValue(1,$message->getName());
                        $query->bindValue(2,$message->getLastname());
                        $query->bindValue(3,$message->getEmail());
                        $query->bindValue(4,$message->getSubject());
                        $query->bindValue(5,$message->getMessage());
                        $query->bindValue(6,$id);
                        return $query->execute()?"Campo id: $id atualizado com sucesso!":"error";
                } catch (Exception $e) {
                        return "error";
                }
        }
        public static function delete($id){
                try {
                        $conexao = Conexao::getConexao();
                        $query = $conexao->prepare("DELETE FROM tbmensagem WHERE id = ?");
                        $query->bindValue(1,$id);
                        return $query->execute()?"ok":"error";
                } catch (Exception $e) {
                        return "error";
                }
        }
         
    }
?>