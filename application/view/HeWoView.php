<?php

class HeWoView
{
    private $model;
    private $controller;
    private $NOW_STATE;

    private $IDLE_STATE;
    private $START_STATE;
    private $HOME_STATE;
    private $FAMILY_STATE;
    private $FRIEND_STATE;
    private $CARD_STATE;
    private $ADs_STATE;
    private $EXIT_STATE;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;

        $this->IDLE_STATE = "IDLE";
        $this->START_STATE = "START";
        $this->HOME_STATE = "HOME";
        $this->FAMILY_STATE = "FAMILY";
        $this->FRIEND_STATE = "FRIEND";
        $this->CARD_STATE = "CARD";
        $this->ADs_STATE = "ADs";
        $this->EXIT_STATE = "EXIT";
    }
	
    // public function output(){
    //     echo "<p>" . $this->model->string . "</p>";
    //     echo "<p>" . $this->model->account . "</p>";
    //     echo "<p>" . $this->model->password . "</p>";
    // }
    public function askPresentation(){
        $this->NOW_STATE = $this->model->getUpdate();
        $this->updateView();
    }
    public function updateView(){
        if($this->NOW_STATE == $this->HOME_STATE){
            header("location:home.php");
        }
        if($this->NOW_STATE == $this->FAMILY_STATE){
            header("location:Family.View.php");
        }
        if($this->NOW_STATE == $this->FRIEND_STATE){
            header("location:Friend.View.php");
        }
        if($this->NOW_STATE == $this->CARD_STATE){
            header("location:Card.View.php");
        }
        if($this->NOW_STATE == $this->START_STATE){
            header("location:../../index.php");
        }
        echo $this->NOW_STATE;
        // echo "<p>" . $this->model->string . "</p>";
        // echo "<p>" . $this->model->account . "</p>";
        // echo "<p>" . $this->model->password . "</p>";
        
    }
    public function stateChange(){
        $this->NOW_STATE = $this->model->getUpdate();
        $this->updateView();
    }

}

?>