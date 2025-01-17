@extends('layouts.admin')

@section('content')



    <div>
        <div>
            <a href="{{route('posts.create')}}" class="btn btn-success mb-3">Add one</a>
        </div>


        @foreach($posts as $post)
            <div><a href="{{route('posts.show', $post->id)}}">{{$post->id}}.  {{$post->title}}</a></div>


        @endforeach

        <div class="mt-3">
            {{$posts->links()}}
        </div>

    </div>



@endsection
