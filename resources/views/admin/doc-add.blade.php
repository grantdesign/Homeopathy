@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="mt-3 mb-3">{{ $title }}</h2>
				<form action="{{ route('doc-add') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group mb-4">
						<label for="exampleFormControlFile1">Выберите изображение</label><br>
						<input type="file" name="img" class="form-control-file mt-3" id="exampleFormControlFile1" required="">
					</div>
					<button type="submit" class="btn btn-success">Добавить</button>
				</form>
			</div>
		</div>
	</div>
@endsection