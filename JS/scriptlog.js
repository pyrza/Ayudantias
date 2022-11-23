function registrar();{
        
    var nombre   = document.getElementById('nombre').value;
    var email    = document.getElementById('email').value;
    var usernick = document.getElementById('usernick').value;
    var password = document.getElementById('password').value;
    
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status ==200){
        }
    }
    xmlhttp.open("POST","registro.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/json");
    xmlhttp.send(JSON.stringify({nombre:nombre, email:email, usernick:usernick, password:password }));

}
