<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Pegale al topo</title>
 		<link rel="stylesheet" href="{{asset('css/topo.css')}}" />
		 <script src="{{asset('js/topo_sweetalert2.min.js')}}"></script>
	</head>
	<body>
		
	<header class="header">

	<a href="/home"><img src="{{asset('img/flecha.png')}}" alt="" width="100px" height="100px"></a>

	</header>
	<p class="instrucciones">Bienvenido, En este juego tendras que golpear al topo todas las veces que puedas en un minuto, buena suerte</p>
		<div class="sonido">
			<button id="btn-speak"> <img src="../img/sonido1.png" alt="" width="100px" height="100px"> </button>
		</div>
		<h1 class = "count">
			Tiempo : <span id = "time-count">0</span> &nbsp;
			Puntaje : <span id = "score-count">0</span>
		</h1>
		<button class ="button" onclick="location.reload()"> reintentar </button>
		<div class="container">
			<div class="playground">
				<div class="hole"><img class ="imagentopo" src="../img/mole.png" alt="mole" /></div>
				<div class="hole"><img class ="imagentopo" src="../img/mole.png" alt="mole" /></div>
				<div class="hole"><img class ="imagentopo" src="../img/mole.png" alt="mole" /></div>
				<div class="hole"><img class ="imagentopo" src="../img/mole.png" alt="mole" /></div>
				<div class="hole"><img class ="imagentopo" src="../img/mole.png" alt="mole" /></div>
				<div class="hole"><img class ="imagentopo" src="../img/mole.png" alt="mole" /></div>
				
			</div>
		</div>
		<script src="{{asset('js/topo.js')}}"></script>
	</body>
</html>
