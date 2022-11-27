
var num,
timeLeft,
level,
timeGap = 650,
clickTimes = 0,
allMoles = document.querySelectorAll('.hole img'),
span = document.querySelector('span'),
hitSong = new Audio('../sounds/topo_hit_sound.mp3')

function makeMoleAppear() {
allMoles.forEach(mole => {
	mole.classList.remove('visible')
})
num = Math.floor(Math.random() * 6)
allMoles[num].classList.add('visible')
}

function startGame() {
clickTimes = 0
timeLeft = 60
moleAppearTimer = setInterval(() => {
	if (timeLeft == 0) {
		Swal.fire({
			icon: 'success',
			title: 'Muy Bien...',
			html: "Numero de Clicks: "+clickTimes+"<br><br> Presione el boton reintentar para volver a jugar",
		  })
		clearInterval(moleAppearTimer)
		nextMatch()
	} else {
		makeMoleAppear()
		timeLeft--
		document.getElementById("time-count").innerHTML = timeLeft;
	}
}, timeGap)

}
document.querySelector("#btn-speak")
.onclick = () => {
const text = "En este juego tendras que golpear al topo todas las veces que puedas en un minuto, buena suerte";
const speech = new SpeechSynthesisUtterance();

speech.text = text;

speech.lang = "es";
speechSynthesis.speak(speech);
}
function speak (message) {
	var msg = new SpeechSynthesisUtterance(message) 
	var voices = window.speechSynthesis.getVoices() 
	msg.voice = voices[0] 
	window.speechSynthesis.speak(msg) 
} 

	speak('En este juego tendras que golpear al topo todas las veces que puedas en un minuto, buena suerte');



function detectClick() {
hitSong.play()
clickTimes++
document.getElementById("score-count").innerHTML = clickTimes;
}

allMoles.forEach(mole => {
mole.addEventListener('click', detectClick)
})

startGame()
window.onload = nextMatch()

