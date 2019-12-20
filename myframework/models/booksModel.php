<?php

class booksModel{

    public function __construct($parent){

        $this->db = $parent->db;

    }

    public function googleBooks($term=''){

        $client = new Google_Client();
        $client->setApplicationName("sslapi");
        $client->setDeveloperKey("AIzaSyCUrtN_JSMO1Ri1SI4-rAnvny7pC-owTFg");

        $service = new Google_Service_Books($client);

        $optParams = array("filter"=>"free-ebooks");
        $result = $service->volumes->listVolumes($term,$optParams);

        return $result;


    } 
    
}





?>