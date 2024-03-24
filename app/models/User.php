<?php 
class User{  
    private $username;
    private $password;
    private $data;  
    public function __construct() 
    {
        $this->db = new Database;
    }   
      
    public function __get($proprety){ 
        echo 'this proprety   '.$proprety. ' is not existe';  
    }  
    public function __call($propert,$test){  
        echo 'this function not existe'; 
        echo $test;
    }   

    public function register($data){  
        $this->db->query('INSERT INTO `users` (username, email, password) VALUES (:username, :email, :password)');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']); 

        if($this->db->execute()){
            return true;
        }else{  
            return false; 
        }   
    } 
    public function login($username,$password){ 
        $this->db->query('SELECT * FROM `users` where username= :username'); 
        $this->db->bind(':username', $username);  
        $row=$this->db->single();   
        $hash_password = $row['password'];       
        if(password_verify($password,$hash_password)){
            return $row; 
        }else{   
            return false;  
        }   
    }       

    public function getUserById($id){  
        $this->db->query('SELECT * FROM users WHERE id_user = :id');
        $this->db->bind(':id',$id); 
        $row = $this->db->single();

        return $row;  
    }  

    public function findUserByEmail($email){
        $this->db->query("SELECT * FROM users WHERE email = :email"); 
        $this->db->bind(':email', $email);
  
        $row = $this->db->single();
  
        //Check Rows
        if($this->db->rowCount() > 0){
          return true;
        } else {
          return false;
        }
    } 
}  
