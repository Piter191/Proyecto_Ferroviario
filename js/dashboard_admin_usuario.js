$('#userId').on('click', () => {
    $.get('./get_all_users.php',  // url
    function (data, textStatus, jqXHR) {  // success callback
        const users = data;
        let table = `
        <h2>Mantenedor de Usuarios </h2> <br>
            <table style="width:100%">
                <tr>
                    <th>Nombre</th>
                    <th>Rut</th>
                    <th>Tipo usuario</th>
                    <th>Opciones</th>
                </tr>
        `;
        users.forEach(user => {
            table = `${table}
            <tr>
                <td> ${user.nombre} </td>
                <td> ${user.rut} </td>
                <td> ${user.tipo_usuario} </td>
                <td> <a class="btn btn-primary"  href="./formulario_usuario_modificar.php?id_usuario=${user.id_usuario}"  role="button">
                <i class="icon ion-md-hammer"></i>
            </a> </td>
            </tr>
            `;
        })
        table = `${table}</table>`;
        table = `${table}
            <a class="btn btn-primary" href="./formulario_usuario_ingresar.php" role="button">
                Ingresar
            </a>
           
        `
        $('#inicio').empty();
        $('#table').html(table);
    });
});
