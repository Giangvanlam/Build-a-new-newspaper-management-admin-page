<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::orderBy('created_at', 'desc')->paginate(5);
        $authors->withPath('/authors');
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ma_tgia' => 'required',
            'ten_tgia' => 'required|',
            'hinh_tgia' => 'required',
        ]);

        $authors = new Author();
        $authors->ma_tgia = $request->ma_tgia;
        $authors->ten_tgia = $request->ten_tgia;
        $authors->hinh_tgia = $request->hinh_tgia;
        $authors->save();

        return redirect()->route('authors.index')->with('success', 'author Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $author->update($request->all());
        return redirect()->route('authors.index')->with('success', 'Author Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')->with('success', 'Author Data deleted successfully');
    }

    public function search(Request $request)
    {
        $ma_tgia = $request->ma_tgia;
        $ten_tgia = $request->ten_tgia;
        $hinh_tgia = $request->hinh_tgia;

        $authors = DB::table('authors')
        ->where('ma_tgia', $ma_tgia)
        ->where('ten_tgia', $ten_tgia)
        ->Where('hinh_tgia', $hinh_tgia)->paginate(5);
        

        return view('authors.index', compact('authors'));
        
    }
}
