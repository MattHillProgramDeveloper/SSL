<?php

class crud extends AppController{
   
    public function __construct($parent){
        $this->parent = $parent;

        if(!@$_SESSION["isloggedin"] || @$_SESSION["isloggedin"] != TRUE){
            header("location:/login?msg=Not Allowed");
        }

    }

    public function index(){

        $data = array();
        $data["pagename"] = "crud";

        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"/portfolio", "appointment"=>"/appointment", "login"=>"/login");
        
        $sql = "select * from fruit_table";
        $data["fruit"] = $this->parent->getModel("fruit")->select($sql);

        $this->parent->getView("header",$data);
        $this->parent->getView("crud", $data);
        $this->parent->getView("footer");

    }

    public function addForm(){

        $data = array();
        $data["pagename"] = "crud";

        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"/portfolio", "appointment"=>"/appointment", "login"=>"/login");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("addForm");
        $this->parent->getView("footer");


    }

    public function addAction(){

    
        $sql = "insert into fruit_table (name) values (:name)";
        $data["fruit"] = $this->parent->getModel("fruit")->insert($sql,array(":name"=>$_REQUEST["name"]));

        header("location:/crud");
    }

}
?>