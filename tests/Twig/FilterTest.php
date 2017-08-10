<?php

namespace tests\Twig;

use PHPUnit\Framework\TestCase;
use tests\Twig\Helpers\DemoFilter;

class FilterTest extends TestCase
{
    public function testFunctionName()
    {
        $func = DemoFilter::create();

        self::assertSame('demo', $func->getName());
    }

    public function testCallable()
    {
        $func = DemoFilter::create();
        $callable = $func->getCallable();

        self::assertSame('name', $callable('name'));
    }
}
