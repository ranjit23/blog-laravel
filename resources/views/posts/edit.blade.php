

<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />
</head>
<body>
@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:20%;">
                <div class="card-header">{{ __('Edit Post') }}</div>

                <div class="card-body">
                <form method="POST" action="/posts/{{$post->id}}">
                        @csrf
						{{method_field('PATCH')}}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="title" value="{{$post->title}}" required autocomplete="name" autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                               
							<textarea class="textarea" placeholder="e.g. Hello world" name="description" >{{$post->description}}</textarea>
                                
                            </div>
							</div>


						<div class="form-group row">
                            
							<button class="button is-link col-md-4 col-form-label  " type="Submit">Submit</button>

                            <div class="col-md-6">
                               
							
                                
                            </div>
							</div>






							
                       





	
  		
	</form>
	<form method="POST" action="/posts/{{$post->id}}">
		{{csrf_field()}}
				{{method_field('DELETE')}}
				<div class="col-md-6">
		<div class="control">	    
    		<button class="button is-link " type="Submit" >DELETE</button>
   		</div>
</div>
	</form>
		</div>
		</div>

</body>
</html>
@endsection