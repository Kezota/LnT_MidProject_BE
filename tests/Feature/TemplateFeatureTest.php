<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\YourModel; // Ganti dengan model yang sesuai

class YourControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_perform_an_action()
    {
        // Arrange: Persiapkan data yang diperlukan

        // Act: Kirim request ke endpoint

        // Assert: Pastikan hasil sesuai harapan
    }

    /** @test */
    public function it_fails_when_given_invalid_data()
    {
        // Arrange: Buat data invalid

        // Act: Kirim request dengan data invalid

        // Assert: Pastikan error validasi muncul
    }
}
