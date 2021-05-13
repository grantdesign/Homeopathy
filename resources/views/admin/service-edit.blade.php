@extends('layouts.admin')

@section('content')
	@if(!empty($service))
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="mt-3 mb-3">{{ $title }}</h2>
					<form action="{{ route('service-edit', $service->id) }}" method="post">
						@csrf
						<input type="text" class="form-control" name="name" value="{{ $service->name }}" placeholder="Название" required=""><br>
						<input type="text" class="form-control" name="icon" value="{{ $service->icon }}" placeholder="Иконка" required=""><br>
						<textarea name="text" class="form-control" placeholder="Описание" cols="30" rows="10" required="">{{ $service->text }}</textarea><br>
						<button type="submit" class="btn btn-primary">Сохранить</button>
					</form>
				</div>
			</div>
		</div>
	@endif
@endsection