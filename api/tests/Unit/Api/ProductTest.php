<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    /**
     * A basic unit test of get all products API.
     */
    public function test_get_all_products(): void
    {
        Product::factory()->create();

        $response = $this->getJson('/api/products');

        $response->assertStatus(200);
    }
}
