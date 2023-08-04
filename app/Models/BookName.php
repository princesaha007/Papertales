<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookName extends Model

{
    public $table = 'book_name';

    public $fillable = ['Book_Name', 'Author_Name', 'Price', 'file_path'];

  
}