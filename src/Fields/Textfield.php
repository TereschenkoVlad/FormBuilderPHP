<?php

namespace App\Fields;

use App\Field;

class TextField extends Field {

    public function validation() {
        if (parent::validation()) {
            if ($this->getValue()->length >= 3 || $this->getValue()->length <= 16) {
                return true;
            }
        }
        return false;
    }
}