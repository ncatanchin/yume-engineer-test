<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_index(): void
    {
        Sanctum::actingAs(User::factory()->create(), ['*']);

        $response = $this->get('api/products');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     */
    public function test_index_paginated(): void
    {
        Sanctum::actingAs(User::factory()->create(), ['*']);

        $product = Product::factory()->count(10)->create();

        $response = $this->get('api/products?page=2');

        $response->assertStatus(200);
    }


    /**
     * A basic feature test example.
     */
    public function test_show(): void
    {
        Sanctum::actingAs(User::factory()->create(), ['*']);

        $product = Product::factory()->create();

        $response = $this->get('api/products/'.$product->id);

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     */
    public function test_store(): void
    {
        Sanctum::actingAs(User::factory()->create(), ['*']);

        $response = $this->post(
            'api/products',
            [
                'name' => 'Test product',
                'description' => 'This is a test product',
                'price' => '100',
            ]
        );

        $response->assertStatus(201);
    }

    /**
     * A basic feature test example.
     */
    public function test_store_fails_on_invalid_request(): void
    {
        Sanctum::actingAs(User::factory()->create(), ['*']);

        $response = $this->json('post', 'api/products', [
            'description' => 'This is a test product',
            'price' => '100',
        ]);

        $response->assertStatus(422);
    }

    /**
     * A basic feature test example.
     */
    public function test_update(): void
    {
        Sanctum::actingAs(User::factory()->create(), ['*']);

        $product = Product::factory()->create();

        $response = $this->put('api/products/'.$product->id, ['name' => 'testing']);

        $response->assertStatus(200);
    }


    /**
     * A basic feature test example.
     */
    public function test_update_fails_with_invalid_name(): void
    {
        Sanctum::actingAs(User::factory()->create(), ['*']);

        $product = Product::factory()->create();

        $response = $this->json('put', 'api/products/'.$product->id, [
            'name' => 'ab',
        ]);

        $response->assertStatus(422);
    }

    /**
     * A basic feature test example.
     */
    public function test_delete(): void
    {
        Sanctum::actingAs(User::factory()->create(), ['*']);

        $product = Product::factory()->create();

        $response = $this->delete('api/products/'.$product->id);

        $response->assertStatus(204);
    }
}
