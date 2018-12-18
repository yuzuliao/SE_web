<?php
    class HeWoModel
    {
        private $view;
        
        private $NOW_STATE;

        private $IDLE_STATE;
        private $START_STATE;
        private $HOME_STATE;
        private $FAMILY_STATE;
        private $FRIEND_STATE;
        private $CARD_STATE;
        private $ADs_STATE;
        private $EXIT_STATE;

        public $account;
        public $password;
        public function __construct(){
            $this->IDLE_STATE = "IDLE";
            $this->START_STATE = "START";
            $this->HOME_STATE = "HOME";
            $this->FAMILY_STATE = "FAMILY";
            $this->FRIEND_STATE = "FRIEND";
            $this->CARD_STATE = "CARD";
            $this->ADs_STATE = "ADs";
            $this->EXIT_STATE = "EXIT";
        }
        public function setView($view){
            $this->view = $view;
            $this->NOW_STATE = "test";
        }

        public function checkInfo(){
            if($this->accessDatabase()){
                if($this->login($account,$password)) {
                    $this->NOW_STATE = $this->HOME_STATE;
                }
                else{
                    //登入失敗
                }
                
            }
        }

        public function login($account,$password){
            return TRUE;
        }

        public function accessDatabase(){
            return TRUE;
        }
        public function getUpdate(){
            return $this->NOW_STATE;
        }

        public function initState($state){
            $this->NOW_STATE = $state;
        }

        public function setState($state){
            if($this->accessDatabase()){
                if($this->NOW_STATE == $state){
                    header("Refresh:0");
                }
                else{
                    $this->NOW_STATE = $state;
                    $this->view->stateChange();
                }
            }
        }
        public function getState(){
            return $this->NOW_STATE;
        }

    }

?>