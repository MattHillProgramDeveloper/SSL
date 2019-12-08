<?php

class test extends AppController{
    public function __construct($parent){

        $this->parent = $parent;

    }

    public function index(){
        $data = array();
        $data["pagename"] = "home";

        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"/portfolio", "contact"=>"/contact", "test"=>"/test");
        
        $this->parent->getView("test",$data);
    }



}
?>