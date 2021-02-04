<?php
//namespace App\Http\Controllers;
//
//use App\Models\Article;
//use Illuminate\Http\Request;
//use DataTables;
//
//class ArticlesController extends Controller
//{
///**
//* Display a listing of the resource.
//*
//* @return \Illuminate\Http\Response
//*/
//public function index(Request $request)
//{
//
//$books = Article::latest()->get();
//
//if ($request->ajax()) {
//$data = Article::latest()->get();
//return Datatables::of($data)
//->addIndexColumn()
//->addColumn('action', function ($row) {
//
//$btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Uprav</a>';
//
//$btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Zmaž</a>';
//
//return $btn;
//})
//->rawColumns(['action'])
//->make(true);
//}
//
//return view('book', compact('books'));
//}
//
///**
//* Store a newly created resource in storage.
//*
//* @param \Illuminate\Http\Request $request
//* @return \Illuminate\Http\Response
//*/
//public function store(Request $request)
//{
//Article::updateOrCreate(['id' => $request->book_id],
//['title' => $request->title, 'author' => $request->author]);
//
//return response()->json(['success' => 'Article saved successfully.']);
//}
//
///**
//* Show the form for editing the specified resource.
//*
//* @param \App\Book $book
//* @return \Illuminate\Http\Response
//*/
//public function edit($id)
//{
//$book = Article::find($id);
//return response()->json($book);
//}
//
///**
//* Remove the specified resource from storage.
//*
//* @param \App\Book $book
//* @return \Illuminate\Http\Response
//*/
//public function destroy($id)
//{
//Article::find($id)->delete();
//
//return response()->json(['success' => 'Article deleted successfully.']);
//}
//}

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use DataTables;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $articles = Article::latest()->get();

        if ($request->ajax()) {
            $data = Article::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editArticle">Uprav</a>';

                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteArticle">Zmaž</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('article', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::updateOrCreate(['id' => $request->article_id],
            ['title' => $request->title, 'author' => $request->author]);

        return response()->json(['success' => 'Article saved successfully.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return response()->json($article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::find($id)->delete();

        return response()->json(['success' => 'Article deleted successfully.']);
    }
}
