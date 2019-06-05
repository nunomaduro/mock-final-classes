<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Tests\Fixtures\FinalClass;

final class MockTest extends TestCase
{
    public function testFinalClassCanBeMocked(): void
    {
        $stub = $this->createMock(FinalClass::class);

        $stub->method('doSomething')
            ->willReturn('bar');

        self::assertEquals('bar', $stub->doSomething());
    }
}
