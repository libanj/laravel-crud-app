@extends('layouts.layout')


@section('content')

<div class="row">
	<h3 class="text-align">Display Notes</h3>
</div>
<div class="row">
	<div class="list-group w-100 my-3">
		@foreach($notes as $data)
		<a href="http://localhost/notes/display/{{ $data->id }}" class="list-group-item list-group-item-action flex-column align-items-start">
			<div class="d-flex w-100 justify-content-between">
				<h5 class="mb-1">{{ $data->title }}</h5>
			</div>
			<p class="mb-1">{{ $data->note }}</p>
		</a>
		@endforeach
	</div>
	<a href="http://localhost/notes/create">
		<input type="button" value="Create Note" class="btn btn-primary" onclick="location.href(`http://localhost/notes/display`);">
	</a>
</div>

@endsection