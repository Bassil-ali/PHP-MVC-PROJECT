<?php
namespace secheater\Validation\Rules;

use secheater\Validation\Rules\Contract\Rule;



class AlphaNumRule implements Rule
{
    public function apply($field, $value, $data)
    {
        return preg_match('/^[a-zA-Z0-9]+/', $value);
    }

    public function __toString()
    {
        return '%s must be alpha numeric only';
    }
}
