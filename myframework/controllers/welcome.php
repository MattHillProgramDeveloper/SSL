<?php

class welcome extends AppController{

    public function __construct($parent){

        $this->parent = $parent;

    }

    public function home(){
        $data = array();
        $data["pagename"] = "home";
        //This array had to be different than the non "welcome" screens in order for the links to be correct.
        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"welcome/portfolio", "about"=>"welcome/about");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("homeBody");
        $this->parent->getView("footer");
    }

    public function portfolio(){
        $data = array();
        $data["pagename"] = "portfolio";
        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"./portfolio", "about"=>"./about");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("portfolioBody");
        $this->parent->getView("footer");
    }

    public function about(){

        $data = array();
        $data["pagename"] = "about";
        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"./portfolio", "about"=>"./about");
        
        $this->parent->getView("header",$data);
        $this->parent->getView("aboutBody");
        $this->parent->getView("footer");
    }


}
?>