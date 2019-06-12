<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Session\Store;
use Faker\Generator as Faker;

class PostController extends Controller
{
    public function getIndex()
    {
        $posts = Post::all();
        return view('blog.index', ['posts' => $posts]);
    }

    public function getAdminIndex()
    {
        $posts = Post::all();
        return view('admin.index', ['posts' => $posts]);
    }

    public function getPost($id)
    {
        $post = Post::find($id);
        return view('blog.post', ['post' => $post]);
    }

    public function getAdminCreate()
    {
        return view('admin.create');
    }

    public function getAdminEdit($id)
    {
        $post = Post::find($id);

        return view('admin.edit', ['post' => $post, 'postId' => $id]);
    }

    public function postAdminCreate(Request $request, Faker $faker)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10',
            'category' => 'required|min:5',
            'image' => 'required|min:2'
        ]);
        $post = new Post([
            'category_id' => '2',
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category' => $request->input('category'),
            'image' => $request->input('image')

        ]);
        $post->save();

        return redirect()->route('admin.index')->with('info', 'Post created, Title is: ' . $request->input('title'));
    }

    public function postAdminUpdate(Store $session, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10',
        ]);
        $post = Post::find($request->input('id'));

        $post->title=$request->input('title');
        $post->content=$request->input('content');
        $post->save();

        return redirect()->route('admin.index')->with('info', 'Post edited, new Title is: ' . $request->input('title') . 'And new content is: ' . $request->input('content'));
    }
}
