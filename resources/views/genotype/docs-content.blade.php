<section class="docs-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center mb-4">Документы</h1>
				@foreach($docs as $item)
					<img src="{{ asset('storage/'.$item->img) }}" class="img-fluid">
				@endforeach
			</div>
		</div>
	</div>
</section>