@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />

</head>
<body>
	<div class="container" style="margin-top: 50px;">
		<div class="box">
		<p class="title">{{$post->title}} </p>
				<div class="box">
					<p class="title">DESCRIPTION:</p>
					
		<h1 class="subtitle">{{$post->description}} </h1>
	</div>
	</div>
</div>
<hr>
<div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                            <br>
                          
                        </strong>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

        <hr>

        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>

                </form>

               
            </div>
        </div>
    </div>
</body>
</html>
@endsection