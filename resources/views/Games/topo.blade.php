<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Pegale al topo</title>
 		<link rel="stylesheet" href="{{asset('css/topo.css')}}" />
	</head>
	<body>
		<h1 class = "count">
			Tiempo : <span id = "time-count">0</span> &nbsp;
			Puntaje : <span id = "score-count">0</span>
		</h1>
		<button class ="button" onclick="location.reload()"> reintentar </button>
		<div class="container">
			<div class="playground">
				<div class="hole"><img src="{{asset('img/mole.png')}}" alt="mole" /></div>
				<div class="hole"><img src="{{asset('img/mole.png')}}" alt="mole" /></div>
				<div class="hole"><img src="{{asset('img/mole.png')}}" alt="mole" /></div>
				<div class="hole"><img src="{{asset('img/mole.png')}}" alt="mole" /></div>
				<div class="hole"><img src="{{asset('img/mole.png')}}" alt="mole" /></div>
				<div class="hole"><img src="{{asset('img/mole.png')}}" alt="mole" /></div>
				
			</div>
		</div>
		<script src="{{asset('js/topo.js')}}"></script>
	</body>
</html>
