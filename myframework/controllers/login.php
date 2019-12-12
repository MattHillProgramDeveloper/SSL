<?php

class login extends AppController{
    public function __construct($parent){

        $this->parent = $parent;

    }

    public function index(){
        $data = array();
        $data["pagename"] = "register";

        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"/portfolio", "appointment"=>"/appointment", "login"=>"/login");

        $this->parent->getView("header",$data);
        $this->parent->getView("loginBody");
        $this->parent->getView("footer");
    }


    public function success(){

        $data = array();
        $data["pagename"] = "register";

                $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"/portfolio", "appointment"=>"/appointment", "login"=>"/login");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("success");
        $this->parent->getView("footer");

    }

    public function recv(){

        if($_POST["email"] == "mike@aol.com" && $_POST["password"] == "1234"){

            echo "good";

        }else{

            echo "bad";

        }
    }


}
?>