<?php

namespace App\Interfaces;

interface FormBuilder {

    public function addField($type);

    public function removeField($field);

    public function submitForm($formId);
}