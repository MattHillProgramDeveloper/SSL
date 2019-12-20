<?php

class appointment extends AppController{
    public function __construct($parent){

        $this->parent = $parent;

    }

    public function index(){
        $data = array();
        $data["pagename"] = "appointment";

        $data["navigation"] = array("home"=>"/welcome","Books Api"=>"/books/showApi", "portfolio"=>"/portfolio", "appointment"=>"/appointment", "login"=>"/login");
        
        $random = substr( md5(rand()), 0, 7);
        $data["cap"]=$random;

        $this->parent->getView("header",$data);
        $this->parent->getView("appointment",$data);
        $this->parent->getView("footer");
    }

    public function confirmed(){

        $data = array();
        $data["pagename"] = "appointment";

        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"/portfolio", "appointment"=>"/appointment", "login"=>"/login");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("confirmed");
        $this->parent->getView("footer");

    }

    public function schedule(){
        //var_dump($_POST);
        $errorArray = array();
        //header("location:/appointment?msg=Thank You!");

        if(!@$_POST["usercatpcha"] || $_POST["usercatpcha"]!=$_SESSION["picture"]){
            array_push($errorArray,"Captcha Incorrect");
            }
        

        if(empty($_POST["firstname"])){
            array_push($errorArray, "First Name is missing");
            
        }

        if(empty($_POST["email"])){
            array_push($errorArray, "Email Address is missing");
        
        }  

        if(empty($_POST["phone"])){
            array_push($errorArray, "Phone Number is missing");
            
        }

        if(empty($_POST["session"])){
            array_push($errorArray, "Please select a Photo Session Type");
            
        }elseif($_POST["session"] != "engagement" && $_POST["session"] != "wedding" && $_POST["session"] != "head" && $_POST["session"] != "senior" && $_POST["session"] != "other"){
            array_push($errorArray, "Invalid Photo Session");
        }

        if(empty($_POST["location"])){
            array_push($errorArray, "Please select a location");
            
        }elseif($_POST["location"] != "studio" && $_POST["location"] != "onsite" && $_POST["location"] != "undecided"){
            array_push($errorArray, "Invalid Location");
        }

        if(!preg_match("/^[a-zA-Z]*$/", $_POST["firstname"])){
            array_push($errorArray, "Invalid First Name");
        }
        if(!preg_match("/[a-z0-9]+[_a-z0-9\.-]*[a-z0-9]+@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})/", $_POST["email"])){
            array_push($errorArray, "Invalid Email");
        }       
        if(!preg_match("/[(]?\d{3}[-.)]?[ ]?\d{3}[-.]?\d{4}\b/", $_POST["phone"])){
            array_push($errorArray, "Invalid Telephone Number");
        }
        
        
        if (count($errorArray) > 0){
            header("location:/appointment?msg=".implode("&",$errorArray));

        }else{

            header("location:/appointment/confirmed");
        }

        // echo "<br><br>";
        // var_dump($errorArray);
    }



}
?>