<?php

namespace tests\Twig\Helpers;

use Kisphp\Twig\AbstractTwigFunction;

class DemoFunction extends AbstractTwigFunction
{
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

    public function getProvidedOptions()
    {
        return $this->getExtensionOptions();
    }
}
