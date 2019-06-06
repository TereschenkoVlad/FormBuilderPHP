<?php

namespace App\Interfaces;


interface FieldInterface {

    public function getType();

    public function getValue();

    public function setValue($value);

    public function validation();
}