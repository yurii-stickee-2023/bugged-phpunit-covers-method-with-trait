<?php
namespace Tests;

use App\Dummy2;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\TestCase;

#[CoversMethod(Dummy2::class, 'method1')]
class Dummy2Test extends TestCase
{
    public function test1()
    {
        $dummy = new Dummy2();

        $this->assertSame('method1', $dummy->method1());
    }
}
