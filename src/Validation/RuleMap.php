<?php

namespace secheater\Validation;

use secheater\Validation\Rules\EmailRule;
use secheater\Validation\Rules\BetweenRule;
use secheater\Validation\Rules\AlphaNumRule;
use secheater\Validation\Rules\RequiredRule;
use secheater\Validation\Rules\ConfirmedRule;
use secheater\Validation\Rules\UniqueRule;

class RuleMap
{
    protected static array $map = [
        'required' => RequiredRule::class,
        'email' => EmailRule::class,
        'alnum' => AlphaNumRule::class,
        'between' => BetweenRule::class,
        'confirmed' => ConfirmedRule::class,
        'unique' => UniqueRule::class
    ];

    public static function resolve($rule, $options)
    {
        return new static::$map[$rule](...$options);
    }
}
