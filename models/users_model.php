<?php

class Users_Model extends Model {
    
    public function __construct() {
        
        parent::__construct();     
    }
    
    public function run() {
            
        $sth = $this->db->prepare("SELECT email FROM users WHERE " 
                . "email = :email AND pass = MD5(:pass) LIMIT 1");
        $sth->execute(array(
            ':email' => $_POST['email'],
            ':pass' => $_POST['pass']
        ));
        
       
        //print_r($sth->fetch());
        
        if( $sth->rowCount() == 1 ) {
            
            // login
            Session::set('loggedIn', TRUE);
            Session::set('loggedEmail', $sth->fetch()['email']);
            
            return true;

        }
        else
        {
            // no login
            return false;
            
        }    
        
    }

    
    public function logout() {
        
        Session::destroy();
        header('location: /index');
        exit();
        
    }
    
    
    public function profil() {
        
       $sth = $this->db->prepare("SELECT * FROM users WHERE " 
                . "email = :email  LIMIT 1");
       
       $sth->execute(array(
            ':email' => Session::get('loggedEmail')
        ));
        
       //print_r( $sth->fetchAll() );
       
       return $sth->fetch();
        
    }
    
    
}

