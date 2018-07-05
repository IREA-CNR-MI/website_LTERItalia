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

$query = explode('/',current_path());
$isfeatured = FALSE;
$has_prev = FALSE;
if(!isset($query[2])) {
  $query[2] = 'featured';
}elseif(is_numeric($query[2])) {
  //$query[3] = $query[2];
  $query[2] = 'featured';
}elseif($query[2] == 'featured') {
  $query[2] = 'all';
  $isfeatured = TRUE;
}else{
  $query[2] = 'featured';
}
$featured_url = url(implode('/',$query));
$query = explode('/',current_path());
$query_prev = $query;
$query_next = $query_prev;
if(!isset($query[2]) || isset($query[2]) && $query[2] == 0) {
  $query_next[2] = '2';
  $query_prev[2] = '1';
}elseif(is_numeric($query[2])) {
  $query_next[2] += 1;
  $query_prev[2] -= 1;
  $has_prev = TRUE;
}elseif(!isset($query[3]) || isset($query[3]) && $query[3] == 0){
  $query_next[3] = '2';
  $query_prev[3] = '1';
}elseif(is_numeric($query[3])){
  $query_next[3] += 1;
  $query_prev[3] -= 1;
  $has_prev = TRUE;
}
$next_url = url(implode('/',$query_next));
$prev_url = url(implode('/',$query_prev));

if($isfeatured) {
  print('<a href="'.$featured_url.'">'.t('Show all').'</a>');
} else {
  print('<a href="'.$featured_url.'">'.t('Show featured').'</a>');
}
//print('<h4>'.t('Showing page:').' </h4>');
foreach( $projects as $id => $obs) {
  print($obs);
}
print('<div class="pager"> <a href="'.$prev_url.'"> prev </a><a href="'.$next_url.'"> next </a> </div>');

?>


