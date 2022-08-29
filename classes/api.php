<?php

class api{
public $curl;
public $result;
    public function __construct($url)
    {
        
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
        curl_setopt($this->curl, CURLOPT_USERAGENT, 'Kirolous');
        curl_setopt($this->curl, CURLOPT_URL, $url);
        $this->result = curl_exec($this->curl);
        
    }


}
?>