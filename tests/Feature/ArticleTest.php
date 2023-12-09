<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
  
     public function test_check_if_there_is_no_article(){
        $user=User::factory()->create();
        $response = $this->actingAs($user)->get('/');
        $response->assertSee('No Article For The Momment');
     }

     public function test_check_if_article_exist(){
        $user=User::factory()->create([
            'description'=>'a great artist who wrote this article'
        ]);
        $article=Article::create([
            'title'=>'titlee sub_title sub_title',
            'sub_title'=>'tisub_title sub_title sub_titletlee',
            'content'=>'<p>titlee sub_title sub_title</p>',
            'user_id'=>$user->id,
            'image'=>'empty'
        ]);
        $response = $this->actingAs($user)->get('/');
        $response->assertSee($article->title);

     }
     public function test_blog_page_redirection_to_login_page_status(){
      $response= $this->get('/');
      $response->assertStatus(302);
      $response->assertRedirect('/login');
     }

     public function test_blog_page_for_authenticated_users_status(){
         $user=User::factory()->create();
         $response = $this->actingAs($user)->get('/');
         $response->assertStatus(200);
     }

     public function test_article_page_for_authenticated_users_status(){
      $user=User::factory()->create();
      $article=Article::create([
                  'title'=>'titlee sub_title sub_title',
                  'sub_title'=>'tisub_title sub_title sub_titletlee',
                  'content'=>'<p>titlee sub_title sub_title</p>',
                  'user_id'=>$user->id,
                  'image'=>'empty'
              ]);
      $response = $this->actingAs($user)->get("/$article->id/article");
      $response->assertStatus(200);
  }
}
