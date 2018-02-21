<!DOCTYPE html>
<html lang="tr" >
<head>
  <meta charset="UTF-8">
  <title>MKart Dogrulama Sistemi</title>
  <link rel="stylesheet" href="elzem/mkartstyle.css">
    <script src='elzem/jquery.min.js'></script>
    <script src='elzem/jquery-ui.min.js'></script>
    <script src="elzem/mkart.js"></script>
</head>

<body>
<div class="container">
    <div class="col-md-12">
  <div class="col1">
    <div class="card">
      <div class="front">
        <div class="type">
          <img class="bankid" src=""/>
        </div>
        <span class="chip"></span>
        <span class="card_number">&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; </span>
        <div class="date"><span class="date_value">MM / YY</span></div>
        <span class="fullname">Adınız Soyadınız</span>
      </div>
      <div class="back">
        <div class="magnetic"></div>
        <div class="bar"></div>
        <span class="seccode">&#x25CF;&#x25CF;&#x25CF;</span>
        <span class="chip"></span><span class="disclaimer"><?php echo base64_decode('QnUgS2FydMSxbiBUw7xtIEhha2xhcsSxIE1laG1ldCDDllpERU3EsFIgZSBBaXR0aXIuLiA8YnI+IE1LQVJUIC0gd3d3LmZzbXRlay5jb20gLSDEsHppbnNpeiBLdWxsYW7EsWxhbWF6')?></span>
      </div>
    </div>
  </div>
    </div>
  <div class="col2">
     <label>Adınız Soyadınız</label>
    <input class="inputname" type="text" placeholder=""/>
    <label>Kart Numaranız</label>
      <label>
          <input class="number" type="text" maxlength="19" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
      </label>
      <label>Son Kullanma Tarihi</label>
    <input class="expire" id="ayir" type="text" placeholder="AY/YL"/>

      <script>
          $(document).ready(function(){
              $("#ayir").keyup(function(){
                  var deger = $("#ayir").val();
                  var dizi = deger.split("/");
                  $("#ay").val(dizi[0]);
                  $("#yil").val(dizi[1]);
              });
          });
      </script>
      
      <input id="ay" type="hidden" />
      <input id="yil" type="hidden" />
      <input id="karttipi" type="hidden" />

    <label>CVC</label>
    <input class="ccv" type="text" placeholder="CVC" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <button class="buy"><i class="material-icons">lock</i>--.-- TL Öde</button>
  </div>
</div>
</body>
</html>
