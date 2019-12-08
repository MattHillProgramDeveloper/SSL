<?php

class welcome extends AppController{
    public function __construct($parent){

        $this->parent = $parent;

    }

    public function index(){
        $data = array();
        $data["pagename"] = "home";

        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"/portfolio", "contact"=>"/contact");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("homeBody");
        $this->parent->getView("footer");
    }



}
?>