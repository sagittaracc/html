<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SomeTest extends TestCase
{
    public function testSomething(): void
    {
        $expected = [];
        $actual = [];
        $this->assertSame($expected, $actual);
    }
}