<?php

namespace App;

use App\Interfaces\FormBuilder;
use App\Fields\TextField;


class Form implements FormBuilder {
    public $type;
    public $form;
    public $formID;
    public $fields = [];

    public function addField($type)
    {
        switch ($type) {
            case 'text':
                $text = new TextField('text');
                array_push($fields, $text);
                break;
            default:
                return '';
        }
    }

    public function removeField($fieldId)
    {
        switch ($fieldId) {
            case 1 :
                array_splice($fields, 1, $fieldId);
                break;
            default:
                return '';
        }
    }

    public function submitForm($formID)
    {
        // TODO: Implement submitForm() method.
    }
}