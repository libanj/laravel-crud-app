@extends('layouts.layout')

@section('content')

<form action="/notes" method="POST">
@csrf
	<div class="row flex-column">
		<h3>Enter Notes</h3>
		<div class="mb-3">
			<label for="title" class="form-label">Title</label>
			<input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
		</div>
		<div class="mb-3">
			<label for="notes" class="form-label">Notes</label>
			<textarea class="form-control" id="notes" name="note" rows="3" required></textarea>
		</div>					
	</div>

	<div class="row justify-content-between">
		<button type="submit" class="btn btn-primary">Enter</button>
		<form>
 			<input type="button" class="btn btn-primary" value="Back" onclick="history.back()">
		</form>
	</div>
</form>

@endsection