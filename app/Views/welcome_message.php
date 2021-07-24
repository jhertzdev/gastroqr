<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>GastroQR</title>
	<meta name="description" content="API de GastroQR">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />

	<!-- STYLES -->

	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}

		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}

		html,
		body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
			background-color: rgba(247, 248, 249, 1);
		}

		.full-center {
			display: flex;
			flex-flow: column;
			width: 100%;
			height: 100vh;
			justify-content: center;
			align-items: center
		}

	</style>
</head>

<body>
	<div class="full-center">
		<img src="/img/gastroqr-icon.png" alt="Ícono de GastroQR" width="64">
		<h3>GastroQR Backend</h3>
		<p><?=site_url('api')?></p>
	</div>
</body>

</html>