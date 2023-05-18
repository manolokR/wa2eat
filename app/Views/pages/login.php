</body>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
		integrity="sha512-Wq3znUOIZtqZkpWpkTVRtRwQ2YyPCvT03zWlj+iS9dH1eNTjiOVlG2xgC4np4FXwL+Hgx1pjcTXy09pgH5u5HA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="<?= base_url("css/login.css") ?>">
<<<<<<< HEAD
=======
	<style>
		body {
			background-image: url("imagenes/fondoLogin.jpg");
			background-size: 100% auto;
		}
	</style>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"
		integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
>>>>>>> developJC

</head>

<body>

<<<<<<< HEAD

	<div class="col-md-8">
		<div class="container" id="container">
			<div class="form-container sign-up-container">
				<form action="#" style="flex-direction: column; padding: 0 30px;">
					<h1>Crear cuenta</h1>
					<div class="social-container">
						<a href="https://accounts.google.com/" class="social"><img
								src="<?= base_url("iconos/google.ico") ?>" width="53" height="53"></a>
						<a href="https://www.facebook.com/" class="social"><img
								src="<?= base_url("iconos/facebook.ico") ?>" width="52" height="52"></a>
						<a href="https://appleid.apple.com/" class="social"><img
								src="<?= base_url("iconos/apple.ico") ?>" width="52" height="52"></a>
					</div>
					<span>o usa tu correo</span>
					<input style="background-color: #eee;" type="text" placeholder="Nombre" />
					<input style="background-color: #eee;" type="email" placeholder="Email" />
					<input style="background-color: #eee;" type="password" placeholder="Contraseña" />
					<button id="signup-button" >Registrarse</button>
				</form>
			</div>
			<div class="form-container sign-in-container">
				<form action="#" style="flex-direction: column; padding: 0 30px;" >
					<h1>Iniciar Sesión</h1>
					<div class="social-container">
						<a href="https://accounts.google.com/" class="social"><img
								src="<?= base_url("iconos/google.ico") ?>" width="53" height="53"></a>
						<a href="https://www.facebook.com/" class="social"><img
								src="<?= base_url("iconos/facebook.ico") ?>" width="52" height="52"></a>
						<a href="https://appleid.apple.com/" class="social"><img
								src="<?= base_url("iconos/apple.ico") ?>" width="52" height="52"></a>
					</div>
					<span>o usa tu correo</span>
					<input style="background-color: #eee;" type="email" placeholder="Email" />
					<input style="background-color: #eee;"type="password" placeholder="Contraseña" />
					<a href="#">¿Olvidaste tu contraseña?</a>
					<button id="signin-button">Iniciar Sesión</button>
=======
	<a href="/home">
		<img src="iconos/logoCompleto.png" alt="Página Principal" width="300" height="70"
			style="margin-bottom: 20px; margin-top: 0px;">
	</a>
	<div class="col-md-8">
		<div class="container login-container" id="container">

			<div class="form-container sign-up-container">

				<!-- FORMULARIO REGISTER -->
				<form action=<?= base_url('/register'); ?> method="post"
					style="flex-direction: column; padding: 0 30px;">
					<h1 class="mobile-text">Crear cuenta</h1>
					<div class="social-container">
						<a href="https://accounts.google.com/" class="social mobile-icon"><img
								src="<?= base_url("iconos/google.ico") ?>" width="53" height="53"></a>
						<a href="https://www.facebook.com/" class="social mobile-icon"><img
								src="<?= base_url("iconos/facebook.ico") ?>" width="52" height="52"></a>
						<a href="https://appleid.apple.com/" class="social mobile-icon"><img
								src="<?= base_url("iconos/apple.ico") ?>" width="52" height="52"></a>
					</div>
					<span>o usa tu correo</span>
					<input style="background-color: #eee;" id="username-register-form" class="form-control"
						name="username" type="text" placeholder="Nombre" />
					<input style="background-color: #eee;" id="email-register-form" class="form-control" name="email"
						type="email" placeholder="Email" />
					<input style="background-color: #eee;" id="password-register-form" class="form-control"
						name="password" type="password" id="password" placeholder="Contraseña" />

					<span class="error">
						<?= \Config\Services::validation()->listErrors(); ?>
					</span>

					<span class="error">
						<?php if (session()->getFlashdata('register_error')): ?>
							<div class="alert alert-danger">
								<?= session()->getFlashdata('msg') ?>
							</div>
						<?php endif; ?>
					</span>

					<span class="register-error">Error</span>

					<a href="#" class="switch-form" id="signin-link">Iniciar Sesión</a>

					<button id="signup-button" type="submit">Registrarse</button>
				</form>
			</div>
			<div class="form-container sign-in-container open">

				<!-- FORMULARIO LOGIN -->
				<form action=<?= base_url('/login'); ?> method="post" style="flex-direction: column; padding: 0 30px;">
					<h1 class="mobile-text">Iniciar Sesión</h1>
					<div class="social-container">
						<a href="https://accounts.google.com/" class="social mobile-icon"><img
								src="<?= base_url("iconos/google.ico") ?>" width="53" height="53"></a>
						<a href="https://www.facebook.com/" class="social mobile-icon"><img
								src="<?= base_url("iconos/facebook.ico") ?>" width="52" height="52"></a>
						<a href="https://appleid.apple.com/" class="social mobile-icon"><img
								src="<?= base_url("iconos/apple.ico") ?>" width="52" height="52"></a>
					</div>
					<span>o usa tu correo</span>
					<input style="background-color: #eee;" id="email-form" class="form-control" name="email"
						type="email" placeholder="Email" />
					<input style="background-color: #eee;" id="password-form" class="form-control" name="password"
						type="password" placeholder="Contraseña" />


					<span class="login-error">Credenciales incorrectas</span>

					<a href="#" class="switch-form" id="signup-link">Crear cuenta</a>

					<button id="signin-button" type="submit">Iniciar Sesión</button>

					
>>>>>>> developJC
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
<<<<<<< HEAD
						<h1>¡Bienvenido a Wa2Eat!</h1>
=======
						<h1 class="mobile-text">¡Bienvenido a Wa2Eat!</h1>
>>>>>>> developJC
						<h8>Únete a la mayor comunidad de recetas en línea</h8>
						<button class="ghost" id="signIn" style="margin-top: 10px;">Iniciar Sesión</button>
					</div>
					<div class="overlay-panel overlay-right">
<<<<<<< HEAD
						<h1>¡Bienvenido de nuevo!</h1>
=======
						<h1 class="mobile-text">¡Bienvenido de nuevo!</h1>
>>>>>>> developJC
						<h8>Introduce tus credenciales y comienza a navegar</h8>
						<button class="ghost" id="signUp" style="margin-top: 10px;">Registrarse</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<script src="<?= base_url("js/login.js") ?>"></script>