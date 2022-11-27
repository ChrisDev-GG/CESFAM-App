
function isValidFormUsers(){
    //let send = document.getElementById("send");
    let inp1 = document.getElementById("nombres").value;
    let inp2 = document.getElementById("apellidos").value;
    let inp3 = document.getElementById("email").value;
    let inp4 = document.getElementById("nombre_de_usuario").value;
    let inp5 = document.getElementById("date").value;
    let inp6 = document.getElementById("contraseña").value;
    if(inp1 == "" && inp2 == "" && inp3 == "" && inp4 == "" && inp5 == "" && inp6 == ""){
        let htmlstr = 
            `
                <div class='alert alert-danger'>
                    <ul class='list-unstyled mb-0'>
                        <li>Los campos estan vacios</li>
                    </ul>
                </div>                
            `;
        document.getElementById("errors").innerHTML = htmlstr; 
        return false;
    }else{
        document.getElementById("errors").innerHTML = ''; 
    }

}