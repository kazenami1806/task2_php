<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $bookModel = new Book();
        $book = $bookModel->all()->toArray();
       
        return view('book', ['book' => $book]);
    }

    public function form(){
        return view('formBook');
    }

    public function store(Request $request){
        $req = $request->validate([
            'nama_buku' => 'required|min:5',
            'deskripsi' => 'nullable',
            'harga' => 'numeric|required',
        ]);
        
        $book = Book::create([
            'nama_buku' => $req['nama_buku'],
            'deskripsi' => $req['deskripsi'],
            'harga' => $req['harga'],
        ]);

        $book->save();

        return redirect('book');
    }
}
