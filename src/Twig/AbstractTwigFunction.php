<?php

namespace Kisphp\Twig;

abstract class AbstractTwigFunction
{
    /**
     * @var \Twig_Function
     */
    private $twigFunction;

    public function __construct()
    {
        $this->twigFunction = new \Twig_Function(
            $this->getFunctionName(),
            $this->getFunction(),
            $this->getOptions()
        );
    }

    /**
     * @return \Twig_Function
     */
    public function getTwigFunction()
    {
        return $this->twigFunction;
    }

    /**
     * @return \Twig_Function
     */
    public static function create()
    {
        $function = new static();

        return $function->getTwigFunction();
    }

    /**
     * @return string
     */
    abstract protected function getFunctionName();

    /**
     * @return Callable
     */
    abstract protected function getFunction();

    /**
     * @return array
     */
    protected function getOptions()
    {
        return [];
    }
}
