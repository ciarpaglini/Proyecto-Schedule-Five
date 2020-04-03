<section class="page-section" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<?php if (!isset($_SESSION['identity'])) : ?>
					<div class="text-center mx-auto">

						<h2 class="section-heading text-uppercase">Ingresa en tu cuenta</h2>
						<h3 class="section-subheading text-muted">Si aun no estas registrado pulsa <a href="<?= base_url ?>user/register">aquí</a></h3>

						<form action="<?= base_url ?>user/login" method="post">
							<div class="form-group">
								<div class="col-12">
									<input class="form-control" name="email" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Introduzca su email."><br />
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="form-group">
								<div class="col-12">
									<input class="form-control" name="password" id="password" type="password" placeholder="Contraseña" required="required" data-validation-required-message="Introduzca su contraseña.">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="col-12 text-center">
								<div id="success"></div>
								<input class="btn btn-primary btn-xl text-uppercase" type="submit" value="Enviar" />
							</div>
						</form>

					</div>

				<?php else : ?>
					<h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>