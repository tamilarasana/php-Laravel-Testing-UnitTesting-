<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Book;

class BookManagementTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    /**test*/
    // public function testBasicTest()
    // {
    //     $response = $this->get('/sam');

    //     $response->assertStatus(200);
    // }
    // public function testnew_Test()
    // {
    //     $response = $this->get('/about');

    //     $response->assertStatus(200);
    // }
    // public function testabout_route_return(){

    //     $response = $this->get('/abc');
    //     // dd($response);
    //     $response->assertStatus(200);
    // }

    public function testa_book_can_add_to_the_library(){
        $this->withoutExceptionHandling();
        $response =$this->post('/books', [
            'title' => 'cool Book Title',
            'author' => 'Victor',

        ]);

          $book = Book::first();

        // $response->assertOk();
        $this->assertCount(1, Book::all());
        $response->assertRedirect($book->path());

    }
    /**test*/
    public function testa_title_is_required(){
         // $this->withoutExceptionHandling();
          $response =$this->post('/books', [
            'title' => '',
            'author' => 'Victor',

        ]);
          $response->assertSessionHasErrors('title');

    }
    public function testa_author_is_required(){
         // $this->withoutExceptionHandling();
          $response =$this->post('/books', [
            'title' => 'cool Book Title',
            'author' => '',

        ]);
         $response->assertSessionHasErrors('author');

    }
    public function testa_book_can_be_updated(){
       $this->withoutExceptionHandling();
        $this->post('/books', [
            'title' => 'cool Title',
            'author' => 'Victor',

        ]);

        $book = Book::first();

        $response = $this->patch($book->path(),[
            'title' => 'New Title',
            'author' => 'New Author',
        ]);
        // dd($response); 

        $this->assertEquals('New Title', Book::first()->title);
        $this->assertEquals('New Author', Book::first()->author);
        $response->assertRedirect($book->path());
    }

    public function testa_book_can_deleted(){

        $this->withoutExceptionHandling();
        $this->post('/books', [
            'title' => 'cool Title',
            'author' => 'Victor',

        ]);

        $book = Book::first();
         $this->assertCount(1, Book::all());

        $response = $this->delete($book->path());
        $this->assertCount(0, Book::all());
        $response->assertRedirect('/books');
    }
   
     
}
