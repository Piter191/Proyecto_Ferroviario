$('#trabajadorId').on('click', () => {
    $.get('./get_all_workers.php',  // url
    function (data, textStatus, jqXHR) {  // success callback
        const trabajadores = data;
        let table = `
        <center>
        <h2>Mantenedor de Trabajadores </h2> <br>
        </center>
        <button class="btn btn-dark" onclick="tableToExcel('tabla_trabajador', 'W3C Example Table')"> <img src="img/exporta_excel.png" width="30px" height="30px">Exportar a Excel</button>
        <br> <br>
        <table id="tabla_trabajador" class="table table-striped table-bordered table-sm" cellspacing="0" style="width:100%">
        <thead>
            
                <tr>
                    <th class="th-sm table-success">Nombre</th>
                    <th class="th-sm table-success">Rut</th>
                    <th class="th-sm table-success">Teléfono</th>
                    <th class="th-sm table-success">Estado</th>
                    <th class="th-sm table-success">Opciones</th>
                </tr>
                </thead>
                <tbody>
        `;
        trabajadores.forEach(user => {
            table = `${table}
            <tr>
                <td> ${user.nombre} </td>
                <td> ${user.rut} </td>
                <td>+56 9${user.telefono} </td>
                <td> ${user.estado} </td>
                <td> 
                <a class="btn btn-dark"   href="./crud_trabajador/formulario_trabajador_modificar.php?id_trabajador=${user.id_trabajador}"  role="button">
                <i class="icon ion-md-hammer"></i>
                </a>
                
                
                <a class="btn btn-danger"  href="./crud_trabajador/eliminar_trabajador.php?id_trabajador=${user.id_trabajador}"  role="button">
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
        <a class="btn btn-dark" href="./crud_trabajador/formulario_trabajador_ingresar.php" role="button">
        <i class="icon ion-md-add-circle"></i>
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