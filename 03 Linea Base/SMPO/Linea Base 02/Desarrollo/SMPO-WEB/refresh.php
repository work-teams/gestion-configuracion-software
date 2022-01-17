<div id="actualiza">
    <h5 style="background-color: #DFD405;color:black;" class="text-center mx-1 rounded">Valor del BITCOIN en tiempo real</h5>
    <h5 style="background-color: #DFD405;color:black;" class="px-2 py-1 text-center mx-1 rounded" id="actualiza"><?php
      $url="https://bitpay.com/api/rates";
      $json=json_decode(file_get_contents($url));
      $btc0;
      foreach($json as $obj){
        if($obj->code=='USD') $btc = $obj->rate;
        if($obj->code=='EUR') $btc2 = $obj->rate;
        if($obj->code=='PEN') $btc3 = $obj->rate;
        if($obj->code=='MXN') $btc4 = $obj->rate;
        if($obj->code=='JPY') $btc5 = $obj->rate;
        if($obj->code=='CNY') $btc6 = $obj->rate;

      }
      echo "1 BITCOIN = ". $btc . '$ USD' . "  =  ".$btc2.'€ EUR' . "  =  S/".$btc3.' PEN' . "  =  ".$btc4.'$ MXN' . "  =  ".$btc5.'¥ JPY' . "  =  ".$btc6.'¥ CNY';
      ?>
    </h5>
</div>
