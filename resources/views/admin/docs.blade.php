@extends('layouts.admin')

@section('content')
	@if(!empty($docs))
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2 class="mt-3 mb-3">{{ $title }}</h2>
					<a href="{{ route('doc-add') }}"><button class="btn btn-success mb-3"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">№</th>
								<th scope="col">Изображение</th>
								<th scope="col">Действие</th>
							</tr>
							<tbody>
								@foreach($docs as $doc)
									<tr>
										<th scope="row">{{ $loop->iteration }}</th>
										<td>
											<img src="{{ asset('storage/'.$doc->img) }}" class="img-thumbnail" width="100">
										</td>
										<td>
											<form action="{{ route('doc-edit', $doc->id) }}" method="post">
												@csrf
												@method('DELETE')
												<input type="hidden" name="id" value="{{ $doc->id }}">
												<button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</thead>
					</table>
					{{ $docs->links() }}
				</div>
			</div>
		</div>
	@endif
@endsection