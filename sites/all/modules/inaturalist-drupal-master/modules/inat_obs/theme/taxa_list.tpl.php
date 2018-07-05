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
foreach($taxons as $id => $taxa):
?>
<div class="inat_taxa row row-<?php print($id); ?>" id="prj_<?php print($taxa['id']); ?>">
  <div class="photo">
      <img src="<?php print($taxa['photo_url']); ?>"/>
  </div> <!-- /photo -->
  <h2><a href="<?php print($base_url . '/inat/taxa/' . $taxa['id']); ?>"><?php print($taxa['common_name']['name'].' ('.$taxa['observations_count'].') '); ?></a></h2>

  <div class="description"><?php print($taxa['wikipedia_summary']); ?></div>

</div>
<?php endforeach; ?>
