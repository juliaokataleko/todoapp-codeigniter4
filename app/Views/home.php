<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wottels</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/all.css'); ?>">
	<style>
		* {
			padding: 0;
			margin: 0;
			font-family: arial;
			box-sizing: border-box;
		}

		a {
			text-decoration: none;
		}

		header {
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			align-items: center !important;
			padding: 0 20px;
			height: 60px;
			line-height: 60px !important;
		}

		header ul {
			list-style: none;
			display: inline;
		}

		header ul li {
			list-style: none;
			display: inline;
		}

		header ul li a {
			color: #fff;
			font-size: 18px;
			font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
			padding: 8px;
			border-radius: 5px;
			/* background-color: #555; */
			transition: 0.3s;
			text-transform: uppercase;
		}

		header ul li.menu a {
			color: #fff;
			font-size: 24px;
			font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
			padding: 8px;
			border-radius: 5px;
			background-color: transparent;
			transition: 0.3s;
		}

		header ul li a:hover {
			background-color: #777;
		}

		header ul li.menu {
			display: none;
		}

		header h1 {
			font-size: 30px;
			font-weight: 900;
			color: #fff;
		}

		.main-section {
			min-height: calc(100vh - 60px);
			/* background-color: #f5f6fa; 
			background: url('images/bg.jpg'), #6DB3F2;*/
			background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('images/bg.jpg');
			background-size: cover;
			background-position: center, right bottom;
			background-repeat: no-repeat, no-repeat;
			background-attachment: fixed;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			padding: 80px 20px;
			color: #fff;
		}

		.main-section h2 {
			font-size: 30px;
			font-weight: 400;
			text-transform: uppercase;
			margin-bottom: 1em;
		}

		.main-section p {
			font-size: 16px;
			font-weight: 200;
			text-transform: uppercase;
		}

		.search {
			display: flex;
			flex-direction: column;
			align-items: stretch;
			justify-content: center;
			padding: 80px 20px;
			color: #444;
			background-color: #ddd;
		}

		.search h3 {
			font-size: 30px;
			font-weight: 400;
			text-transform: uppercase;
			margin-bottom: 1em;
			padding-bottom: 1em;
			border-bottom: #fff 2px solid;
		}

		.search .inputs {
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: space-between;
			width: 100%;
			border: 1px solid #ddd;
			background-color: #fff;
			padding: 13px;
			border-radius: 3px;
			box-shadow: 1px 0px 4px 0px #444;
		}

		.search .inputs label {
			display: block;
			text-align: center;
			color: #192a56;
		}

		.search .inputs div {
			width: 25%;
		}

		.search .inputs input,
		.search .inputs select,
		.search .inputs button {
			display: block;
			width: 100% !important;
			background: #fff;
			padding: 10px;
			border: 0;
			transition: 0.3s;
			outline: none;
		}

		.search .inputs button:hover {
			background-color: #0652DD;
			color: #fff;
		}

		/**
			Mobile
		*/

		@media (max-width:520px) {
			header ul li {
				display: none;
			}

			header ul li.menu {
				display: inline;
			}
		}
	</style>


</head>

<body>
	<header class="bg-primary">
		<h1>Wottels</h1>
		<ul>
			<li><a href="#">Sobre</a></li>
			<li><a href="#"><i class="fa fa-search"></i></a></li>
			<li><a href="/auth">Entrar</a></li>
			<li><a href="/auth/register">Registo</a></li>
			<li class="menu"><a href="#"><i class="fa fa-bars"></i></a></li>
		</ul>
	</header>

	<div class="main-section">
		<h2>Sistema de localização de Hotéis</h2>
		<p>Encontre um hotel em qualquer cidade onde fores...</p>
	</div>

	<div class="search">
		<h3>Pesquisar</h3>

		<div class="inputs">
			<div>
				<label for="country_id">País</label>
				<select name="country_id" id="country_id">
					<option value="">Selecionar</option>
				</select>
			</div>
			<div>
				<label for="state_id">Estado</label>
				<select name="state_id" id="state_id">
					<option value="">Selecionar</option>
				</select>
			</div>
			<div>
				<label for="city_id">Cidade</label>
				<select name="city_id" id="city_id">
					<option value="">Selecionar</option>
				</select>
			</div>
			<div>
				<label for="city_id">Pesquisar</label>
				<button><i class="fa fa-search"></i></button>
			</div>
		</div>
	</div>

</body>

</html>