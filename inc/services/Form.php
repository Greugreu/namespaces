<?php

namespace inc\services;

class Form
{
    private $errors;
    private $post;

    public function __construct($errors, $method = 'POST')
    {
        if ($method == $_POST) {
            $this->post = $_POST;
        } else {
            $this->post = $_GET;
        }
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
     * @param $name
     * @return |null
     */

    private function getValue($name)
    {
        return !empty($this->post[$name]) ? $this->post[$name] : null;
    }

    /**
     * input
     * @param string $type
     * @param string $name
     * @return string
     */

    public function input(string $type, string $name)
    {
        return '<input type="' . $type . '" name=" ' . $name . ' " id="' . $name . '" value="' . $this->getValue
            ($name) .
        '" />';
    }

    /**
     * Error
     * @param $name
     * @return mixed
     */

    public function error($name)
    {
        $error = !empty($this->errors[$name]) ? $this->errors[$name] : '';
        return '<span class="error">' . $error .  '</span>';
    }

    /**
     * textarea
     * @param $name
     * @return string
     */

    public function textarea($name)
    {
        return '<textarea name="' . $name . '"></textarea>';
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
