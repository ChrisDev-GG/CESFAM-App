document.querySelector("#btn-speak")
      .onclick = () => {
         const text = "bievenidos ";
         const speech = new SpeechSynthesisUtterance();

         speech.text = text;

         speech.lang = "es";
         speechSynthesis.speak(speech);
      }