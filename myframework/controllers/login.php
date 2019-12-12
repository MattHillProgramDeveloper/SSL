<?php

class login extends AppController{
    public function __construct($parent){

        $this->parent = $parent;

    }

    public function index(){
        $data = array();
        $data["pagename"] = "login";

        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"/portfolio", "appointment"=>"/appointment", "login"=>"/login");

        $this->parent->getView("header",$data);
        $this->parent->getView("loginBody");
        $this->parent->getView("footer");
    }


    public function success(){

        $data = array();
        $data["pagename"] = "login";

                $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"/portfolio", "appointment"=>"/appointment", "login"=>"/login");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("success");
        $this->parent->getView("footer");

    }

    public function recv(){


        if($_POST["email"] == "mike@aol.com" && $_POST["password"] == "1234"){
            
            $_SESSION["isloggedin"] = TRUE;
            $_SESSION["useremail"] = $_POST["email"];

            header("location:/crud");
        }else{

            $_SESSION["isloggedin"] = FALSE;
            $_SESSION["useremail"] = "";

            header("location:/login?msg=Invalid login and password");
        }
        
    }


}
?>