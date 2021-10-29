<?php

declare(strict_types=1);

namespace PhpunitTypeError;

class SomeClass
{
    public function someMethod(AssetInterface $asset): int
    {
        return 1;
    }

    public function someOtherMethod(AnotherInterface $asset): int
    {
        return 1;
    }
}
