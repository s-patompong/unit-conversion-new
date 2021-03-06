<?php

namespace SPatompong\UnitConversion\Tests;

use PHPUnit\Framework\TestCase;
use SPatompong\UnitConversion\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
