<?php


namespace core\form;


use core\Model;

class Form
{
    public static function begin($class, $method): Form
    {
        echo sprintf('<form class="%s" method="%s">', $class, $method);
        return new Form;
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute): Field
    {
        return new Field($model, $attribute);
    }
    public function fieldset(Model $model,string $class,string $question,string $type,$attributes=[]):Fieldset
    {
        return new Fieldset($model,$class,$question,$type,$attributes);
    }
}