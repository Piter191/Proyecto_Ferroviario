$('#trenId').on('click', () => {
    $.get('./get_all_trains.php',  // url
    function (data, textStatus, jqXHR) {  // success callback
        const users = data;
        let table = `
            <table style="width:100%">
                <tr>
                    <th>Numero de Vagones</th>
                    <th>Numero de Patente</th>
                </tr>
        `;
        users.forEach(user => {
            table = `${table}
            <tr>
                <td> ${user.num_vagones} </td>
                <td> ${user.num_patente} </td>
            </tr>
            `;
        })
        table = `${table}</table>`;
        table = `${table}
            <a class="btn btn-primary" href="./formulario_tren.php" role="button">
                Ingresar
            </a>
           
        `
        $('#table').html(table);
    });
});