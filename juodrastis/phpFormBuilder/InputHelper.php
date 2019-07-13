<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class FormHelper
{
    public function __construct($action, $method, $class = '')
    {
        $this->html = '<form class="'.$class.'" action="'.$action.'" method="'.$method.'">';
    }
    public function addInput($attributes, $label = '', $wrapper = '')
    {
        //implementuoti Label
        $html = '';
        $html.= '<input ';

        foreach ($attributes as $key => $element){
            $html .= ' '.$key.'="'.$element.'"';
        }

        $html .= ' >';

        if($wrapper != ''){
            $html = '<div class="'.$wrapper.'">'.$html.'</div>';
        }
        $this->html .= $html;
        return $this;
    }


    public function createSelect($options, $name, $wrapper = '', $label = '')
    {
        $html = '';
        $html .= '<select name="' . $name . '">';
        foreach ($options as $value => $option) {
            $html .= '<option value="' . $value . '"';
            $html .= ' >';
            $html .= ucfirst($option);
            $html .= '</option>';
        }
        $html .= '</select>';
        if ($wrapper != '') {
            $html = '<div class="' . $wrapper . '">' . $html . '</div>';
        }
        $this->html .= $html;
        return $this;
    }




    //textarea
    public function get()
    {
        $this->html .= '</form>';
        return $this->html;
    }
}