@extends('layouts.layout')


@section('content')

<form action="/notes/update" method="POST">
@csrf
	<div class="row flex-column">
		<h3>Enter Notes</h3>
		@foreach($note as $data)
		<div class="mb-3">
			<label for="title" class="form-label">Title</label>
			<input type="text" class="form-control" id="title" name="title" value='{{ $data->title }}'>
			<input type="hidden" class="form-control" id="id" name="id" value='{{ $data->id }}'>
		</div>
		<div class="mb-3">
			<label for="notes" class="form-label">Notes</label>
			<textarea class="form-control" id="notes" name="note" rows="3">{{ $data->note }}</textarea>
		</div>					
	</div>
	@endforeach
	<div class="row justify-content-between">
		<button type="submit" name="action" class="btn btn-primary" value="update">Update</button>
		<button type="submit" name="action" class="btn btn-danger" value="delete">Delete</button>
	</div>
</form>

@endsection