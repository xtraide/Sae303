<?php

namespace Core\Html;

class BootstrapForm extends Form
{
    /**
     * entoure les champs du formulaire
     * @param string $html 
     * @return string
     */
    protected function surround($html)
    {
        return "<div class=\"form-group\">{$html}</div>";
    }
    /**
     * Cree un champ de type text
     * @param string $name 
     * @return string
     */
    public function input($name, $label = null, $options = [])
    {
        $type = isset($options['type']) ? $options['type'] : 'text';
        $label = $label ?? $name;
        $label = '<label>' . $label . '</label>';
        if ($type === 'textarea') {
            $input = '<textarea name="' . $name . '" class="form-control">' . $this->getValue($name) . '</textarea>';
        } else {
            $input = '<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" class="form-control">';
        }
        return $this->surround($label . $input);
    }


    /**
     * Cree un champ de type submit
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
    /**
     * Cree un champ de type file
     * @param string $name 
     * @return string
     */
    public function file($name)
    {
        return $this->surround(
            '<label>' . $name . '</label><input type="file" name="' . $name . '" value="' . $this->getValue($name) . '" class="form-control-file">'
        );
    }
    /**
     * Cree un champ de type textarea
     * @param string $name 
     * @return string
     */
    public function textarea($name)
    {
        return $this->surround(
            '<label>' . $name . '</label><textarea name="' . $name . '" class="form-control">' . $this->getValue($name) . '</textarea>'
        );
    }
    /**
     * Cree un champ de type select
     * @param string $name 
     * @param array $options 
     * @return string
     */
    public function select($name, $options)
    {
        $options_html = '';
        foreach ($options as $k => $v) {
            $selected = '';
            if ($k == $this->getValue($name)) {
                $selected = 'selected';
            }
            $options_html .= "<option value='$k' $selected>$v</option>";
        }
        return $this->surround(
            '<label>' . $name . '</label><select class="form-control" name="' . $name . '">' . $options_html . '</select>'
        );
    }
}
