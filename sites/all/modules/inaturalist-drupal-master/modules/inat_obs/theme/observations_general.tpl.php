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
/**
 * Add mapping bases
 */
foreach( $observations as $id => $obs) {
  print($obs);
}
$prev_url = $base_url . '/inat/'.$base_path.'/';
$next_url = $prev_url;
if($current_page > 1) {
  $prev_url .= $current_page - 1;
} else {
  $prev_url .= '1';
}
$next_url .= $current_page + 1;

?>
<div class="clearfix"> </div>
<div class="pager-wrapper">
  <span id="prev-link" class="pager link"><a href="<?php print $prev_url; ?>"><?php print t('Prev'); ?></a></span>
  <span id="next-link" class="pager link"><a href="<?php print $next_url; ?>"><?php print t('Next'); ?></a></span>
</div>




