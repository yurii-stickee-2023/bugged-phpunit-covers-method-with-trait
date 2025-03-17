<?php
namespace Tests;

use App\DummyWithTrait;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\TestCase;

#[CoversMethod(DummyWithTrait::class, 'method1')]
class DummyWithTraitTest extends TestCase
{

    public function test1()
    {
        $dummy = new DummyWithTrait();

        $this->assertSame('method1', $dummy->method1());
    }
}
