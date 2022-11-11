
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
			alert(`Muy bien... ${clickTimes} clicks en 60 segundos`)
			clearInterval(moleAppearTimer)
			nextMatch()
		} else {
			makeMoleAppear()
			timeLeft--
			document.getElementById("time-count").innerHTML = timeLeft;
		}
	}, timeGap)
	
}


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

