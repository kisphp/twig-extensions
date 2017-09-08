<?php

namespace tests\Twig;

use PHPUnit\Framework\TestCase;
use tests\Twig\Helpers\DemoFunction;
use tests\Twig\Helpers\DemoFunctionSafeHtml;

class FunctionSafeHtmlTest extends TestCase
{
    public function testFunctionName()
    {
        $func = DemoFunctionSafeHtml::create();

        self::assertSame('demo', $func->getName());
    }

    public function testCallable()
    {
        $func = DemoFunctionSafeHtml::create();
        $callable = $func->getCallable();

        self::assertSame('name', $callable('name'));
    }

    public function testOptions()
    {
        $func = new DemoFunctionSafeHtml();

        self::assertNotEmpty($func->getProvidedOptions());
    }
}
