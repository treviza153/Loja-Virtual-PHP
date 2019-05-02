<?php

  include "header.php";

?>

<!-- MAPA -->

        
		
<div class="container">
<div  id="content">

     <h1 class="localizacao"> Nossa Localização </h1>

      <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>   
	  
	     <div style='overflow:hidden;height:440px;width:1000px;'>
	
	<div id='gmap_canvas' style='height:440px;width:1000px;'></div>
	
	<div><small><a href="http://embedgooglemaps.com">embed google map</a></small></div>
	
	<div><small><a href="http://proxysitereviews.com/">proxy sites</a></small></div></div>
		
	  <script type="text/javascript">function init_map(){var myOptions = {zoom:11,center:new google.maps.LatLng(-22.905897952849525,-43.18422615087888),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker
	  ({map: map,position: new google.maps.LatLng(-22.905897952849525,-43.18422615087888)});infowindow = new google.maps.InfoWindow({content:'<strong>Sports.com</strong><br>Rio de Janeiro, Brasil<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);
	  }google.maps.event.addDomListener(window, 'load', init_map);</script>


<!-- INFORMAÇÕES -->


<div  id="coluna1" class="col-2">
		<div class="col-md-4 col-xs-12"><div class="row"><h3 class="endereco">Endereço</h3>
		
	<p class="letras">Avenida das Américas, 4.666<br>Barra da Tijuca - CEP: 22640-102<br>Rio de Janeiro - RJ</p></div></div><div class="col-md-4 col-xs-12"><div class="row">
	
		</div> </div>
		
	<h3 class="funcionamento">Funcionamento</h3><p class="letras">Segunda a sábado: 07h00 às 00h00<br>Domingo: 07h00 às 23h00<br>
	Feriados: 07h00 às 21h00</p>

		<div class="col-md-4 col-xs-12"><div class="row"><h3 class="telefones">Telefones</h3>
		
	<p class="letras">Administração: (21) 3089-1000<br>Celular: (21) 3089-1051<br>Telefone: (21) 4003-4131</p></div></div>  
	
	</div></div>

<?php

  include "footer.php";

?>