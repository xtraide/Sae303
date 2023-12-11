<?php

namespace Core\Html;

class Form
{
    private $data;
    public $surround = 'p';
    /**
     * Constructeur de la class Form
     * @param array $data 
     */
    public function __construct($data = array())
    {
        $this->data = $data;
    }
    /**
     * entoure les champs du formulaire
     * @param string $html 
     * @return string
     */
    private function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }
    /**
     * Recupere la valeur d'un champ
     * @param string $index 
     * @return string
     */
    public function getValue($index)
    {
        if (is_object($this->data)) {
            return $this->data->$index;
        }
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
    /**
     * Cree un champ de type text
     * @param string $name 
     * @return string
     */
    public function input($name)
    {
        return $this->surround(
            '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">'
        );
    }

    /**
     * Cree un champ de type submit
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}
