<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Author;

class AuthorManagementTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function testan_author_can_be_created(){
        $this->withoutExceptionHandling();
        $this->post('/author', [
            'name' => 'Author Name',
            'dob'  => '05/06/1996',
        ]);
        $this->assertCount(1, Author::all());
    }
}
