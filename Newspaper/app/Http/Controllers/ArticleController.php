<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(5);
        $articles->withPath('/articles');
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tieude' => 'required',
            'ten_bhat' => 'required|',
            'ma_tloai' => 'required',
            'tomtat' => 'required',
            'noidung' => 'required',
            'ma_tgia' => 'required',
            'ngayviet' => 'required',
            'hinhanh' => 'required',
        ]);

        $articles = new Article();
        $articles->tieude = $request->tieude;
        $articles->ten_bhat = $request->ten_bhat;
        $articles->ma_tloai = $request->ma_tloai;
        $articles->tomtat = $request->tomtat;
        $articles->noidung = $request->noidung;
        $articles->ma_tgia = $request->ma_tgia;
        $articles->ngayviet = $request->ngayviet;
        $articles->hinhanh = $request->hinhanh;
        $articles->save();

        return redirect()->route('articles.index')->with('success', 'article Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return redirect()->route('articles.index')->with('success', 'Article Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article Data deleted successfully');
    }
}
