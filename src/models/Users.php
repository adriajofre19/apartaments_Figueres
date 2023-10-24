<?php

namespace Daw;

class Users {

    public $sql;

    public function __construct($user, $pass, $db, $host){
        

        $dsn = "mysql:dbname={$db};host={$host}";
        try {
            $this->sql = new \PDO($dsn, $user, $pass);
        } catch (\PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage());
        }
    }

    public function getAll($userId){
        $stm = $this->sql->prepare("select id, task from tasks where deleted=0 and user_id = :user_id;");
        $stm->execute([':user_id' => $userId]);
        
        $tasks = array();
        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }
        return $tasks; 
    }


    public function login($user, $pass){
        $stm = $this->sql->prepare('select id, user, pass from users where user=:user;');
        $stm->execute([':user' => $user]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if(is_array($result) && $result["pass"] == $pass){
            return $result;
        } else {
            return false;
        }
    }

    public function addUser($nom,$cognoms,$email,$telefon,$targeta_credit,$user,$pass) {
        $stm = $this->sql->prepare('insert into users (nom, cognoms, email, telefon, targeta_credit, user, pass) values (:nom, :cognoms,:email, :telefon, :targeta_credit, :user, :pass);');
        $result = $stm->execute([':nom' => $nom, ':cognoms' => $cognoms, ':email' => $email, ':telefon' => $telefon, ':targeta_credit' => $targeta_credit, ':user' => $user, ':pass' => $pass ]);
    }




}