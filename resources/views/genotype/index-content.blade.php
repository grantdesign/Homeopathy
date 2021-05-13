<section class="header-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="border-text">
					<p class="text-center">Врач - Гомеопат Канидат мед. наук, доцент, член президиума Российского гомеопатического общества Сорокин А.С. совместно с психологом кандидатом психологических наук доцентом Забродиной Т.А. лечат хронические болезни взрослых и детей без гормонов, антибиотиков, нейролептиков, цитостатиков.</p>
				</div>
			</div>
			<div class="col-lg-6">
				<h1 class="text-center">ГОМЕОПАТИЯ БЕЗ ПРЕКРАС И УМОЛЧАНИЙ</h1>
			</div>
		</div>
	</div>
</section>

<section class="content-services">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center mb-4">Практика</h1>
				<div class="row row-cols-1 row-cols-xl-4 g-4 text-center">
					@foreach($services as $service)
						<div class="col">
							<div class="card h-100">
								<i class="fa {{ $service->icon }}" aria-hidden="true"></i>
								<div class="card-body">
									<h5 class="card-title">{{ $service->name }}</h5>
									<p class="card-text">{{ $service->text }}</p>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

<section class="content-reviews">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="mb-4 text-center">Отзывы</h1>
				@foreach($reviews as $key => $review)
					<div class="reviews {{ ($key < 2) ? 'mb-4' : '' }}">
						<h4>{{ $review->name }}</h4>
						<span>{{ $review->created_at->format('Y-m-d') }}</span>
						<p class="mt-2">{{ $review->text }}</p>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>