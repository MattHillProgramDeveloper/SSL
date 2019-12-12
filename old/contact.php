<?php

class contact extends AppController{
    public function __construct($parent){

        $this->parent = $parent;

    }

    public function index(){
        $data = array();
        $data["pagename"] = "contact";

        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"/portfolio", "register"=>"/register", "contact"=>"/contact");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("contactBody");
        $this->parent->getView("footer");
    }



}
?>