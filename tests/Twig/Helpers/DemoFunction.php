<?php

namespace tests\Twig\Helpers;

use Kisphp\Twig\AbstractTwigFunction;

class DemoFunction extends AbstractTwigFunction
{
    public function getProvidedOptions()
    {
        return $this->getExtensionOptions();
    }

    protected function getExtensionName()
    {
        return 'demo';
    }

    protected function getExtensionCallback()
    {
        return function ($name) {
            return $name;
        };
    }
}
