<?php

class Form{

    private $data;
    private $surround;

    public function __construct($data){
        $this->data = $data;
        $this->surround = 'p';
    }

    private function surround($tag){

    }

    public function input($name){

    }

    public function submit(){
        echo "<button type='submit'>$name</button>";
    }
    
}