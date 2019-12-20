<?php

class profile extends AppController{
   
    public function __construct($parent){
        $this->parent = $parent;

        if(!@$_SESSION["isloggedin"] || @$_SESSION["isloggedin"] != TRUE){
            header("location:/login?msg=Not Allowed");
        }

    }

    public function index(){

        $data = array();
        $data["pagename"] = "profile";

        $data["navigation"] = array("home"=>"/welcome","Books Api"=>"/books/showApi", "portfolio"=>"/portfolio", "appointment"=>"/appointment", "login"=>"/login");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("bodyProfile");
        $this->parent->getView("footer");

    }

}
?>