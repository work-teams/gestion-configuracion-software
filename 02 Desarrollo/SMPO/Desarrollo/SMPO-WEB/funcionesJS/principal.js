$(document).ready(function() {
    var refreshId =  setInterval( function(){  
      $('#actualiza').load('refresh.php');//actualizas el div
      }, 1000);
});