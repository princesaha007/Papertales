<?php
namespace App\Http\Controllers;

use App\Models\BookName;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = BookName::all();

        return view('dashboard', compact('books'));
    }
}