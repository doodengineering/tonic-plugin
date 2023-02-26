<?php

namespace Plugin\Feature;

use DOOD\Tonic\Registrar\Access\OnWebsiteOnly;
use DOOD\Tonic\Registrar\Feature;

use const Plugin\IDENTIFIER;

class BooksContent extends Feature
{
    use OnWebsiteOnly, WithoutHooks;

    public function run()
    {
        WelcomingShortcode::add();
    }
}
