<?php

namespace inc\services;

class Validation
{
    public function validInput($err, $v, $k, $min, $max, $empty = false)
    {
        if (!empty($v)) {
            if (mb_strlen($v) < $min) {
                $err[$k] = 'Minimum ' . $min . ' caracteres';
            } elseif (mb_strlen($v) > $max) {
                $err[$k] = 'Maximum ' . $max . ' caracteres';
            }
        } else {
            if ($empty) {
                $err[$k] = 'Veuillez renseigner ce champ';
            }
        }
        return $err;
    }
}
