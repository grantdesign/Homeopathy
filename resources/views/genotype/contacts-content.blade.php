<section class="contacts-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center mb-4">Контакты</h1>
				<div class="row">
					<div class="col-md-6">
						<p class="mb-4">Врачебный прием ведется в клинике «Лечебное дело», Тула, пр. Ленина, 125 и в кабинете врача-гомеопата, Тула, ул. Орловское шоссе, д. 137.</p>

						@if(session('status'))
							<div class="alert alert-info">
								{{ session('status') }}
							</div>
						@else
							<form action="{{ route('contacts') }}" method="post">
								@csrf
								<input type="text" name="name" class="form-control" placeholder="Имя" required=""><br>
								<input type="email" name="email" class="form-control" placeholder="Email" required=""><br>
								<textarea class="form-control" name="text" cols="30" rows="10" placeholder="Сообщение" required=""></textarea><br>
								<button type="submit" class="btn btn-submit">Отправить</button>
							</form>
						@endif
					</div>

					<div class="col-md-6">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aceb11841bb0cf6c269725bab56acc770140490a0628c34e404758649f004f85d&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>