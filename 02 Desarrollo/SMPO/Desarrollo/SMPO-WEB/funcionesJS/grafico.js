var trace1 = {
    y: [3.54,3.53,3.54,3.55,3.55,3.55,3.55,3.53,3.54,3.54,3.55,3.57,3.57,3.57, 3.56, 3.5, 3.53,3.53],
    x: [01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17],
    type: 'scatter',
    name: 'Dolar',
    line: {
      color: 'green',
      width: 2
    }
  };

  var trace2 = {
    y: [4.25,4.18,4.21,4.21,4.21,4.21,4.17,4.17,4.17,4.16,4.19,4.20,4.20,4.24,4.24,4.21,4.16],
    x: [01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17],
    type: 'scatter',
    name: 'Euro',
    line: {
      color: 'black',
      width: 2
    }
  };
  var layout = {
    title:'Presione "Euro" o "Dólar" para ocultar o mostrar valores',
    xaxis: {
      title: 'Día de Setiembre'
    },
    yaxis: {
      title: 'Precio en Soles'
    }
  };

  var data = [trace2,trace1];

  Plotly.newPlot('grafica', data,layout);