<?php

class HeWoController
{
    private $model;
    private $view;
    public function __construct($model) {
        $this->model = $model;
    }
    public function setView($view){
        $this->view = $view;
    }
    public function userHasInput($input){
        if($this->vaildateRequest()){
            switch($input){
                case "Login" : 
                    $this->model->checkInfo();
                    $this->view->askPresentation();
                    break;
                case "Home" :
                    $this->model->setState("HOME"); 
                    break;
                case "Friend" : 
                    $this->model->setState("FRIEND");
                    break;
                case "Family" : 
                    $this->model->setState("FAMILY");
                    break;
                case "Card" : 
                    $this->model->setState("CARD");
                    break;
                case "Logout" : 
                    $this->model->setState("START");
                    break;
            }
        }
    }
    public function vaildateRequest(){
        return TRUE;
    }

}

?>