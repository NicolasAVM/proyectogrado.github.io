$(document).ready(function(){

   console.log("llegaste al java")
   
})

$('#registro').submit(function(e){
    e.preventDefault();
    
      var email = $('#email').val();
      var name = $('#name').val();
      var password = $('#password').val();
      if (password.length < 8) {
        console.log("La contraseña no es valida");
        alert("La contraseña no es valida");
        return;
      }
      var password_codificado = btoa(password);
      console.log(password_codificado)

  
    $.ajax({
        url: 'controlador/Registrarse.php',
        type: 'POST',
        dataType: 'json',
        data: {opcn: 'registrar', email:email, name:name, password_codificado: password_codificado },
    })
    .done(function(data) {
    
        console.log("todo bien")
        alert("Se a registrado el Ususario con exito");
        window.location.href = 'iniciarSesion.html';
    })
   
    
  })