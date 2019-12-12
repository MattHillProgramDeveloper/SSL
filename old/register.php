<?php

class register extends AppController{
    public function __construct($parent){

        $this->parent = $parent;

    }

    public function index(){
        $data = array();
        $data["pagename"] = "register";

        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"/portfolio", "register"=>"/register", "contact"=>"/contact");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("registerBody");
        $this->parent->getView("footer");
    }


    public function registerConfirmed(){
        
        $data = array();
        $data["pagename"] = "register";

        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"/portfolio", "register"=>"/register", "contact"=>"/contact");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("registerConfirmed");
        $this->parent->getView("footer");

    }

    public function registerAction(){

        $errorArray = array();

        if(empty($_POST["firstname"])){
            array_push($errorArray, "First Name does not exist<br>");
            //echo "First Name does not exist";
        }
        if(!preg_match("/^[a-zA-Z]*$/", $_POST["firstname"])){
                    array_push($errorArray, "Invalid First Name<br>");
        }
        if(empty($_POST["lastname"])){
            array_push($errorArray, "Last Name does not exist<br>");
        }
        if(!preg_match("/^[a-zA-Z]*$/", $_POST["lastname"])){
            array_push($errorArray, "Invalid Last Name<br>");
        }
        if (count($errorArray) > 0){
            header("location:/register?msg=".implode("&",$errorArray));
            // foreach($errorArray as $error){
            //     echo $error."<br>";
            // }
        }else{
            // $firstname = $_POST["firstname"];
            // $lastname = $_POST["lastname"];
            // echo $firstname." ".$lastname;
            header("location:/register/registerConfirmed");
        }

        
    }


}
?>