@extends('layouts.admin')

@section('content')
	@if(!empty($contacts))
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="mt-3">{{ $title }}</h2>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">№</th>
								<th scope="col">Имя</th>
								<th scope="col">Email</th>
								<th scope="col">Сообщение</th>
								<th class="text-center" colspan="2" scope="col">Действие</th>
							</tr>
							<tbody>
								@foreach($contacts as $contact)
									<tr>
										<th scope="row">{{ $loop->iteration }}</th>
										<td>{{ $contact->name }}</td>
										<td>{{ $contact->email }}</td>
										<td>{{ $contact->text }}</td>
										<td>
											<a href="{{ route('contact-edit', $contact->id) }}"><button type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
										</td>
										<td>
											<form action="{{ route('contact-edit', $contact->id) }}" method="post">
												@csrf
												@method('DELETE')
												<input type="hidden" name="id" value="{{ $contact->id }}">
												<button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</thead>
					</table>
					{{ $contacts->links() }}
				</div>
			</div>
		</div>
	@endif
@endsection