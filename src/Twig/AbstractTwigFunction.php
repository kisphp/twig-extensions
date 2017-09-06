<?php

namespace Kisphp\Twig;

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
