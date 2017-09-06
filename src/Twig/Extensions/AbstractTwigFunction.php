<?php

namespace Kisphp\Twig\Extensions;

use Kisphp\Twig\ExtensionTrait;

abstract class AbstractTwigFunction
{
    use ExtensionTrait;

    public function __construct()
    {
        $this->extension = new \Twig_SimpleFunction(
            $this->getExtensionName(),
            $this->getExtensionCallback(),
            $this->getExtensionOptions()
        );
    }
}
