<?php
/**
 * iNaturalist theme for observations
 * Copyright 2014 Projecte Ictineo SCCL (www.projecteictineo.com)
 * aGPLv3
 *
 * All data is recived in $content variable
 * the structure is like is retoruned by
 * inaturalist api
 */
global $base_url;
?>
   <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
   <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>

<div class="inat_observation_single" id="obs_<?php print($observation['id']); ?>">
  <figure class="photo_single">
    <?php if (array_key_exists('photos_count', $observation) && $observation['photos_count'] == 0): ?>
      <span class="no_photo"><?php print(t('No photo')); ?></span>
    <?php else: ?>
      <div class="cycle-slideshow  img-wrapper img-wrapper-<?php print $id; ?>"
      data-cycle-slides="> figure"
      data-cycle-fx=fade
      >
        <?php foreach($observation['observation_photos'] as $id => $img): ?>
          <figure>
            <img src="<?php print($img['photo']['small_url']); ?>" alt="<?php print($observation['description']); ?>" class="img-<?php print $id; ?>"/>
            <figurecaption><?php print($img['photo']['attribution']); ?></figurecaption>
          </figure>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </figure> <!-- /photo -->
 <div class="localitzation">
   <div id="map" style=""></div>

   <script type="text/javascript">
    var map = L.map('map').setView([51.505, -0.09], 13);
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      maxZoom: 18,
      zoom: 10
      }).addTo(map);
    var bounds = new Array();
    <?php print("var popup = L.marker().setLatLng([".$observation['latitude'].",".$observation['longitude']."]).addTo(map); ");
    print("bounds.push(new Array([".$observation['latitude'].",".$observation['longitude']."]));"); ?>
    map.panTo(new L.LatLng(<?php print $observation['latitude'] . ", " . $observation['longitude']; ?>));
  </script>

  <h2><a href="<?php print($base_url . '/inat/observation/' . $observation['id']); ?>"><?php print($observation['species_guess']); ?></a></h2>
   
  <div class="description"><?php print($observation['description']); ?></div>
<?php if(isset($observation['user_id'])): ?>
  <div class="observer"><span class="label"><?php print t('Observer: '); ?></span><a href="<?php print $base_url . '/inat/user/' . $observation['user_id'];?>"><?php print($observation['user_login']); ?></a></div>
<?php endif; ?>
<?php if(isset($observation['observed_on'])): ?> 
 <div class="date"><?php 
    $d = DateTime::createFromFormat('Y-m-d', $observation['observed_on'])->format('l j F Y');
    print('<span class="label">'.t('Date observed: ').$d.'</span>');
?></div>
<?php endif; ?>

<?php if(isset($observation['place_guess'])): ?> 
      <div class="place"> <span class="label">
        <?php print(t('Place: ').'</span>'.$observation['place_guess']); ?> 
        (<span class="latitude"><?php print(t('Lat: ').$observation['latitude']); ?></span> 
         <span class="longitude"><?php print(t('Lon: ').$observation['longitude']); ?></span>)
      </div>
<?php endif; ?>

<?php if(isset($observation['positional_accuracy'])): ?> 
  <div class="accuracy"><span class="label"><?php print(t('Accuracy: ').'</span>'. $observation['positional_accuracy']); ?>m</div> 
<?php endif; ?>
  <?php if(variable_get('inat_base_project','') == '' && isset($observation['project_observations'][0])): ?>
  <?php // remove project info because is obvius and not needed if project is set for the plugin ?>
    <div class="project"><span class="label"><?php print(t('Project: ')); ?></span>  <a href="<?php print $base_url . '/inat/project/' . $observation['project_observations'][0]['project_id'] ;?>"><?php print($observation['project_observations'][0]['project']['title']); ?></a></div>
  <?php endif; ?>
  
<?php if(isset($observation['taxon_id'])): ?> 
  <div class="taxon"><span class=label> <?php print(t('Taxon: ')); ?></span>  <a href="<?php print $base_url . '/inat/taxa/' . $observation['taxon_id'] ;?>"><?php print($observation['species_guess']); ?></a></div>
<?php endif; ?>
</div>

</div>
