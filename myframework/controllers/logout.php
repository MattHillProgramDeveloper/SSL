<?php

class logout extends AppController{
    
    public function __construct(){

        $_SESSION["isloggedin"] = FALSE;
        session_destroy();
        header("location:/login");

    }


}
?>