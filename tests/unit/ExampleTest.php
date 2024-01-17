<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\TestCase;

#[CoversNothing]
class ExampleTest extends TestCase
{
    public function testSample(): void
    {
        self::assertSame('test', 'test');
    }
}