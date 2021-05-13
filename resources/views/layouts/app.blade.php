<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
	<title>{{ $title }}</title>
</head>
<body>
	<section class="header-nav">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h1 class="text-center"><a class="logo-link" href="/">Сорокин Александр Сергеевич</a></h1>
				</div>
				<div class="col-lg-5">
					<nav class="navbar navbar-expand-lg navbar-light">
						<div class="container-fluid">
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<i class="fa fa-bars nav-icon" aria-hidden="true"></i>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav me-auto mb-2 mb-lg-0">
									@foreach($menus as $menu)
										<li class="nav-item">
											<a class="nav-link" href="{{ $menu->url }}">{{ $menu->name }}</a>
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>

	@yield('content')

	<section class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4>Прием</h4>
					<p>Врачебный прием ведется в клинике «Лечебное дело», Тула, пр. Ленина, 125 и в кабинете врача-гомеопата по адресу Тула, ул. Орловское шоссе, д.137.</p>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-4">
					<h4>Контакты</h4>
					<p>8 (960) 617-69-43<br>atzab53@mail.ru</p>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</section>

	<footer class="text-center">
		<span>© <?=date('Y')?> Сорокин А.С.</span>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>