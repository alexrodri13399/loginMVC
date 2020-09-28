<?php
class User{
    //Vamos a poner atributos.
    private $id_user;
    private $email;
    private $password;
    //Vamos a poner el constructor.
    public function __construct($email, $password) {
        $this->email=$email;
        $this->password=$password;
    }
    //Metodos getters and setters.
    //Metodo get para devolver valores y ser para meter valores.
    public function getId_user(){
        return $this->id_user;
    }
    public function setId_user($id_user){
        $this->id_user = $id_user;
        return $this;
    }
    public function getEmail(){
        return $this->email;
    } 
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }
    public function getPassword(){
        return $this->password;
    } 
    public function setPassword($password){
        $this->password = $password;
        return $this;
    }
}