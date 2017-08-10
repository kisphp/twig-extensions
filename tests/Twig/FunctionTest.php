<?php

namespace tests\Twig;

use PHPUnit\Framework\TestCase;
use tests\Twig\Helpers\DemoFunction;

class FunctionTest extends TestCase
{
    public function testFunctionName()
    {
        $func = DemoFunction::create();

        self::assertSame('demo', $func->getName());
    }

    public function testCallable()
    {
        $func = DemoFunction::create();
        $callable = $func->getCallable();

        self::assertSame('name', $callable('name'));
    }
}
