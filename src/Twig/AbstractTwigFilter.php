<?php

namespace Kisphp\Twig;

use \Twig_Filter as TwigExtension;

abstract class AbstractTwigFilter
{
    use ExtensionTrait;

    public function __construct()
    {
        $this->extension = new TwigExtension(
            $this->getExtensionName(),
            $this->getExtensionCallback(),
            $this->getExtensionOptions()
        );
    }
}
