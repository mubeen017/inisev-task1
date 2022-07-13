<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\Post as PostResources;
use App\Models\Post;

class PostController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $posts = Post::query()
            ->with('website')
            ->latest()
            ->paginate(10);

        return PostResources::collection($posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StorePostRequest $request
     */
    public function store(StorePostRequest $request)
    {
        return new PostResources(Post::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePostRequest $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
