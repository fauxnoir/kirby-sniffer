<?php
/**
* A simple user agent sniffing object 
*/

class Sniffer {

    private $agent;
    private $isBot;

    function __construct() {
        $this->agent = $this->getAgent();
    }

    public function getAgent(){
        if (isset($_SERVER['HTTP_USER_AGENT'])) {
            return $_SERVER['HTTP_USER_AGENT'];
        } else{
            return false;
        }
    }

    public function detectBot(){
        if ( preg_match('/bot|crawl|facebook|slurp|spider/i', $this->agent ) ) {
            return true;
        } else{
            return false;
        }
    }

}