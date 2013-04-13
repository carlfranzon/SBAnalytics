<?php

define('ga_email','YOUR USERNAME');
define('ga_password','YOUR PASSWORD');
define('ga_profile_id',$_GET['profile']);
define('ga_title',$_GET['title']);

require 'class_gapi.php';

$ga = new gapi(ga_email,ga_password);

$ga->requestReportData(ga_profile_id,array('Date'),array('visitors','pageviews'),array('Date'),null,date("Y-m-d", mktime(0,0,0,date("m"),date("d")-6,date("Y"))),date("Y-m-d"));


$visitorarray = array();
$pviewsarray = array();

foreach($ga->getResults() as $result2){
  $res = array("title" => date("l", strtotime($result2)),
			"value" => $result2->getVisitors());
	$res2 = array("title" => date("l", strtotime($result2)),
			"value" => $result2->getPageviews());

	array_push($visitorarray, $res);
	array_push($pviewsarray, $res2);
}


$jsonarray = array("graph" => array("title" => ga_title . " Analytics",
						"total" => false,
						"type" => "line",
						"datasequences" => array(array("title" => "Visitors","color" => "lightGray","datapoints" => $visitorarray),
											array("title" => "Pageviews","color" => "yellow","datapoints" => $pviewsarray)
											)
						)
			);
echo json_encode($jsonarray);

?>
