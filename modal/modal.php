
<!-- INICIO MODAL CREAR -->
<div class="modal fade" id="modCrear" tabindex="-1" role="dialog" aria-labelledby="modCrear" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Proyecto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="fromCrear">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del proyecto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="Nombre" placeholder="Nombre del proyecto" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Costo del proyecto</label>
                        <input type="text" class="form-control" id="costo_fijo" name="costo_fijo" aria-describedby="Apellido" placeholder="Costo del proyecto" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Posibles costos</label>
                        <input type="text" class="form-control" id="costo_variable" name="costo_variable" aria-describedby="Documento" placeholder="Posibles costos" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Presupuesto Mensual</label>
                        <input type="text" class="form-control" id="presupuesto" name="presupuesto" aria-describedby="Documento" placeholder="presupuesto" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tipo</label>
                        <select class="form-control" id="Tipo" name="Tipo" required>
                        <option value="Corto Plaso">Corto Plaso</option>
                        <option value="Mediano Plaso">Mediano Plaso</option>
                        <option value="Largo Plaso">Largo Plaso</option>
                        </select>

                    </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" id="insertGuradar">Guardar</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- FIN MODAL CREAR -->
<!-- INICIO MODAL Editar -->
<div class="modal fade" id="modEditar" tabindex="-1" role="dialog" aria-labelledby="modCrear" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="fromEditar">
        <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del proyecto</label>
                        <input type="text" class="form-control" id="nombre1" name="nombre1" aria-describedby="Nombre" placeholder="Nombre del proyecto" required>
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Costo del proyecto</label>
                        <input type="text" class="form-control" id="costo_fijo1" name="costo_fijo1" aria-describedby="Apellido" placeholder="Costo del proyecto" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Posibles costos</label>
                        <input type="text" class="form-control" id="costo_variable1" name="costo_variable1" aria-describedby="Documento" placeholder="Posibles costos" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Presupuesto Mensual</label>
                        <input type="text" class="form-control" id="presupuesto1" name="presupuesto1" aria-describedby="Documento" placeholder="presupuesto" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tipo</label>
                        <select class="form-control" id="Tipo1" name="Tipo1" required>
                        <option value="Corto Plaso">Corto Plaso</option>
                        <option value="Mediano Plaso">Mediano Plaso</option>
                        <option value="Largo Plaso">Largo Plaso</option>
                        </select>

                    </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" id="insertGuradar">Actualizar</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- FIN MODAL Editar -->