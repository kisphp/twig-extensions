<?php

namespace Kisphp\Twig;

abstract class AbstractTwigFilter
{
    use ExtensionTrait;

    public function __construct()
    {
        $this->extension = new \Twig_SimpleFilter(
            $this->getExtensionName(),
            $this->getExtensionCallback(),
            $this->getExtensionOptions()
        );
    }
}
