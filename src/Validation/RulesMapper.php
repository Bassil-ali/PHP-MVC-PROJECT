<?php

namespace secheater\Validation;

use secheater\Validation\Rules\MaxRule;
use secheater\Validation\Rules\BetweenRule;
use secheater\Validation\Rules\RequiredRule;
use secheater\Validation\Rules\AlphaNumericalRule;
use secheater\Validation\Rules\ConfirmedRule;
use secheater\Validation\Rules\EmailRule;
use secheater\Validation\Rules\UniqueRule;

trait RulesMapper
{
    protected static array $map = [
        'required' => RequiredRule::class,
        'alnum' => AlphaNumericalRule::class,
        'max' => MaxRule::class,
        'between' => BetweenRule::class,
        'email' => EmailRule::class,
        'confirmed' => ConfirmedRule::class,
        'unique' => UniqueRule::class,
    ];

    public static function resolve(string $rule, $options)
    {
        return new static::$map[$rule](...$options);
    }
}
