<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Tags\Tag;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());
        $tags = explode(',', $request->tags);
        $post->attachTags($tags);

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $tags = $post->tags->pluck('name');
        foreach ($tags as $key => $arg) {
            $results[] = $arg;
        }
        $tags = implode(',', $results);

        return view('posts.edit', compact('post', 'tags'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        $tags = explode(',', $request->tags);
        $post->syncTags($tags);

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts');
    }

    public function postsByTags($slug)
    {
        $tag = Tag::findFromSlug($slug);
        $posts = Post::withAnyTags([$tag])->get();

        return view('posts.posts-by-tags', compact('posts', 'tag'));
    }
}
