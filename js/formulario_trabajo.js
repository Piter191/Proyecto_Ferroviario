$(() => {
    $.get("./get_all_workers.php", (data) =>{
       const workers = data;
       let select = `
       <select id="trabajadores" name="trabajadores">
       `;
       workers.forEach(element => {
        select=`${select}
        <option value=${element.id_trabajador}>${element.nombre} </option>
        `;
       });
       select=`${select}</select>`;
       $('#trabajadores').html(select);
    })
})

