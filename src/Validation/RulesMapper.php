<?php

namespace secheater\Validation;

use secheater\Validation\Rules\MaxRule;
use secheater\Validation\Rules\EmailRule;
use secheater\Validation\Rules\UniqueRule;
use secheater\Validation\Rules\BetweenRule;
use secheater\Validation\Rules\AlphaNumRule;
use secheater\Validation\Rules\RequiredRule;
use secheater\Validation\Rules\ConfirmedRule;

trait RulesMapper
{
    protected static array $map = [
        'required' => RequiredRule::class,
        'alnum' => AlphaNumRule::class,
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
