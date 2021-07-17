$('#mapaId').on('click', () => {
    const text=`
    <center>
    <h1>Mapa de la mina</h1>


    <img src="img/Mapa_Mina.png" alt="" width="918" height="739" usemap="#Mapa_MinaMap" id="Mapa_Mina" title="Mapa_Mina"/>
    <map name="Mapa_MinaMap">
  <area shape="poly" coords="250,671" href="#">
  <area shape="poly" coords="250,671,227,531,301,365,341,507" href="./index.php" alt="Puente de Vaciado">
  <area shape="poly" coords="154,667,115,482,223,386,195,567" href="#" alt="Talleres">
  <area shape="rect" coords="514,250,792,330" href="#" alt="Interior Mina Granito">
  <area shape="rect" coords="444,22,857,240" href="#" alt="3 Lineas">
  <area shape="poly" coords="287,316,347,371,471,245" href="#" alt="Portal Tunel">
    </map>
        <center>
    `;
    $('#table').empty();
    $('#inicio').empty();
    $('#mapa').html(text);
    
    })