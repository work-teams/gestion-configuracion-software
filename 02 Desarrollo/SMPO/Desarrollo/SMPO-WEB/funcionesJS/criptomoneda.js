function cargar(){
    bitcoinComprar = 0;
    bitcoinVender = 0;
    etherumComprar = 0;
    etherumVender = 0;
    rippleComprar = 0;
    rippleVender = 0;
    dashComprar = 0;
    dashVender = 0;
    litecoinComprar = 0;
    litecoinVender = 0;
    tronComprar = 0;
    tronVender = 0;
    var aleatorio = Math.random()*100;
    bitcoin1 = document.getElementById("ComprarBitcoin");
    bitcoin2 = document.getElementById("VenderBitcoin");
    etherum1 = document.getElementById("ComprarEtherum");
    etherum2 = document.getElementById("VenderEtherum");
    ripple1 = document.getElementById("ComprarRipple");
    ripple2 = document.getElementById("VenderRipple");
    dash1 = document.getElementById("ComprarDash");
    dash2 = document.getElementById("VenderDash");
    litecoin1 = document.getElementById("ComprarLitecoin");
    litecoin2 = document.getElementById("VenderLitecoin");
    tron1 = document.getElementById("ComprarTron");
    tron2 = document.getElementById("VenderTron");
    window.setInterval(
      function(){
        if(tronComprar>=0){
          tronComprar = 45.15+aleatorio;
          aleatorio++;
        }
        if(tronVender>=0){
          tronVender = 45.15+aleatorio;
          aleatorio++;
        }
        if(bitcoinComprar>=0){
          bitcoinComprar = 45.15+aleatorio;
          aleatorio++;
        }
        if(bitcoinVender>=0){
          bitcoinVender = 45.15+aleatorio;
          aleatorio++;
        }
        if(etherumComprar>=0){
          etherumComprar = 45.15+aleatorio;
          aleatorio++;
        }
        if(etherumVender>=0){
          etherumVender = 45.15+aleatorio;
          aleatorio++;
        }
        if(rippleComprar>=0){
          rippleComprar = 45.15+aleatorio;
          aleatorio++;
        }
        if(rippleVender>=0){
          rippleVender = 45.15+aleatorio;
          aleatorio++;
        }
        if(dashComprar>=0){
          dashComprar = 45.15+aleatorio;
          aleatorio++;
        }
        if(dashVender>=0){
          dashVender = 45.15+aleatorio;
          aleatorio++;
        }
        if(litecoinComprar>=0){
          litecoinComprar = 45.15+aleatorio;
          aleatorio++;
        }
        if(litecoinVender>=0){
          litecoinVender = 45.15+aleatorio;
          aleatorio++;
        }
        tron1.innerHTML=tronComprar.toFixed(2);
        tron2.innerHTML=tronVender.toFixed(2);
        bitcoin1.innerHTML=bitcoinComprar.toFixed(2);
        bitcoin2.innerHTML=bitcoinVender.toFixed(2);
        etherum1.innerHTML=etherumComprar.toFixed(2);
        etherum2.innerHTML=etherumVender.toFixed(2);
        ripple1.innerHTML=rippleComprar.toFixed(2);
        ripple2.innerHTML=rippleVender.toFixed(2);
        dash1.innerHTML=dashComprar.toFixed(2);
        dash2.innerHTML=dashVender.toFixed(2);
        litecoin1.innerHTML=litecoinComprar.toFixed(2);
        litecoin2.innerHTML=litecoinVender.toFixed(2);
      }
      ,3000);
  } 