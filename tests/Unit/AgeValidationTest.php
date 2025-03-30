<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class AgeValidationTest extends TestCase
{
    /** @test */
    public function it_fails_if_age_is_below_20()
    {
        // Arrange
        $data = ['age' => 18];

        // Act
        $validator = Validator::make($data, ['age' => 'required|integer|min:20']);

        // Assert
        $this->assertTrue($validator->fails());
    }

    /** @test */
    public function it_passes_if_age_is_20_or_above()
    {
        // Arrange
        $data = ['age' => 20];

        // Act
        $validator = Validator::make($data, ['age' => 'required|integer|min:20']);

        // Assert
        $this->assertFalse($validator->fails());
    }
}
