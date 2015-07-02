<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //


    public function createComment($article_id, Request $request){
        $article_id = Article::find($article_id);

         $newcomment= new Comment;
        $message=$request->message;

        $newcomment->article_id=$article_id;
        $newcomment->message=$message;
        $newcomment->save();

       // $allcomments =Comment::where('article_id', $article_id)->get();
        // return view('articleviews.show', compact('article', 'allcomments'));
        return redirect('/article/' . $article_id);


    }

    public function showComment($id, $cid){ //by automation we're getting the route's id. 
                                                //the route made is as such ki humei id mil hi jaata hai. wow me so cool.

        
        $thiscomment= Comment::find($cid);
    
        return view('articleviews.comments.show', ['thiscomment'=>$thiscomment]);

    }

    public function editComment($id, $cid){

        $comment= Comment::find($cid);
        return view('articleviews.comments.edit', ['comment'=>$comment]);
    }


    public function updateComment($article_id, $id, Request $request){


        $commentToUpdate=Comment::find($id);

        $message = $request->input('message');

             //$content = $request->input('content');
    $commentToUpdate->message = $message;
        //$newArticcommentToUpdatele->content = $content;
        $commentToUpdate->save();
         Mail::send('articleviews.email.notify', ['commentToUpdate' => $commentToUpdate], function ($m) use ($commentToUpdate) {
            $m->to('nikita.sahai@gmail.com', 'nikita')->subject('Your Reminder!');
        });

        return redirect("/article/{$article_id}/comment/{$id}");
    }

}


