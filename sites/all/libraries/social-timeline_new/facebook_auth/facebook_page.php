<?php


/*************************************/
/* Introduce your credentials */
/*
1 - If you are not registered as a developer in Facebook, you will have to register in https://developers.facebook.com/, go to Apps -> Register as a Developer
2 - Once you are registered go to https://developers.facebook.com/ Apps -> Create a new App and fill the form
3 - If you created the App succesfully, you will see the new App ID and Secret keys in the dashboard
*/

#$app_id 	= 'YOUR_APP_ID';
#$app_secret = 'YOUR_APP_SECRET';
$app_id = '354041184795856';
$app_secret = 'c8870ac85707d7e006c754fbb60ac957';

/***************************************/

error_reporting(0);


if(empty($_GET['page_id'])) 
	die('The FB Page ID is required');
	
$screen_name_data = $_GET['page_id'];
$count = $_GET['count'];

if($count == "" || $count <= 0) 
	$count = 20;

require_once( 'Facebook/facebook.php' );

$facebook = new FacebookGraphV2(array(
  'appId'  => $app_id,
  'secret' => $app_secret,
));

$response = $facebook->api('/'.$screen_name_data.'/posts', 'get', array('limit' => $count));
$graph_arr = $response['data'];
/*echo '<pre>';
print_r($graph_arr);
echo '</pre>';
*/
$count = 0;
$json_decoded = array();

$json_decoded['responseData']['feed']['link'] = "https://facebook.com/".$screen_name_data;
$json_decoded['responseData']['feed']['entries'] = array();

if(is_array($graph_arr)) {
	foreach($graph_arr as $data)
	{
		$picture = $data['picture'];
		
		if(!isset($data['object_id'])) {
			$pic_id = explode("_", $picture);	
			$data['object_id'] = $pic_id[1];
		}
		
		if(strpos($picture, 'safe_image.php') === false && is_numeric($data['object_id'])) {
			$picture = 'http://graph.facebook.com/'.$data['object_id'].'/picture?type=normal';
		}

		if($data['message'] == '' || $picture == '' || $count >= $_GET['count']) {
			continue;
		}
		/*$picture = str_replace(array("s130x130/", "p130x130/", "p118x90/"), '', $data['picture']);
		$picture = str_replace('/v/t1.0-0/', '/t1.0-0/', $picture);
		$picture = str_replace('/v/t1.0-9/', '/t1.0-9/', $picture);
		$picture = str_replace('/v/l/t1.0-0/', '/t1.0-0/', $picture);
		$picture = str_replace('/v/l/t1.0-9/', '/t1.0-9/', $picture);
		$picture = str_replace('/192x/', '/736x/', $picture);*/
		
		$json_decoded['responseData']['feed']['entries'][$count]['link'] = $data['link'];
		$json_decoded['responseData']['feed']['entries'][$count]['contentSnippet'] = $data['message'];
		$json_decoded['responseData']['feed']['entries'][$count]['content'] = $data['message'];
		$json_decoded['responseData']['feed']['entries'][$count]['title'] = $data['message'];
		$json_decoded['responseData']['feed']['entries'][$count]['thumbnail'] = $picture;
		$json_decoded['responseData']['feed']['entries'][$count]['author'] = $data['from']['name'];
		@$json_decoded['responseData']['feed']['entries'][$count]['publishedDate'] = date("D, d M Y H:i:s O", strtotime($data['created_time']));
		
		$count++;
	}
}

header("Content-Type: application/json; charset=UTF-8");
echo json_encode($json_decoded);
?>
