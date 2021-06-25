$('#mapaId').on('click', () => {
    const text=`
    <center>
    <h1>Mapa de la mina</h1>


    <img src="img/Mapa Mina.png" alt="" width="918" height="739" usemap="#Mapa_MinaMap" id="Mapa_Mina" title="Mapa_Mina"/>
    <map name="Mapa_MinaMap">
      <area shape="poly" coords="250,671" href="#">
      <area shape="poly" coords="250,671,227,531,286,454,341,507" href="#" alt="Puente de Vaciado">
      <area shape="poly" coords="154,667,126,510,203,431,195,567" href="#" alt="Talleres">
      <area shape="rect" coords="514,250,792,330" href="#" alt="Interior Mina Granito">
    </map>
        <center>
    `;
    $('#table').empty();
    $('#inicio').empty();
    $('#mapa').html(text);
    
    })