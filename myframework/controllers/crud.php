<?php

class crud extends AppController{
   
    public function __construct($parent){
        $this->parent = $parent;

        if(!@$_SESSION["isloggedin"] || @$_SESSION["isloggedin"] != TRUE){
            header("location:/login?msg=Not Allowed");
        }

    }
//Read Fruit Method
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
//Create Fruit Methods
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

//Update Fruit Methods
    public function updateForm(){

        $data = array();
        $data["pagename"] = "crud";

        $data["navigation"] = array("home"=>"/welcome","Books Api"=>"/books/showApi", "portfolio"=>"/portfolio", "appointment"=>"/appointment", "login"=>"/login");
        
        $id = $this->parent->urlPathParts[2];

        $sql = "select * from fruit_table where id = :id";
        $data["fruit"] = $this->parent->getModel("fruit")->select($sql, array(":id"=>$id));

        $this->parent->getView("header",$data);
        $this->parent->getView("updateForm",$data);
        $this->parent->getView("footer");

    }

    public function updateAction(){

        $id = $this->parent->urlPathParts[2];
        $name = $_REQUEST["name"];
        $sql = "update fruit_table set name = :name where id=:id";
        $data["fruit"] = $this->parent->getModel("fruit")->update($sql,array(":name"=>$name,":id"=>$id));

        header("location:/crud");
    }

//Delete Fruit Methods
    public function deleteAction(){

        $id = $this->parent->urlPathParts[2];
    
        $sql = "delete from fruit_table where id=:id";
        $data["fruit"] = $this->parent->getModel("fruit")->insert($sql,array(":id"=>$id));

        header("location:/crud");
    }

}
?>