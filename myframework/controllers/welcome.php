<?php
//1. Create or use existing controller in controller
//I stuck with the original welcome controller
class welcome extends AppController{
    public function __construct($parent){

        $this->parent = $parent;

    }

    //3. Open controller file and create a method
    public function home(){
        $data = array();
        $data["pagename"] = "home";
        //4. Inside the method create an array with keys and values (Menu Labels)
        //I relabled everything to "home" instead of index because I wanted them all to match.
        $data["navigation"] = array("home"=>"/welcome", "portfolio"=>"welcome/portfolio", "about"=>"welcome/about");
        //5. Inside the same method load a view and pass data to the view
        //Here we call a header body and footer while passing $data to the header view
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