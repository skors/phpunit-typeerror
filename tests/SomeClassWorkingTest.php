<?php

declare(strict_types=1);

namespace PhpunitTypeErrorTest;

use PHPUnit\Framework\TestCase;
use PhpunitTypeError\AnotherInterface;
use PhpunitTypeError\SomeClass;

class SomeClassWorkingTest extends TestCase
{
    public function testSomeMethod(): void
    {
        $asset = $this->createMock(AnotherInterface::class);
        $someClass = new SomeClass();

        $this->assertEquals(1, $someClass->someOtherMethod($asset));
    }

    public function testInvalidAsset(): void
    {
        $someClass = new SomeClass();

        $this->expectException(\TypeError::class);
        $this->expectExceptionMessageMatches('/must be an instance of/');

        $someClass->someMethod(null);
    }
}
