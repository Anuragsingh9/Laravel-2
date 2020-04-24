<?php
namespace App\SocialMedia;

class Facebook{
    private $client_id;
    private $client_secret;
    private $redirect_url;
    
    public function __construct($facebook){
        
        // dd($facebook['client_id']);

        $this->$client_id = $facebook["client_id"];
        $this->$client_secret = $facebook['client_secret'];
        $this->$redirect_url = $facebook['redirect'];
    }

    public function getclientId(){
        return $this->client_id;

    }
    public function getclientsecret(){
        return $this->client_secret;
    }
    public function getclienturl(){
        return $this->redirect_url;
    }
}