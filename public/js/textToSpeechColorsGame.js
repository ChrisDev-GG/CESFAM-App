if ("speechSynthesis" in window) {
    let demo = document.getElementById("play-instructions");
    demo.addEventListener("click", ()=>{
      let msg = new SpeechSynthesisUtterance("Arrastre las figuras de colores de la izquierda hacia el lado derecho donde corresponda");
      speechSynthesis.speak(msg);
    });
    demo.disabled = false;
  };
    