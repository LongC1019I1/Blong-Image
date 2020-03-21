<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return view('admin.post.show');
    }

    public function create()
    {
        //show và post video ngược lại nhau
        return view('admin.post.post');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug =$request->slug;
        $post->body = $request->body;
        $post->save();

        return redirect(route('post.index'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
