<?php

namespace Kisphp\Twig;

use Twig\TwigFunction;
use Twig\TwigFilter;

trait ExtensionTrait
{
    /**
     * @var TwigFunction|TwigFilter
     */
    protected $extension;

    /**
     * @return TwigFilter|TwigFunction|\Twig_SimpleFunction
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @return TwigFilter|TwigFunction|\Twig_SimpleFunction
     */
    public static function create()
    {
        $extension = new static();

        return $extension->getExtension();
    }

    /**
     * @return string
     */
    abstract protected function getExtensionName();

    /**
     * @return callable
     */
    abstract protected function getExtensionCallback();

    /**
     * @return array
     */
    protected function getExtensionOptions()
    {
        return [];
    }
}
