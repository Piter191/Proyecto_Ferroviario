$('#userId').on('click', () => {
    $.get('./get_all_users.php',  // url
    function (data, textStatus, jqXHR) {  // success callback
        const users = data;
        let table = `
            <table style="width:100%">
                <tr>
                    <th>Nombre</th>
                    <th>Rut</th>
                    <th>Tipo usuario</th>
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
            <a class="btn btn-primary" href="./formulario_usuario.php" role="button">
                Ingresar
            </a>
           
        `
        $('#table').html(table);
    });
});
