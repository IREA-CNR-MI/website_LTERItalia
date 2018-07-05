<?php
/**
 * iNaturalist theme for observations
 * Copyright 2014 Projecte Ictineo SCCL (www.projecteictineo.com)
 * aGPLv3
 *
 * All data is recived in $content variable
 * the structure is like the retoruned by
 * inaturalist api
 */
global $base_url;
?>
 <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
 <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
<div class="inat_project row" id="prj_<?php print($place['id']); ?>">
  <div class="photo">
    <div id="map-<?php print($place['id']); ?>" style="width: 400px; height: 400px;"></div>
    <script type="text/javascript">
      var map = L.map('map-<?php print($place['id']); ?>').setView([51.505, -0.09], 13);
      L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        maxZoom: 18
        }).addTo(map);
      var bounds = new Array();
      bounds.push(new Array([<?php print($place['nelat']);?>, <?php print($place['nelng']); ?>]));
      bounds.push(new Array([<?php print($place['swlat']);?>, <?php print($place['swlng']); ?>]));
      L.marker().setLatLng([<?php print($place['latitude']); ?>, <?php print($place['longitude']);?>]).addTo(map);
      map.fitBounds(bounds);
    </script>

  </div> <!-- /photo -->
  <h2><a href="<?php print($base_url . '/inat/place/' . $place['id']); ?>"><?php print($place['display_name']); ?></a></h2>
  <?php if($place['parent_id'] != ''): ?><a href="<?php print($base_url . '/inat/place/' . $place['parent_id']); ?>"><?php print(t('Parent')); ?></a><?php endif;?>

</div>
