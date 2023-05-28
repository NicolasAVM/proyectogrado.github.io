$(document).ready(function() {
    console.log('llegas a js menu');
    listarproyectos()
});

function listarproyectos(){
    $.ajax({
        url: 'controlador/menu.php',
        type: 'POST',
        dataType: 'json',
        data: {opcn:'listarproyectos'},
    })
    .done(function (res){
        let tr = ""
        res.forEach(el => {
            tr += `<tr>
            
            <td data-label='id'>${el.id_proyectos}</td>
            <td data-label='Nombre'>${el.objetivo}</td>
            <td data-label='costo fijo'>$${el.costo_fijos}</td>
            <td data-label='costo variable'>$${el.costos_variables}</td>
            <td data-label='categoria'>${el.categoria}</td>
            <td data-label='presupuesto'>$${el.presupuesto}</td>
            <td data-label='ahorro total'>$${el.ahorro_total}</td>
            <td data-label='Estado'>${el.estado}</td>
            <td data-label='Acciones'>
                <span class="mensaje-finalizado" ${el.estado === 'Finalizado' ? 'style="display: block;"' : 'style="display: none;"'}>Proyecto finalizado</span>
                <button type="button" class="btn btn-primary btn-sm editar" data-id="${el.id_proyectos}" ${el.estado === 'Finalizado' ? 'style="display: none;"' : ''}>Editar</button>
                <button type="button" class="btn btn-danger btn-sm eliminar" data-id="${el.id_proyectos}" ${el.estado === 'Finalizado' ? 'style="display: none;"' : ''}>Finalizar</button>
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
        url: 'controlador/menu.php',
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
          listarproyectos()
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
        url: 'controlador/menu.php',
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
        $('#ahorro_total').val(res.ahorro_total)
        $('#Tipo1').val(res.categoria)
    })
    .fail(function() {
        console.log("error");
    })
})

$('#modEditar').submit(function(e){
    e.preventDefault();
    let datos = $('#fromEditar').serializeArray();
    let ahorro_mes = document.getElementById("ahorro_mes").value;
    let ahorro_total = document.getElementById("ahorro_total").value;
    let mes = parseInt(ahorro_mes);
    let total_ = parseInt(ahorro_total);
    let total = mes + total_;

    datos.push({name:'opcn',value:'update'})
    datos.push({name:'ahorro_total',value: total})
    
    $.ajax({
        url: 'controlador/menu.php',
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
          listarproyectos()
    })
    .fail(function() {
        console.log("error");
    })  
})

$('body').on('click','.eliminar', function(){
    let id = $(this).data('id')
    Swal.fire({
        title: 'Esta seguro de eliminar este producto?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: 'controlador/menu.php',
                type: 'POST',
                dataType: 'json',
                data: {opcn: 'eliminarXid',id},
            })
            .done(function(res) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Operacion Exitosa',
                    showConfirmButton: false,
                    timer: 1500
                  })
                listarproyectos()
            })
            .fail(function() {
                console.log("error");
            }) 
          
        }
      })
})

