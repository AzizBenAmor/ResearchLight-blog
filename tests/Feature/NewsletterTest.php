<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsletterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create_news_letter(): void
    {
        $user=User::factory()->create();
        $response = $this->actingAs($user)->post('/NewLetter',[
            'email'=>'emailForTest@gmail.com',
        ]);
        $response->assertStatus(302);
    }
}
