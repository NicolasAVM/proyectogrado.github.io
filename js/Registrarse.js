$(document).ready(function(){

   console.log("llegaste al java")
   
})

$('#registro').submit(function(e){
    e.preventDefault();
 
    opcn = 'registrar'
    var datos = $(this).serializeArray();
    datos.push({name: 'opcn', value : opcn});

  
    $.ajax({
        url: 'controlador/Registrarse.php',
        type: 'POST',
        dataType: 'json',
        data: datos,
    })
    .done(function(data) {
    
        console.log("todo bien")
        alert("Se a registrado el Ususario con exito");
    })
   
    
  })