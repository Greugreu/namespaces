<?php

namespace inc\services;

class Form
{
    private $errors;

    public function __construct()
    {
        $this->errors = $errors;
    }

    /**
     * Label
     * @param $for
     * @return string
     */

    public function label(string $for, string $label)
    {
        return '<label for="' . $for . '">' . $label . '</label>';
    }

    /**
     * Input
     * @param $type
     * @param $name
     * @return string
     */

    public function input(string $type, string $name)
    {
        return '<input type="' . $type . '" name=" ' . $name . ' ">';
    }

    /**
     * Error
     * @param $name
     */

    public function error($name)
    {

    }

    /**
     * Submit
     * @param $name
     * @param $value
     * @return string
     */

    public function submit(string $name, $value)
    {
        return '<input type="submit" name="' . $name . '" value="' . $value . '" />';
    }
}
