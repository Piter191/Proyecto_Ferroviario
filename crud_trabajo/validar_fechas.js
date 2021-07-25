


function ValidarFiltroDeFechas(stringFechaDesde, stringFechaHasta) {



    stringFechaDesde=document.getElementById(stringFechaDesde).value;
    stringFechaHasta=document.getElementById(stringFechaHasta).value;

    Validador = { Estado: true, Mensaje: '' };

    if (stringFechaDesde == "") {
        alert("Debe ingresar una fecha de inicio.");

    }
    if (stringFechaHasta == "") {
        alert("Debe ingresar una fecha de termino.");

    }

  

    var dateDesde = ConvertirStringToDate(stringFechaDesde);
    var dateHasta = ConvertirStringToDate(stringFechaHasta);

    if (dateDesde > dateHasta) {
        alert("La fecha de inicio no puede ser mayor a la de término.");
      
            
                 
                        event.preventDefault();
      
    }
}

function ConvertirStringToDate(fechaString)
{
var fechas = fechaString.split('-');
if (fechas.length != 3)
    fecha = fechaString.split('/');

var tipoDate = new Date(fechas[0], fechas[1], fechas[2]);


return tipoDate;
}





