if ("speechSynthesis" in window) {
  let demo = document.getElementById("play-instructions");
  demo.addEventListener("click", ()=>{
    let msg = new SpeechSynthesisUtterance("Bienvenido. Presione alguno de los botones que se encuentran debajo para entrar a uno de los juegos");
    speechSynthesis.speak(msg);
  });
  demo.disabled = false;
};
  
