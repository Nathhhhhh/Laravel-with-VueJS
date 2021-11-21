<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentsController extends Controller
{
    function store(){

        request()->validate([
            'content'=>['required'],
        ]);

        Comment::create([
            'name'=>'Nathan',
            'url'=>'url',
            'body'=>request('content'),
        ]);



       return "Votre commentaire à bien été posté.";


    }

    function index() {

       $comments = Comment::all();

        return view('welcome',[
            'comments'=>$comments,
        ]);
    }
}
