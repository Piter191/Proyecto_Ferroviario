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


$(() => {
    $.get("./get_all_trains.php", (data) =>{
       const workers = data;
       let select = `
       <select id="trenes" name="trenes">
       `;
       workers.forEach(element => {
        select=`${select}
        <option value=${element.id_tren}>${element.num_patente} </option>
        `;
       });
       select=`${select}</select>`;
       $('#trenes').html(select);
    })
})