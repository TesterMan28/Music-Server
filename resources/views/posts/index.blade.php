@extends('layouts.app')

@section('content')
	<h3 class="text-center">Posts</h3>

	@if(count($posts) > 0)
		@foreach($posts as $post)
		    <div class="container-fluid text-center mt-2">
		        <img class="img-fluid" src="/storage/cover_images/{{$post->cover_image}}">
		        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
		        <small>Written at {{$post->created_at}} by {{$post->user['name']}}</small>
		    </div>
		@endforeach
		{{$posts->links()}}
	@else
		<p>No posts found</p>
	@endif

@endsection