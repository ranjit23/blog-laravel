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
	<h1 class="title">EDIT</h1>
	<form method="post" action="/posts/{{$post->id}}">
		{{csrf_field()}}
		{{method_field('PATCH')}}
		<div class="control">
    		<input class="input" type="text" placeholder="Normal input" name="title" value="{{$post->title}}">
    	</div>
    	<textarea class="textarea" placeholder="e.g. Hello world" name="description" >{{$post->description}}</textarea>
    	<div class="control">	    
    		<button class="button is-link" type="Submit">Submit</button>
    		</div>

  		
	</form>
	<form method="POST" action="/posts/{{$post->id}}">
		{{csrf_field()}}
				{{method_field('DELETE')}}

		<div class="control">	    
    		<button class="button is-link" type="Submit" style="margin-top: 40px;">DELETE</button>
   		</div>

	</form>
		</div>

</body>
</html>
@endsection