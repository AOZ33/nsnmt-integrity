@extends('template')
@section('content')
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(<?= url('resources/img'); ?>/header.jpg"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Masuk Untuk Melanjutkan</h3>
								</div>
							</div>
							<form class="user" method="post" action="<?= url('auth'); ?>">

						</div>
						</form>
						<div class="text-center">
							<a class="btn btn-danger btn-lg" href="{{ url('login/google') }}" role="button">Login Lewat Google</a>
							<br>

						</div>
						</br><br>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
@endsection
