<?php

class ProblemMatcherTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers \App\Entity\Foo::sayFoo
     */
    public function testMatcher()
    {
        // just fail here :)
        $this->assertTrue(true);
    }

    /**
     * @covers \App\Entity\Foo::sayFoo
     */
    public function testAnotherFail()
    {
        // just fail here :)
        $this->assertFalse(false);
    }
}
