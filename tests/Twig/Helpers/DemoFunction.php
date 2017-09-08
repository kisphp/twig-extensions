<?php

namespace tests\Twig\Helpers;

use Kisphp\Twig\AbstractTwigFunction;

class DemoFunction extends AbstractTwigFunction
{
    /**
     * @return array
     */
    public function getProvidedOptions()
    {
        return $this->getExtensionOptions();
    }

    /**
     * @return string
     */
    protected function getExtensionName()
    {
        return 'demo';
    }

    /**
     * @return \Closure
     */
    protected function getExtensionCallback()
    {
        return function ($name) {
            return $name;
        };
    }
}
