<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use sagittaracc\Html;

final class HtmlTest extends TestCase
{
    public function testTag(): void
    {
        $expected = '<div id="main"><span>Hello world</span></div>';
        $actual = Html::tag('div', ['id' => 'main'], '<span>Hello world</span>');
        $this->assertSame($expected, $actual);
    }
}