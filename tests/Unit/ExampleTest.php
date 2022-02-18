<?php

namespace Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

    /** @test */
    public function it_expects_false() : void
    {
        $this->assertFalse(true);
    }
}