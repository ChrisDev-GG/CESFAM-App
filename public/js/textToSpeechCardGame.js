if ("speechSynthesis" in window) {
    let demo = document.getElementById("play-instructions");
    demo.addEventListener("click", ()=>{
      let msg = new SpeechSynthesisUtterance("Busque las parejas de cartas tocando la pantalla para cada uno de ellos");
      speechSynthesis.speak(msg);
    });
    demo.disabled = false;
  };
    