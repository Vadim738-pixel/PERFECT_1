<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;

class IndexController extends BaseController
{

    public function __invoke(FilterRequest $request)
    {


        $data = $request->validated();


        $page = $data['page'] ?? 1;
        $perPage = $data['perPage'] ?? 10;


        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts =Post::filter($filter)->paginate($perPage, ['*'], 'page', $page);

        //   dd($posts);

        /*
          $posts = Post::where('is_published', 1)
          ->where('category_id', $data['category_id'])
          ->get();
                       */
        /*
        if(isset($data['category_id'])) {
            $query->where('category_id', $data['category_id']);
        }

        if(isset($data['title'])) {
            $query->where('title', 'like', '%' . $data['title'] . '%');
        }

        if(isset($data['content'])) {
            $query->where('content', 'like', '%' . $data['content'] . '%');
        }
                    */
        //  $posts = $query->get();

        //  dd($posts);

        return PostResource::collection($posts);

        // $posts = Post::paginate(12);
       //  return view('posts.index', compact('posts'));


    }


}
