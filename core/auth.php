<?php
class auth{
    
    private $DATABASE;
    
    function __construct($db)
    {
        $this->DATABASE = $db;
    }
    
    function register($name, $password, $password2)
    {
        if(empty($name) || empty($password) || empty($password2)){ return 'EMPTY_FIELD';}
                                                                  
        $hashed_password = password_hash($password,PASSWORD_DEFAULT);
                                                                  
        $c = $this->DATABASE->count("accounts", [ "name" => $name]);
                                                                  
        if($c>0){return 'NAME_ALREADY_EXISTS';}
        
        $this->DATABASE->insert("accounts", [
            "name" => $name,
            "password" => $hashed_password
        ]);
        return true;
                                                                  
    }
    
    function login($name,$password)
    {
        $c = $this->DATABASE->get("accounts", "*",[ "name" => $name]);
        
        if(!isset($c['id']) || empty($c['id'])){return 'WRONG_USERNAME';}
        
        if(!password_verify($password, $c['password'])){return'WRONG_PASSWORD';}
        
        $this->sessionSet($c['id']);
        return true;
        
    }
    
    function sessionSet($id)
    {
        $token = md5(uniqid(rand(), true));
        $_SESSION["token"] = $token; 
        $this->DATABASE->delete("sessions",['userid'=>$id]);
        $this->DATABASE->Insert("sessions",['userid'=>$id,'token'=>$token]);
    }
    
    function isOnline()
    {
        if(isset($_SESSION["token"]) && !empty($_SESSION["token"]))
        {
           $c = $this->DATABASE->count("sessions",['token'=>$_SESSION["token"]]);
            if($c>0){return true;}
        }
        return false;
    }

}
?>