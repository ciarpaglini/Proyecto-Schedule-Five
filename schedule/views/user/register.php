<section class="page-section" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<div class="text-center mx-auto">

					<h2 class="section-heading text-uppercase">Regístrate</h2>
					<h3 class="section-subheading text-muted">Si ya estas registrado pulsa <a href="<?= base_url ?>user/login">aquí</a></h3>




					<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>
						<strong class="alert_green">Registro completado correctamente</strong>
					<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed') : ?>
						<strong class="alert_red">Registro fallido, introduce bien los datos</strong>
					<?php endif; ?>
					<?php Utils::deleteSession('register'); ?>

					<form action="<?= base_url ?>user/save" method="POST">

						<div class="form-group">
							<div class="col-12">
								<input class="form-control" name="name" id="nombre" type="text" placeholder="Nombre" required="required" data-validation-required-message="Introduzca su nombre."><br />
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="form-group">
							<div class="col-12">
								<input class="form-control" name="surname" id="surname" type="text" placeholder="Apellido" required="required" data-validation-required-message="Introduzca su apellido."><br />
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="form-group">
							<div class="col-12">
								<input class="form-control" name="email" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Introduzca su email."><br />
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="form-group">
							<div class="col-12">
								<input class="form-control" name="password" id="password" type="password" placeholder="Contraseña" required="required" data-validation-required-message="Introduzca su contraseña."><br />
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="col-12 text-center">
								<div id="success"></div>
								<input class="btn btn-primary btn-xl text-uppercase" type="submit" value="Registrarse" />
							</div>

					</form>
			

				</div>
			</div>
		</div>
	</div>
</section>