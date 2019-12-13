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



    public function recv(){


        $file = fopen("./assets/login.txt","r"); //opens the text file
        while(! feof($file)){//loops through the text file trying to match a login and password will go to end of file
            $userLookup = explode("|",fgets($file));//gets information from the text file one ine at a time

                //compares submitted login against stored login data
                //use strtolower() so that the email for login is not case sensitive
            if(strtolower($userLookup[0]) == strtolower($_POST["email"]) && $userLookup[1] == $_POST["password"] ){

                //stores $_SESSION variable upon login
                $_SESSION["isloggedin"] = TRUE;
                $_SESSION["useremail"] = $_POST["email"];
                $_SESSION["bio"] = $userLookup[2];//THIS IS WHERE THE USER PROFILE DATA IS STORED.
                break;//break out of the search loop once the login credentials are matched
            }
             
        }//End of User Search Loop

        if(@$_SESSION["isloggedin"] == TRUE){//if user is logged in go to profile page
            fclose($file);
            header("location:/profile");
        }else{//if user is not logged in, bounce them to the error notification and wipe $_SESSION variables
            $_SESSION["isloggedin"] = FALSE;
            $_SESSION["useremail"] = "";
            fclose($file);
            header("location:/login?msg=Invalid login and password combination");
        }

    }


}
?>