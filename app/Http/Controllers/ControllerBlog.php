<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\Http\Requests\BlogsRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailtoadmin;
class ControllerBlog extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tags=Tag::all();
      $categories=Category::all();
      $posts= Post::orderBy('created_at','desc')-> take(5)->get();
      return view('page.blogIndex',compact('posts','categories','tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('page.blogCreate',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogsRequest $request)
    {

      $date=date("H-i-s-d-m-Y".rand(0,255));

      $action = 'creato';
      $validatedData = $request ->validated();
      $file =$request ->file('img');
      if ($file) {
        $targetPath = "img";
        $targetFile = "post-".$date.".". $file->getClientOriginalExtension();
        $file -> move($targetPath,$targetFile);
        $validatedData['img'] = $targetFile;
      }

      $post = Post::create($validatedData);
      Mail::to('emailadmin@gmail.com')->send(new mailtoadmin($post,$action));

    return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCategory($id)
    {
        $category = Category:: findorFail($id);
        return view('page.showCategory',compact('category'));
    }
    public function showPost($id)
    {
      $post = Post::findorFail($id);
      return view('page.showPost',compact('post'));
    }
    public function showTag($id)
    {
        $tag = Tag::findorFail($id);
        return view('page.showTag',compact('tag'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findorFail($id);
        $categories =Category::all();
        return view('page.blogEdit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogsRequest $request, $id)
    {
        $action ='modificato';
        $validatedData = $request -> validated();
        $post = Post::findorFail($id);
        $file = $request -> file('img');
        if($file){
          $targetPath = "img";
          $targetFile = "post-".$id.".".$file -> getClientOriginalExtension();
          $file -> move($targetPath,$targetFile);
          $validatedData['img'] =$targetFile;
        }
        $post -> update($validatedData);
        Mail::to('emailadmin@gmail.com')->send(new mailtoadmin($post,$action));
        return redirect ('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
