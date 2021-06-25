$('#nada').on('click', () => {
const text=`
<center>
    <h1>¡Bienvenido al Dashboard Visualizador!</h1>

    <img src="img/visualizador.jpg" width="240px" height="200px">
    <center>
`;
$('#table').empty();
$('#mapa').empty();
$('#inicio').html(text);

})