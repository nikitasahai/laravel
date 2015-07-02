<?php

namespace App\Http\Controllers;
use App\Article;
use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class articlecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return "HiSim";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('articleviews.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //return "newhere?";

        $name = $request->input('name');
             $content = $request->input('content');
        // $newArticle = new Article;
        // $newArticle->name = $name;
        // $newArticle->content = $content;
        // $newArticle->save();

        $newArticle = Article::create(['name' => $name, 'content' => $content]);

       // return view('pages.about', compact('first', 'last', 'people'));
    
        return view('articleviews.saved', compact('newArticle'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $article=Article::find($id);
        // get all comments for this article
        // pass allComments varialbe to view
        $allcomments = Comment::where('article_id', $article->id)->get();
        return view('articleviews.show', compact('article', 'allcomments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
            //$articles = Article::all();
            $article=Article::find($id);
        return view('articleviews.edit', ['article' => $article]);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        //
    $newArticle=Article::find($id);
        $name = $request->input('name');

             $content = $request->input('content');
    $newArticle->name = $name;
        $newArticle->content = $content;
        $newArticle->save();
        
        return view('articleviews.update');


    }

    public function createComment(Request $request)
    {
        //$article = Article::find($request->id);
        $newcomment= new Comment;
        $article_id=$request->id;
        $message=$request->message;

        $newcomment->article_id=$article_id;
        $newcomment->message=$message;
        $newcomment->save();

       // $allcomments =Comment::where('article_id', $article_id)->get();
        // return view('articleviews.show', compact('article', 'allcomments'));
        return redirect('/article/' . $article_id);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
