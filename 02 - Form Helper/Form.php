<?php

/**
 * Class Form 
 * Permet de générer un formulaire rapidement et simplement
 */
class Form
{

    /**
     * Données utilisées par le formulaire
     *
     * @var array
     */
    private $data;

    /**
     * Tag pour entourer les champs
     *
     * @var string
     */
    private $surround;

    /**
     * Fonction __construct
     *
     * @param array $data
     */
    public function __construct($data = [])
    {
        $this->data = $data;
        $this->surround = 'p';

    }

    /**
     * Entoure le code avec un tag
     *
     * @param string $html le code à entourer
     * @return string
     */
    private function surround($html)
    {
        return "<{$this->surround}>$html</{$this->surround}>";
    }

    /**
     * Retourne la valeur d'un index
     *
     * @param string $index Index de la valeur à récupérer
     * @return string
     */
    private function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param string $name
     * @return string
     */
    public function input($name)
    {
        return $this->surround('<input type="text" name ="' . $name . '" value="' . $this->getValue($name) . '">');
    }
    
    /**
     * @param string $name
     * @return string
     */
    public function submit()
    {
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