$('#trabajadorId').on('click', () => {
    $.get('./get_all_workers.php',  // url
    function (data, textStatus, jqXHR) {  // success callback
        const trabajadores = data;
        let table = `
            <table style="width:100%">
                <tr>
                    <th>Nombre</th>
                    <th>Rut</th>
                    <th>Teléfono</th>
                    <th>Rol</th>
                </tr>
        `;
        trabajadores.forEach(user => {
            table = `${table}
            <tr>
                <td> ${user.nombre} </td>
                <td> ${user.rut} </td>
                <td> ${user.telefono} </td>
                <td> ${user.rol} </td>
            </tr>
            `;
        })
        table = `${table}</table>`;
        table = `${table}
      
            <a class="btn btn-primary" href="./formulario_trabajador.php" role="button">
                Ingresar
            </a>
           
        `
        $('#table').html(table);
    });
});