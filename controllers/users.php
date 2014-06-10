<?php

class Users extends Controller{
    
    function __construct() {
         parent::__construct();    
    }
    
    function login($zmienna = null) {
        
        if($zmienna == 'run') {
            
            $this->run();
        } 
        
        $this->view->menuActiv = 'login';
        $this->view->header = 'Logowanie';
        $this->view->render('users/login');
        
    }
    
    
    public function profil() {
        
        $this->view->dane = $this->model->profil();
        $this->view->menuActiv = 'login';
        $this->view->header = 'Edytuj Profil';
        $this->view->render('users/profil');
        
    }
    
       
    public function run() {
        
         $model = $this->model->run();
         if($model == TRUE)
         {    
             header('location: /index');
             exit();
         }
         else 
         {
             $this->view->loginError = 'Błędne dane logowania!';
                 
         }
    }
    
    public function logout() {
        
         $this->model->logout();
        
    }
    
    
}



