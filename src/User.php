<?php



class User {

    private $conn;

    public function __construct($db){
        $this-> conn = $db;
    }

    public function register($username, $email, $password){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (:username , :email, :password)";
        $stmt = $this -> conn->prepare($sql);
        $stmt ->bindParam(':username', $username);
        $stmt ->bindParam(':email', $email);
        $stmt ->bindParam(':password', $hash);
        return $stmt -> execute();
    }

    public function login($email,$password){
        $sql = "SELECT * FROM usuario WHERE email = :email";
        $stmt = $this -> conn->prepare($sql);
        $stmt ->bindParam(':email', $email);
        $stmt ->execute();
        $user = $stmt -> fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($password, $user['senha'])){
            return $user;
        }
        return false;
    }

    public function getUserById($userId){
        $sql = "SELECT * FROM usuario WHERE id_usuario = :id";
        $stmt = $this -> conn->prepare($sql);
        $stmt ->bindParam(':id', $userId);
        $stmt ->execute();
        return $stmt -> fetch(PDO::FETCH_ASSOC);
    }

    public function updateProfilePic($userId,$profilePic){
        $sql = "UPDATE usuario SET foto_perfil = ? WHERE id_usuario = ?";
        $stmt = $this -> conn->prepare($sql);
        $stmt ->bindParkam('si', $profilePic,$userId);
        // $stmt ->bindParam(':user', $userId);
        return $stmt -> execute();
    }


}

?>