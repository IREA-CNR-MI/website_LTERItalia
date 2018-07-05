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
<div class="inat_project row" id="prj_<?php print($user['id']); ?>">
  <div class="photo">
      <img src="<?php print($user['medium_user_icon_url']); ?>"/>
  </div> <!-- /photo -->
  <h2><a href="<?php print($base_url . '/inat/user/' . $user['id']); ?>"><?php print($user['name']); ?></a></h2>
  <div class="description"><?php print($user['description']); ?></div>

</div>
