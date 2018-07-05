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
<div class="inat_project row" id="prj_<?php print($projects['id']); ?>">
  <div class="photo">
      <img src="<?php print($projects['icon_url']); ?>"/>
  </div> <!-- /photo -->
  <h2><a href="<?php print($base_url . '/inat/project/' . $projects['id']); ?>"><?php print($projects['title']); ?></a></h2>
  <div class="description"><?php print($projects['description']); ?></div>

</div>
