$('#trabajoId').on('click', () => {
    $.get('./get_all_work_transfer.php',  // url
    function (data, textStatus, jqXHR) {  // success callback
        const users = data;
        let table = `
            <table style="width:100%">
                <tr>
                    <th>Hora de inicio</th>
                    <th>Hora de termino</th>
                </tr>
        `;
        users.forEach(user => {
            table = `${table}
            <tr>
                <td> ${user.nombre} </td>
                <td> ${user.rut} </td>
                <td> ${user.tipo_usuario} </td>
            </tr>
            `;
        })
        table = `${table}</table>`;
        table = `${table}
            <a class="btn btn-primary" href="./formulario_trabajo.php" role="button">
                Ingresar
            </a>
           
        `
        $('#table').html(table);
    });
});
