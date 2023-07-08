<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\OrderController;
use App\Models\Order;




class OrderApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testOrdersCanBeRetrieved(){

        $response = $this->get('/api/orders');

        $response->assertStatus(200);
    }

    public function testOrdersCanBeCreated(){

        $payload = [
            'name' => 'Nancy Okoye',
            'product' => 'Shoes',
            'quantity' => 4,

        ];

        $response = $this->post('/api/orders', $payload);

        $response->assertStatus(201);
        $this->assertDatabaseHas('orders', $payload);
    }



    public function testOrdersCanBeDisplayed()
    {
        // $orders = Order::factory()->count(4)->create();

        $response = $this->get('/api/orders');

        $response->assertStatus(200);
        // $response->assertJsonCount($orders->count());
        // $response->assertJson($orders->toArray());
    }



}
