<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;
use App\User;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('admin.Posts.index',compact('posts'));
    }
    /**
     * Activate specific post.
     *
     * @return \Illuminate\Http\Response
     */
    public function activate ($id)
    {
        Post::where('id',intval($id))->update(['isActive'=>1]);
        //DB::update('update users set isActive = 1 where id = ?', [intval($id)]);
        return redirect('/admin/posts/');


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Allusers = User::all();
        $Allcategories = Category::all();
        $users = [];
        $categories = [];

        foreach ($Allcategories as $category){

            $categories[$category->id]= $category->name;
         }

        foreach ($Allusers as $user){

                $users[$user->id]= $user->name;
         }
        // return $categories;
        return view('admin.Posts.create',[
            'users'=>$users,
            'categories'=>$categories,

            ]);    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $users,null,['class'=>'form-control']
        Post::create($request->all());
        return redirect('/admin/posts/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing specified  Post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::findOrfail($id);
        $Allusers = User::all();
        $Allcategories = Category::all();
        $users = [];
        $categories = [];

        foreach ($Allcategories as $category){

            $categories[$category->id]= $category->name;
         }

        foreach ($Allusers as $user){

                $users[$user->id]= $user->name;
         }
        // return $categories;
        return view('admin.Posts.edit',[
            'users'=>$users,
            'categories'=>$categories,
            'post'=>$post

            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        Post::findOrfail($id)->update($request->all());
        return redirect('/admin/posts/');
        
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
        Post::findOrFail($id)->delete();
        return redirect('admin/posts/');
    }
}
