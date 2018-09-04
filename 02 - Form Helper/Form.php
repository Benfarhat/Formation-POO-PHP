<?php

class Form{

    private $data;
    private $surround;

    public function __construct($data = []){
        $this->data = $data;
        $this->surround = 'p';
   
    }

    private function surround($html){
        return "<{$this->surround}>$html</{$this->surround}>";
    }

    private function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null ;
    }

    public function input($name){
        return $this->surround('<input type="text" name ="' . $name . '" value="' . $this->getValue($name) . '">');
    }

    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }
    

    /**
     * Get the value of surround
     */ 
    public function getSurround()
    {
        return $this->surround;
    }

    /**
     * Set the value of surround
     *
     * @return  self
     */ 
    public function setSurround($surround)
    {
        $this->surround = $surround;

        return $this;
    }
}