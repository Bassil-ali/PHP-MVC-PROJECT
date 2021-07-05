<?php

use Dotenv\Dotenv;

use App\Models\Post;
use App\Models\User;
use secheater\Validation\Validator;

require_once __DIR__ . '/../src/support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';


$env =  Dotenv::createImmutable(base_path());

$env->load();

app()->run();

dump(config());


$v = new Validator();

$v->setRules([

    'passowrd' => 'required|confirmed',

    'passowrd_confiramtion' => 'required'
]);

$v->make([

    'passowrd' => 'abcd',

    'passowrd_confirmation' => 'abcdd',

]);

dump($v->errors());

dump(Post::all());