<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class YourModelTest extends TestCase
{
    use RefreshDatabase;

    /** @test untuk Model */
    public function it_can_create_a_model_instance()
    {
        // Arrange: Persiapkan data model

        // Act: Simpan data ke database

        // Assert: Pastikan data tersimpan di database
    }

    /** @test untuk Validasi */
    public function it_validates_data_correctly()
    {
        // Arrange: Buat data dengan skenario valid & invalid

        // Act: Jalankan validasi

        // Assert: Pastikan hasil validasi sesuai harapan
    }
}
