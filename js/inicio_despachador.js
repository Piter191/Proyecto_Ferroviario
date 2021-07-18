$(() =>{
    cargar_inicio();
  })
  
  $('#nada').on('click', () => {
  cargar_inicio();
  })
  
  
  function cargar_inicio(){
      const text=`
      <center>
      
      <h1>¡Bienvenido al Dashboard Despachador!</h1>
          
      <img src="img/despachador.jpg" width="240px" height="200px">
      <center>
      
      
      `;
      $('#table').empty();
      $('#mapa').empty();
      $('#inicio').html(text);    
  }