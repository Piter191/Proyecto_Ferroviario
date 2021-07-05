$('#trabajoId').on('click', () => {
    $.get('./get_all_work_transfer.php',  // url
    function (data, textStatus, jqXHR) {  // success callback
        const users = data;
        let table = `
        <h2>Mantenedor de Ordenes de Trabajo </h2> <br>
        <input type="button" onclick="tableToExcel('tabla_trabajo', 'W3C Example Table')" value="Export to Excel">
        <br> <br>
        <table id="tabla_trabajo" class="table table-striped table-bordered table-sm" cellspacing="0" style="width:100%">
        <thead>
                <tr>
                    <th>Hora de inicio</th>
                    <th>Hora de termino</th>
                    <th>Trabajador</th>
                    <th>Lugar</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
        `;
        users.forEach(user => {
            table = `${table}
            <tr>
                <td> ${user.hora_inicio} </td>
                <td> ${user.hora_termino} </td>
                <td> ${user.nombre_trabajador} </td>
                <td> ${user.nombre_lugar} </td>
                <td>

                <a class="btn btn-primary"  href="./crud_trabajo/eliminar_trabajo_administrador.php?id_trabajo_transporte=${user.id_trabajo_transporte}"  role="button">
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
            <a class="btn btn-primary" href="./crud_trabajo/formulario_trabajo_ingresar_admin.php" role="button">
                Ingresar
            </a>
           
        `
        $('#inicio').empty();
        $('#mapa').empty();
        $('#table').html(table);
        $('#tabla_trabajo').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
});
