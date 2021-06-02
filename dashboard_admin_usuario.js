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
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13822.993907412856!2d-71.34679745!3d-29.986657699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scl!4v1622587403248!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        `
        $('#table').html(table);
    });
});

