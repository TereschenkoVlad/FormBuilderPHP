<?php

namespace App;

use App\Interfaces\FieldInterface;

abstract class Field implements FieldInterface {

    private $value;
    public $type;
    public $fieldId;

    public function __construct($type) {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        return $this->value = $value;
    }

    public function validation()
    {
        if ($this->getValue()) {
            return true;
        } else {
            return false;
        }
    }
}