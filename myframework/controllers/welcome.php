<?php

class welcome extends AppController{

    public function __construct($parent){

        $this->parent = $parent;

        //var_dump($parent);
        //echo "welcome/";
    }


    public function index(){
        echo "Welcome Index.";
    }

    public function about(){

        $data = array();
        $data["pagename"] = "about";
        $data["navigation"] = array("home"=>"/welcome", "about"=>"./about");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("body");
        $this->parent->getView("footer");
    }


}
?>