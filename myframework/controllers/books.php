<?php

class books extends AppController{
   
    public function __construct($parent){
        $this->parent = $parent;

        

    }


    public function showApi(){
       
        $data["pagename"] = "Books Api";
        $data["navigation"] = array("home"=>"/welcome","Books Api"=>"/books/showApi", "portfolio"=>"/portfolio", "appointment"=>"/appointment", "login"=>"/login");
        $data["books"] = $this->parent->getModel("booksModel")->googleBooks("Henry David Thoreau");

        $this->getView("header",$data);
        $this->getView("bookapi",$data);
        $this->getView("footer");

 

    }



}
?>