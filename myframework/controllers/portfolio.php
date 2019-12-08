<?php

class portfolio extends AppController{
    public function __construct($parent){

        $this->parent = $parent;

    }

    public function index(){
        $data = array();
        $data["pagename"] = "portfolio";

        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"/portfolio", "contact"=>"/contact");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("portfolioBody");
        $this->parent->getView("footer");
    }



}
?>