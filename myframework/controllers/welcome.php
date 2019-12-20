<?php

class welcome extends AppController{
    public function __construct($parent){

        $this->parent = $parent;

    }

    public function index(){
        $data = array();
        $data["pagename"] = "home";

        $data["navigation"] = array("home"=>"/welcome","Books Api"=>"/books/showApi", "portfolio"=>"/portfolio", "appointment"=>"/appointment", "login"=>"/login");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("homeBody");
        $this->parent->getView("footer");
    }



}
?>