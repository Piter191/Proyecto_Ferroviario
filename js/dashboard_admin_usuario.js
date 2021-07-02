$('#userId').on('click', () => {
    $.get('../get_all_users.php',  // url
    function (data, textStatus, jqXHR) {  // success callback
        const users = data;
        let table = `
        <h2>Mantenedor de Usuarios </h2> <br>
        <input type="button" onclick="tableToExcel('tabla_usuarios', 'W3C Example Table')" value="Export to Excel">
        <br> <br>
            <table id="tabla_usuarios" class="table table-striped table-bordered table-sm" cellspacing="0" style="width:100%">
                <thead>
                <tr>
                    <th class="th-sm">Nombre</th>
                    <th class="th-sm">Rut</th>
                    <th class="th-sm">Tipo usuario</th>
                    <th class="th-sm">Opciones</th>
                    
                </tr>
                </thead>
                <tbody>
        `;
        users.forEach(user => {
            table = `${table}
            <tr>
                <td> ${user.nombre} </td>
                <td> ${user.rut} </td>
                <td> ${user.tipo_usuario} </td>
                <td> 
                  <a class="btn btn-primary"  href="crud_usuario/formulario_usuario_modificar.php?id_usuario=${user.id_usuario}"  role="button">
                    <i class="icon ion-md-hammer"></i>
                  </a> 

                  <a class="btn btn-primary"  href="crud_usuario/eliminar_usuario.php?id_usuario=${user.id_usuario}"  role="button">
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
            <a class="btn btn-primary" href="crud_usuario/formulario_usuario_ingresar.php" role="button">
                Ingresar
            </a>
           
        `
        $('#inicio').empty();
        $('#mapa').empty();
        $('#table').html(table);
        $('#tabla_usuarios').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
});

/*
function create_table(){
    $('#Tabla_Usuarios').DataTable();
    //$('.dataTables_length').addClass('bs-select');

}
*/