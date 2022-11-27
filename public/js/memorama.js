        var puntaje = 0;
        var conteo = 0;

        Swal.fire("Bienvenido al Memorama", 'En este juego tendras que encontrar los pares de imagenes, tienes 28 intentos para completar el juego, sino pierdes, buena suerte! <br><br> Has click en el boton para empezar')

        generarTablero()


        function cargarIconos() {
            iconos = [
                '<i class="fas fa-star"></i>',
                '<i class="far fa-star"></i>',
                '<i class="fas fa-star-of-life"></i>',
                '<i class="fas fa-star-and-crescent"></i>',
                '<i class="fab fa-old-republic"></i>',
                '<i class="fab fa-galactic-republic"></i>',
                '<i class="fas fa-sun"></i>',
                '<i class="fas fa-stroopwafel"></i>',
                '<i class="fas fa-dice"></i>',
                '<i class="fas fa-chess-knight"></i>',
                '<i class="fas fa-chess"></i>',
                '<i class="fas fa-dice-d20"></i>',
            ]
        }

        function generarTablero() {
            cargarIconos()
            selecciones = []
            let tablero = document.getElementById("tablero")
            let tarjetas = []
            for (let i = 0; i < 24; i++) {
                tarjetas.push(`
                <div class="area-tarjeta" onclick="seleccionarTarjeta(${i})">
                    <div class="tarjeta" id="tarjeta${i}">
                        <div class="cara trasera" id="trasera${i}">
                            ${iconos[0]}
                        </div>
                        <div class="cara superior">
                            <i class="far fa-question-circle"></i>
                        </div>
                    </div>
                </div>        
                `)
                if (i % 2 == 1) {
                    iconos.splice(0, 1)
                }
            }
            tarjetas.sort(() => Math.random() - 0.5)
            tablero.innerHTML = tarjetas.join(" ")
            

        }

        function seleccionarTarjeta(i) {
            let tarjeta = document.getElementById("tarjeta" + i)
            if (tarjeta.style.transform != "rotateY(180deg)") {
                tarjeta.style.transform = "rotateY(180deg)"
                selecciones.push(i)
            }
            if (selecciones.length == 2) {
                deseleccionar(selecciones)
                selecciones = []
                conteo++;
                document.getElementById("conteohtml").innerHTML = conteo;
                if(conteo>=28){

                    conteo = 28;
        
                    Swal.fire({
                        icon: 'error',
                        title: 'Has perdido...',
                        html: "tu puntaje: "+puntaje+" intentos: "+conteo+"<br><br> Presione el boton nuevo juego para volver a intentarlo",
                      })
                      function speak (message) {
                        var msg = new SpeechSynthesisUtterance(message) 
                        var voices = window.speechSynthesis.getVoices() 
                        msg.voice = voices[0] 
                        window.speechSynthesis.speak(msg) 
                    } 
            
                        speak('Has perdido,tu puntaje es de "'+puntaje+'" puntos  y fueron '+conteo+' intentos: " Presione el boton nuevo juego para volver a intentarlo');
            

                }
      
                if(puntaje == 12){

                    Swal.fire({
                        icon: 'success',
                        title: 'Has Ganado...',
                        html: "tu puntaje: "+puntaje+" intentos: "+conteo+"<br><br> Presione el boton nuevo juego para volver a intentarlo",
                      })
                      function speak (message) {
                        var msg = new SpeechSynthesisUtterance(message) 
                        var voices = window.speechSynthesis.getVoices() 
                        msg.voice = voices[0] 
                        window.speechSynthesis.speak(msg) 
                    } 
            
                        speak('Has ganado,tu puntaje es de "'+puntaje+'" puntos y fueron '+conteo+' intentos " Presione el boton nuevo juego para volver a intentarlo');
            

                }
                
            }
        }

        function deseleccionar(selecciones) {
            setTimeout(() => {
                let trasera1 = document.getElementById("trasera" + selecciones[0])
                let trasera2 = document.getElementById("trasera" + selecciones[1])
                if (trasera1.innerHTML != trasera2.innerHTML) {
                    let tarjeta1 = document.getElementById("tarjeta" + selecciones[0])
                    let tarjeta2 = document.getElementById("tarjeta" + selecciones[1])
                    tarjeta1.style.transform = "rotateY(0deg)"
                    tarjeta2.style.transform = "rotateY(0deg)"
                    //window.alert("son diferentes");
                   
                }else{
                    trasera1.style.background = "plum"
                    trasera2.style.background = "plum"

                    
                    puntaje=puntaje+100;

                    document.getElementById("puntajehtml").innerHTML = puntaje;

                    //window.alert(puntaje);
                }
            }, 1000);
        }
        document.querySelector("#btn-speak")
        .onclick = () => {
        const text = "En este juego tendras que encontrar los pares de imagenes, tienes 28 intentos para completar el juego, sino pierdes, buena suerte!";
        const speech = new SpeechSynthesisUtterance();

        speech.text = text;

        speech.lang = "es";
        speechSynthesis.speak(speech);

        
        }
        

        function instrucciones(){

            document.querySelector("#btn-speak")
            .onclick = () => {
               const text = "bienvenidos";
               const speech = new SpeechSynthesisUtterance();
  
               speech.text = text;
  
               speech.lang = "es";
               speechSynthesis.speak(speech);
  
  
          }

        }
        function speak (message) {
            var msg = new SpeechSynthesisUtterance(message) 
            var voices = window.speechSynthesis.getVoices() 
            msg.voice = voices[0] 
            window.speechSynthesis.speak(msg) 
        } 

            speak('En este juego tendras que encontrar los pares de imagenes, tienes 28 intentos para completar el juego, sino pierdes, buena suerte');


           
        