<?php

class Bootstrap {
    
    private $_url = 'index'; 
    private $_controller = null;    
    
    function __construct() {
        
        $this->_getUrl();        
        $this->_loadController();
        
        
    }
    
    private function _getUrl() {
        
        $this->_url = isset( $_GET['urll'] ) ? $_GET['urll'] : 'index';
        $this->_url = rtrim($this->_url, '/');
        $this->_url = explode('/', $this->_url);
        
    }
    
    private function _loadController() {
        
        $file = 'controllers/' . $this->_url['0'] . '.php';
        if(file_exists($file)) {
            
            require $file;
            $this->_controller = new $this->_url['0'];
            
            $this->_controller->loadModel($this->_url['0']);
            
            $this->_callControllerMetchod();
            
        } else {
            $this->_error();
        }     
        
    }
    
   
    private function _callControllerMetchod() {
        
        
        switch (count($this->_url)) {
            case 4:
              if (method_exists($this->_controller, $this->_url['1'])) { 
                      $this->_controller->{$this->_url['1']}($this->_url['2'],$this->_url['3']);
              } else { 
                      $this->_error();
              }
            break;
            case 3:
              if (method_exists($this->_controller, $this->_url['1'])) { 
                      $this->_controller->{$this->_url['1']}($this->_url['2']);
              } else { 
                      $this->_error();
              }
            break;
            case 2:
              if (method_exists($this->_controller, $this->_url['1'])) {
                    $this->_controller->{$this->_url['1']}();
               } else {
                   $this->_error();
               } 
            break;
            case 1:
                    $this->_controller->index();
            break;

            default:
                die('erorr controller');
                break;
        }
        
    }
 
    
    private function _error() {
        
        require 'controllers/error.php';
        $this->_controller = new Error();
        $this->_controller->index();
        
    }

}