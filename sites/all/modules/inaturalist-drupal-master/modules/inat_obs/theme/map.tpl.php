<?php
/**
 * iNaturalist theme for observations map
 * Copyright 2014 Projecte Ictineo SCCL (www.projecteictineo.com)
 * aGPLv3
 *
 * All data is recived in $content variable
 * the structure is like is retoruned by
 * inaturalist api
 */

/**
 * Add mapping bases
 */
//http://leafletjs.com/examples/quick-start.html
// L.tileLayer('http://{s}.tile.cloudmade.com/0adbd37bb37c4146ad38c697e204e538/997/256/{z}/{x}/{y}.png', {
?>

 <div id="map-<?php print $context; ?>" style="height: 400px;"></div>

 <script type="text/javascript">
  var map = L.map('map-<?php print $context; ?>').setView([51.505, -0.09], 13);
  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    maxZoom: 18
    }).addTo(map);
  var bounds = new Array();

<?php 
/* Add markers from php to js*/
foreach( $observations as $id => $obs) {
  if($obs['latitude'] != ''){
    //print("var popup = L.popup().setLatLng([".$obs['latitude'].",".$obs['longitude']."]).setContent('asdf').openOn(map);\n");
    if(count($obs['photos']) >= 1) {
      $popup = '<div class="photo"><img src="'.$obs['photos'][0]['small_url'].'" alt="Photo" /> </div> <h2>'.$obs['species_guess'].'</h2>';
      if(array_key_exists('place_guess',$obs)) {
        $popup .= '<div class="place">'.$obs['place_guess'].'</div>';
      }
    } else {
      $popup = '<div class="photo">No photo </div> <h2>'.$obs['species_guess'].'</h2>';
      if(array_key_exists('place_guess', $obs)) {
        $popup .= '<div class="place">'.$obs['place_guess'].'</div>';
      }
    }
    $popup = str_replace("'","",$popup);
    print("var popup = L.marker().setLatLng([".$obs['latitude'].",".$obs['longitude']."]).addTo(map).bindPopup('".$popup."');\n");
    print("bounds.push(new Array([".$obs['latitude'].",".$obs['longitude']."]));");
  }
}


?>
  map.fitBounds(bounds);
 </script>


