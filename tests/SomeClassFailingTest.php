<?php

declare(strict_types=1);

namespace PhpunitTypeErrorTest;

use PHPUnit\Framework\TestCase;
use PhpunitTypeError\AssetInterface;
use PhpunitTypeError\SomeClass;

class SomeClassFailingTest extends TestCase
{
    public function testSomeMethod(): void
    {
        $asset = $this->createMock(AssetInterface::class);
        $someClass = new SomeClass();

        $this->assertEquals(1, $someClass->someMethod($asset));
    }

    public function testInvalidAsset(): void
    {
        $someClass = new SomeClass();

        $this->expectException(\TypeError::class);
        $this->expectExceptionMessageMatches('/must be an instance of/');

        $someClass->someMethod(null);
    }
}
