<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

      //  dd(11111111111);
        $data = $request->validated();

       // dd($data);


        $post = $this->service->store($data);

        return new PostResource($post);
/*
        $arr = [
            'title' => $post->title,
            'content' => $post->content,
            'image' => $post->image,
        ];

        return $arr;            */

       // dd($post);

     //   return redirect()->route('posts.index');
    }
}
