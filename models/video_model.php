<?php

class Video_Model extends Model {
    
    public function __construct() {
        
        parent::__construct();     
    }
    
    public function watch($videoId) {
        
                    
        $sth = $this->db->prepare("SELECT * FROM video WHERE " 
                . "id = :id LIMIT 1");
        
        $sth->execute(array(
            ':id' => $videoId
        ));
        
        $this->addOdslona($videoId);
        
        return $sth->fetch();
        
        
    }
    
    public function videoLosowe() {
        
       $sth = $this->db->prepare("SELECT * FROM video WHERE " 
                . "status = :1  LIMIT 10");
       
       $sth->execute(array(
            ':1' => 1
        ));
        
       //print_r( $sth->fetchAll() );
       
       return $sth->fetchAll();
        
    }
    
    public function addOdslona($videoId) {
        
        $sth = $this->db->prepare("UPDATE video SET odslon = odslon+1 WHERE " 
                . "id = :id LIMIT 1");
        
        $sth->execute(array(
            ':id' => $videoId
        ));

    }
    
    
}

