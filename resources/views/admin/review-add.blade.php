@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="mt-3 mb-3">{{ $title }}</h2>
				<form action="{{ route('review-add') }}" method="post">
					@csrf
					<input type="text" class="form-control" name="name" placeholder="Имя" value="Гость" required=""><br>
					<textarea name="text" class="form-control" placeholder="Текст" cols="30" rows="10" required=""></textarea><br>
					<button type="submit" class="btn btn-success">Добавить</button>
				</form>
			</div>
		</div>
	</div>
@endsection