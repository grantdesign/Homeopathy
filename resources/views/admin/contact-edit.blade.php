@extends('layouts.admin')

@section('content')
	@if(!empty($contact))
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="mt-3 mb-3">{{ $title }}</h2>
					<form action="{{ route('contact-edit', $contact->id) }}" method="post">
						@csrf
						<input type="text" class="form-control" name="name" value="{{ $contact->name }}" placeholder="Имя" required=""><br>
						<input type="text" class="form-control" name="email" value="{{ $contact->email }}" placeholder="Email" required=""><br>
						<textarea name="text" class="form-control" cols="30" rows="10" placeholder="Сообщение" required="">{{ $contact->text }}</textarea><br>
						<button type="submit" class="btn btn-primary">Сохранить</button>
					</form>
				</div>
			</div>
		</div>
	@endif
@endsection