<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
     protected $fillable = ['title','author'];


    public  function path(){
	return '/books/' . $this->id;
	}
}


