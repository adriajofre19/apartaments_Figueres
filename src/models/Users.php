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
        $stm = $this->sql->prepare("select id, nom, cognoms from users where id = :user_id;");
        $stm->execute([':user_id' => $userId]);
        
        $tasks = array();
        while ($task = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $tasks[] = $task;
        }
        return $tasks; 
    }


    public function login($user, $pass){
        $stm = $this->sql->prepare('select * from users where user=:user;');
        $stm->execute([':user' => $user]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        
        if(is_array($result) && $result["pass"] == $pass){
            return $result;
        } else {
            return false;
        }
    }

    public function addUser($nom,$cognoms,$email,$telefon,$card,$user,$pass,$rol) {
        $stm = $this->sql->prepare('insert into users (nom, cognoms, email, telefon, card, user, pass, rol) values (:nom, :cognoms,:email, :telefon, :card, :user, :pass, :rol);');
        $result = $stm->execute([':nom' => $nom, ':cognoms' => $cognoms, ':email' => $email, ':telefon' => $telefon, ':card' => $card, ':user' => $user, ':pass' => $pass, ':rol'=>$rol ]);
    }

    public function editUser($nom, $cognoms, $telefon, $email, $card, $user, $pass, $rol) {
    $stm = $this->sql->prepare("UPDATE users SET nom = :nom, cognoms = :cognoms, telefon = :telefon, email = :email, card = :card, user = :user, pass = :pass, rol = :rol WHERE user = :user");
    
    $stm->execute([
        ':nom' => $nom,
        ':cognoms' => $cognoms,
        ':telefon' => $telefon,
        ':email' => $email,
        ':card' => $card,
        ':user' => $user,
        ':pass' => $pass,
        ':rol' => $rol
    ]);
}

    public function editRoom($titol,$preu_alta,$preu_baixa,$temporades,$longitud,$latitud,$n_habitacions,$metres_quadrats, $adreca_postal) {
    $stm = $this->sql->prepare("UPDATE apartamentos SET titol = :titol, preu_alta = :preu_alta, preu_baixa = :preu_baixa, temporades = :temporades, longitud = :longitud, latitud = :latitud, n_habitacions = :n_habitacions, metres_quadrats = :metres_quadrats, adreca_postal = :adreca_postal WHERE titol = :titol");

    $stm->execute([
        ':titol' => $titol,
        ':preu_alta' => $preu_alta,
        ':preu_baixa' => $preu_baixa,
        ':temporades' => $temporades,
        ':longitud' => $longitud,
        ':latitud' => $latitud,
        ':n_habitacions' => $n_habitacions,
        ':metres_quadrats' => $metres_quadrats,
        ':adreca_postal' => $adreca_postal
    
    ]);
}


     public function getUserData($userId) {
        $stm = $this->sql->prepare("select id, nom, cognoms, telefon, email, card, user, pass, rol from users where id = :user_id;");
        $stm->execute([':user_id' => $userId]);
        
        $tasks = $stm->fetch(\PDO::FETCH_ASSOC);
        return $tasks;

    
    }

    public function getRooms(){
        $stm = $this->sql->prepare("select * from APARTAMENTOS;");
        $stm->execute();
        $apps = array();

        while ($app = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $apps[] = $app;
        }
        return $apps; 
    }

    public function AddApps($titol,$preu_alta,$preu_baixa,$temorades,$longitud,$latitud,$n_habitacions,$metres_quadrats,$descripcio,$adreca_postal){
        $stm = $this->sql->prepare('insert into apartamentos (titol, preu_alta, preu_baixa, temporades, longitud, latitud, n_habitacions, metres_quadrats, descripcio, adreca_postal) values (:titol, :preu_alta, :preu_baixa, :temporades, :longitud, :latitud, :n_habitacions, :metres_quadrats, :descripcio, :adreca_postal);');
        $result = $stm->execute([':titol'=>$titol, ':preu_alta'=>$preu_alta, ':preu_baixa'=>$preu_baixa, ':temporades'=>$temporades, ':longitud'=>$longitud, ':latitud'=>$latitud, ':n_habitacions'=>$n_habitacions, ':metres_quadrats'=>$metres_quadrats, ':descripcio'=>$descripcio, ':adreca_postal'=>$adreca_postal ]);
    }

    public function deleteRoom($id){
        $stm = $this->sql->prepare("DELETE FROM apartamentos WHERE id = :id");
        $stm->execute([':id' => $id]);
    }

    public function getUsers(){
        $stm = $this->sql->prepare("select * from users;");
        $stm->execute();
        $apps = array();

        while ($app = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $apps[] = $app;
    }
    return $apps;
}

    public function deleteUser($id){
            $stm = $this->sql->prepare("DELETE FROM users WHERE id = :id");
            $stm->execute([':id' => $id]);
        }

        public function addReserva($ID_Usuari, $ID_Apartament, $Data_Entrada, $Data_Sortida, $Preu_Per_Dia, $n_persones){
            $stm = $this->sql->prepare('insert into reserva (ID_Usuari, ID_Apartament, Data_Entrada, Data_Sortida, Preu_Per_Dia, n_persones) values (:ID_Usuari, :ID_Apartament, :Data_Entrada, :Data_Sortida, :Preu_Per_Dia, :n_persones);');
            $result = $stm->execute([':ID_Usuari'=>$ID_Usuari, ':ID_Apartament'=>$ID_Apartament, ':Data_Entrada'=>$Data_Entrada, ':Data_Sortida'=>$Data_Sortida, ':Preu_Per_Dia'=>$Preu_Per_Dia, ':n_persones'=>$n_persones ]);
        }


    public function getRoomById($apartamentId){
        $stm = $this->sql->prepare("select * from apartamentos where id = :apartamentId;");
        $stm->execute([':apartamentId' => $apartamentId]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);

        return $result; 
    }



}