$('#trabajoId').on('click', () => {
    $.get('./get_all_works.php',  // url
    function (data, textStatus, jqXHR) {  // success callback
        const users = data;
        let table = `
        <center>
        <h2>Mantenedor de Ordenes de Trabajo </h2> 
        </center> <br>
        <button class="btn btn-dark" onclick="tableToExcel('tabla_trabajo', 'W3C Example Table')"> <img src="img/exporta_excel.png" width="30px" height="30px">Exportar a Excel</button>
        <br> <br>
        <table id="tabla_trabajo" class="table table-striped table-bordered table-sm" cellspacing="0" style="width:100%">
        <thead>
                <tr>
                <th class="th-sm table-danger">Fecha de inicio</th>
                <th class="th-sm table-danger">Fecha de termino</th>
                <th class="th-sm table-danger">Trabajador</th>
                <th class="th-sm table-danger">Lugar</th>
                <th class="th-sm table-danger">Sector</th>
                <th class="th-sm table-danger">Estado</th>
                <th class="th-sm table-danger">Opciones</th>
                </tr>
                </thead>
                <tbody>
        `;
        users.forEach(user => {
            table = `${table}
            <tr>
            <td> ${user.fecha_inicio} <br> ${user.hora_inicio} </td>
            <td> ${user.fecha_termino} <br> ${user.hora_termino} </td>
            <td> ${user.nombre_trabajador} </td>
            <td> ${user.nombre_lugar} </td>
            <td> ${user.nombre_sector} </td>
            <td> ${user.estado} </td>
            <td>
            <a class="btn btn-dark"   href="./crud_trabajo/formulario_trabajo_modificar_despachador.php?id_trabajo_mantencion=${user.id_trabajo_mantencion}"  role="button">
                <i class="icon ion-md-hammer"></i>
                </a>

                <a class="btn btn-danger"  href="./crud_trabajo/eliminar_trabajo_despachador.php?id_trabajo_mantencion=${user.id_trabajo_mantencion}"  role="button">
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
        <a class="btn btn-dark" href="./crud_trabajo/formulario_trabajo_ingresar_despachador.php" role="button">
        <i class="icon ion-md-add-circle"></i>
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
