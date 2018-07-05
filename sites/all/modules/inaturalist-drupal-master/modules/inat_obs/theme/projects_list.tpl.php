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
    <?php if (is_null($projects['icon_url'])): ?>  
      <?php print('<span class="no_photo"> <img src="'.$base_url.'/sites/all/modules/inat/modules/inat_obs/img/default.png"></img></span>'); ?>
    <?php else: ?>   
      <img src="<?php print($projects['icon_url']); ?>"/>
    <?php endif ?>
 </div> <!-- /photo -->
    <h2><a href="<?php print($base_url . '/inat/project/' . $projects['id']); ?>"><?php print($projects['title']); ?></a></h2>
    <div class="description"><?php print($projects['description']); ?></div>
 



</div>
