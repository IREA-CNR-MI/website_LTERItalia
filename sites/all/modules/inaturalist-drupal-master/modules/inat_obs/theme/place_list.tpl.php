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
$prev_url = $base_url . '/inat/places/';
$next_url = $prev_url;
if($current_page > 1) {
  $prev_url .= $current_page - 1;
} else {
  $prev_url .= '1';
}
$next_url .= $current_page + 1;
?>
 <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
 <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
<?php
foreach($places as $id => $place):
?>
<div class="inat_place row row-<?php print($id); ?>" id="prj_<?php print($place['id']); ?>">
  <div class="photo">
    <div id="map-<?php print($place['id']); ?>" style="width: 150px; height: 150px;"></div>
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

</div>
<?php endforeach; ?>
<div class="pager-wrapper">
  <span id="prev-link" class="pager link"><a href="<?php print $prev_url; ?>"><?php print t('Prev'); ?></a></span>
  <span id="next-link" class="pager link"><a href="<?php print $next_url; ?>"><?php print t('Next'); ?></a></span>
</div>
