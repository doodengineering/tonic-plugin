<?php

namespace Plugin\View\Component;

use DOOD\Tonic\View\Component;

class GreetingComponent extends Component
{
    public static string $tag = 'greeting';
    protected string $template = 'components.greeting';
    
    public string $name;

    public function __construct(string $name = 'World')
    {
        $this->name = $name;
    }
}
