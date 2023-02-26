<?php

namespace Plugin\View\Shortcode;

use DOOD\Tonic\Registrar\Shortcode;

class WelcomingShortcode extends Shortcode
{
    protected static string $tag = 'welcoming';

    protected static array $attributes = ['name' => 'Jack'];

    protected static array $required = ['name'];

    public string $name;

    public function __construct(array $attributes)
    {
        $this->name = $attributes['name'];
    }
}
