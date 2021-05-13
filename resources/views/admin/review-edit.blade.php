@extends('layouts.admin')

@section('content')
	@if(!empty($review))
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="mt-3 mb-3">{{ $title }}</h2>
					<form action="{{ route('review-edit', $review->id) }}" method="post">
						@csrf
						<input type="text" class="form-control" name="name" placeholder="Имя" value="{{ $review->name }}" required=""><br>
						<textarea name="text" class="form-control" placeholder="Текст" cols="30" rows="10" required="">{{ $review->text }}</textarea><br>
						<button type="submit" class="btn btn-success">Сохранить</button>
					</form>
				</div>
			</div>
		</div>
	@endif
@endsection