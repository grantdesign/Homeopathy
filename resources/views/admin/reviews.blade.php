@extends('layouts.admin')

@section('content')
	@if(!empty($reviews))
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="mt-3 mb-3">{{ $title }}</h2>
					<a href="{{ route('review-add') }}"><button class="btn btn-success mb-3"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">№</th>
								<th scope="col">Имя</th>
								<th scope="col">Текст</th>
								<th class="text-center" colspan="2" scope="col">Действие</th>
							</tr>
							<tbody>
								@foreach($reviews as $review)
									<tr>
										<th scope="row">{{ $loop->iteration }}</th>
										<td>{{ $review->name }}</td>
										<td>{{ $review->text }}</td>
										<td>
											<a href="{{ route('review-edit', $review->id) }}"><button type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
										</td>
										<td>
											<form action="{{ route('review-edit', $review->id) }}" method="post">
												@csrf
												@method('DELETE')
												<input type="hidden" name="id" value="{{ $review->id }}">
												<button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</thead>
					</table>
					{{ $reviews->links() }}
				</div>
			</div>
		</div>
	@endif
@endsection