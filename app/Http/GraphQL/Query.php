<?php

namespace App\Http\GraphQL;

class Query
{
    public function hello($root, array $args, $context, $info)
    {
        return array('message' => 'hello');
    }
}
