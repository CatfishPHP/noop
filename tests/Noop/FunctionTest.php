<?php
namespace Tests\Noop;

use function Catfish\Noop\noop;

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testNoopFunction()
    {
        $this->assertNull(noop());
    }
}
