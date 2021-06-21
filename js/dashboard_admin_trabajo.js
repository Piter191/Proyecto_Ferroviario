$('#trabajoId').on('click', () => {
    $.get('./get_all_work_transfer.php',  // url
    function (data, textStatus, jqXHR) {  // success callback
        const users = data;
        let table = `
        <h2>Mantenedor de Ordenes de Trabajo </h2> <br>
            <table style="width:100%">
                <tr>
                    <th>Hora de inicio</th>
                    <th>Hora de termino</th>
                    <th>Trabajador</th>
                </tr>
        `;
        users.forEach(user => {
            table = `${table}
            <tr>
                <td> ${user.hora_inicio} </td>
                <td> ${user.hora_termino} </td>
                <td> ${user.nombre_trabajador} </td>
            </tr>
            `;
        })
        table = `${table}</table>`;
        table = `${table}
            <a class="btn btn-primary" href="./formulario_trabajo.php" role="button">
                Ingresar
            </a>
           
        `
        $('#inicio').empty();
        $('#table').html(table);
    });
});