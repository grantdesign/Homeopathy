@extends('layouts.admin')

@section('content')
	@if(!empty($services))
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="mt-3 mb-3">{{ $title }}</h2>
					<a href="{{ route('service-add') }}"><button class="btn btn-success mb-3"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">№</th>
								<th scope="col">Название</th>
								<th scope="col">Иконка</th>
								<th scope="col">Описание</th>
								<th class="text-center" colspan="2" scope="col">Действие</th>
							</tr>
							<tbody>
								@foreach($services as $service)
									<tr>
										<th scope="row">{{ $loop->iteration }}</th>
										<td>{{ $service->name }}</td>
										<td>{{ $service->icon }}</td>
										<td>{{ $service->text }}</td>
										<td>
											<a href="{{ route('service-edit', $service->id) }}"><button type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
										</td>
										<td>
											<form action="{{ route('service-edit', $service->id) }}" method="post">
												@csrf
												@method('DELETE')
												<input type="hidden" name="id" value="{{ $service->id }}">
												<button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</thead>
					</table>
					{{ $services->links() }}
				</div>
			</div>
		</div>
	@endif
@endsection