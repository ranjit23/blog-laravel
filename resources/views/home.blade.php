@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
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
@endsection
