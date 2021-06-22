$('#trabajadorId').on('click', () => {
    $.get('./get_all_workers.php',  // url
    function (data, textStatus, jqXHR) {  // success callback
        const trabajadores = data;
        let table = `
        <h2>Mantenedor de Trabajadores </h2> <br>
            <table style="width:100%">
            
                <tr>
                    <th>Nombre</th>
                    <th>Rut</th>
                    <th>Teléfono</th>
                    <th>Opciones</th>
                </tr>
        `;
        trabajadores.forEach(user => {
            table = `${table}
            <tr>
                <td> ${user.nombre} </td>
                <td> ${user.rut} </td>
                <td> ${user.telefono} </td>
                <td> 
                <a class="btn btn-primary"  href="./formulario_trabajador_modificar.php?id_trabajador=${user.id_trabajador}"  role="button">
                <i class="icon ion-md-hammer"></i>
                </a>
                
                
                <a class="btn btn-primary"  href="./eliminar_trabajador.php?id_trabajador=${user.id_trabajador}"  role="button">
                <i class="icon ion-md-remove-circle"></i>
                </a>
                
                </td>
            </tr>
            `;
        })
        table = `${table}</table>`;
        table = `${table}
      
            <a class="btn btn-primary" href="./formulario_trabajador_ingresar.php" role="button">
                Ingresar
            </a>
           
        `
        $('#inicio').empty();
        $('#table').html(table);
    });
});