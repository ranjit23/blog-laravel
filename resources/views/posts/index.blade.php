@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />
</head>
<body>
	<div class="container">
		<div class="box" style="margin-top: 30px;">
			<p class="title">ALL PROJECTS</p>
	@foreach ($posts as $post)
			<div class="box" style="margin-top: 30px;">

		<li class="subtitle"><a href="/posts/{{$post->id}}">{{$post->title}} </a></li>
			</div>

	@endforeach
	</div>
</div>
</body>
</html>
@endsection
