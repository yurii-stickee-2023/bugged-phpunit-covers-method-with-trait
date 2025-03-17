<?php
namespace Tests;

use App\Dummy;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\TestCase;

#[CoversMethod(Dummy::class, 'method1')]
class DummyTest extends TestCase
{

    public function test1()
    {
        $dummy = new Dummy();

        $this->assertSame('method1', $dummy->method1());
    }
}
