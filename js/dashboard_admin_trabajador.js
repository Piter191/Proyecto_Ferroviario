$('#trabajadorId').on('click', () => {
    $.get('./get_all_workers.php',  // url
    function (data, textStatus, jqXHR) {  // success callback
        const trabajadores = data;
        let table = `
        <h2>Mantenedor de Trabajadores </h2> <br>
        <input type="button" onclick="tableToExcel('tabla_trabajador', 'W3C Example Table')" value="Export to Excel">
        <br> <br>
        <table id="tabla_trabajador" class="table table-striped table-bordered table-sm" cellspacing="0" style="width:100%">
        <thead>
            
                <tr>
                    <th>Nombre</th>
                    <th>Rut</th>
                    <th>Teléfono</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
        `;
        trabajadores.forEach(user => {
            table = `${table}
            <tr>
                <td> ${user.nombre} </td>
                <td> ${user.rut} </td>
                <td> ${user.telefono} </td>
                <td> 
                <a class="btn btn-primary"  href="./crud_trabajador/formulario_trabajador_modificar.php?id_trabajador=${user.id_trabajador}"  role="button">
                <i class="icon ion-md-hammer"></i>
                </a>
                
                
                <a class="btn btn-primary"  href="./crud_trabajador/eliminar_trabajador.php?id_trabajador=${user.id_trabajador}"  role="button">
                <i class="icon ion-md-remove-circle"></i>
                </a>
                
                </td>
            </tr>
            `;
        })
        table = `${table}
        
        </tbody> 
        </table>`;
        table = `${table}
      
            <a class="btn btn-primary" href="./crud_trabajador/formulario_trabajador_ingresar.php" role="button">
                Ingresar
            </a>
           
        `
        $('#inicio').empty();
        $('#mapa').empty();
        $('#table').html(table);
        $('#tabla_trabajador').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
});