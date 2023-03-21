</body>


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iniciar Sesión</title>

	<link rel="stylesheet" href="<?= base_url("css/login.css") ?>">
</head>

<body>
	<div class="container mt-6" id="bigcont">
		<div class="row align-items-center justify-content-center" style="height: 90vh;">
			<div class="col-md-7">
				<div class="container" id="container">
					<div class="form-container sign-up-container">
						<form action="#">
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
							<input type="text" placeholder="Nombre" />
							<input type="email" placeholder="Email" />
							<input type="password" placeholder="Contraseña" />
							<button id="signup-button">Registrarse</button>
						</form>
					</div>
					<div class="form-container sign-in-container">
						<form action="#">
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
							<input type="email" placeholder="Email" />
							<input type="password" placeholder="Contraseña" />
							<a href="#">¿Olvidaste tu contraseña?</a>
							<button id="signin-button">Iniciar Sesión</button>
						</form>
					</div>
					<div class="overlay-container">
						<div class="overlay">
							<div class="overlay-panel overlay-left">
								<h1>¡Bienvenido a Wa2Eat!</h1>
								<h8>Únete a la mayor comunidad de recetas en línea</h8>
								<button class="ghost" id="signIn">Iniciar Sesión</button>
							</div>
							<div class="overlay-panel overlay-right">
								<h1>¡Bienvenido de nuevo!</h1>
								<h8>Introduce tus credenciales y comienza a navegar</h8>
								<button class="ghost" id="signUp">Registrarse</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

<script src="<?= base_url("js/login.js") ?>"></script>