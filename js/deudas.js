$(document).ready(function() {
    console.log('llegas a js menu');
    listarprestamos()
});

function listarprestamos(){
    $.ajax({
        url: 'controlador/deudas.php',
        type: 'POST',
        dataType: 'json',
        data: {opcn:'listarproyectos'},
    })
    .done(function (res){
        let tr = ""
        res.forEach(el => {
            tr += `<tr>
            
            <td data-label='id'>${el.id_prestamo}</td>
            <td data-label='Nombre'>$${el.valor_prestamo}</td>
            <td data-label='costo fijo'>${el.tiempo_pago}</td>
            <td data-label='costo variable'>${el.interes}%</td>
            <td data-label='costo variable'>$${el.deuda_actual}</td>
            <td data-label='Estado'>${el.estado}</td>
            <td data-label='Acciones'>
                    <button type="button" class="btn btn-primary btn-sm editar" data-id= "${el.id_proyectos}">Editar</button>
                    <button type="button" class="btn btn-danger btn-sm eliminar" data-id= "${el.id_proyectos}">finalizar</button>
                       
            </td>
            </tr>`
        });
        $('#listar tbody').html(tr);
        })
            
       
   
    .fail(function( ){
        console.log("error");
    })

}


$('body').on('click','#crear',function() {
    console.log('crear')
    $('#modCrear').modal('show')
    document.getElementById("fromCrear").reset();
})

$('#modCrear').submit(function(e){
    console.log('llegas a guardar')
    e.preventDefault();
    //guardo los datos del formularion en un array de objeto
    let datos = $('#fromCrear').serializeArray();
    datos.push({name:'opcn',value:'crear'})
    
    $.ajax({
        url: 'controlador/deudas.php',
        type: 'POST',
        dataType: 'json',
        data: datos,
    })
    .done(function(res) {
        $('#modCrear').modal('hide');
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Operacion Exitosa',
            showConfirmButton: false,
            timer: 1500
          })
          listarprestamos()
    })
    .fail(function() {
        console.log("error");
    })  
})

$('body').on('click','.editar', function(){
    console.log('llegas a editar')
    let id = $(this).data('id')
    console.log(id)
    $.ajax({
        url: 'controlador/deudas.php',
        type: 'POST',
        dataType: 'json',
        data: {opcn: 'verXid',id},
    })
    .done(function(res) {
        $('#modEditar').modal('show');
        $('#id').val(res.id_proyectos)
        $('#nombre1').val(res.objetivo)
        $('#costo_fijo1').val(res.costo_fijos)
        $('#costo_variable1').val(res.costos_variables)
        $('#presupuesto1').val(res.presupuesto)
        $('#Tipo1').val(res.categoria)
    })
    .fail(function() {
        console.log("error");
    })
})

$('#modEditar').submit(function(e){
    e.preventDefault();
    let datos = $('#fromEditar').serializeArray();
    
    datos.push({name:'opcn',value:'update'})
    
    $.ajax({
        url: 'controlador/deudas.php',
        type: 'POST',
        dataType: 'json',
        data: datos,
    })
    .done(function(res) {
        $('#modEditar').modal('hide');
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Operacion Exitosa',
            showConfirmButton: false,
            timer: 1500
          })
          listarprestamos()
    })
    .fail(function() {
        console.log("error");
    })  
})