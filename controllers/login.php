<?php

class Login extends Controller{
    
    function __construct() {
         parent::__construct();    
    }
    
    function index() {
        
        $this->view->menuActiv = 'login';
        $this->view->render('login/index');
        
    }
    
    public function run() {
        
         $model = $this->model->run();
         if($model == TRUE)
         {    
             $this->view->menuActiv = 'home';
             $this->view->render('index/index');
         }
         else 
         {
             $this->view->loginError = 'Błędne dane logowania!';
             $this->view->menuActiv = 'login';
             $this->view->render('login/index');
                 
         }
    }
    
    public function logout() {
        
         $this->model->logout();
        
    }
    
    
}

