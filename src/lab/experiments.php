<?php
require_once("includes/startup.php");
require_once("authenticate_login.php");
loadEntity("experiments_category");
loadEntity("experiment");

$categoryCol1 = category::getContentCol(1);
$column1=array();
 foreach($categoryCol1 as $category_name)
  {	
	$experiments1 = experiment::getExperiment($category_name['category_name']);
    $category_name['experiments']=$experiments1;
	$column1[]=$category_name;
  }
NTemplate::assign("categoryCol1",$column1);


$categoryCol2 = category::getContentCol(2);
$column2=array();
 foreach($categoryCol2 as $category_name)
  {	
	$experiments1 = experiment::getExperiment($category_name['category_name']);
    $category_name['experiments']=$experiments1;
	$column2[]=$category_name;
  }
NTemplate::assign("categoryCol2",$column2);



$categoryCol3 = category::getContentCol(3);
$column3=array();
 foreach($categoryCol3 as $category_name)
  {	
	$experiments1 = experiment::getExperiment($category_name['category_name']);
    $category_name['experiments']=$experiments1;
	$column3[]=$category_name;
  }
NTemplate::assign("categoryCol3",$column3);


NTemplate::assign("page_name","experiments");
NTemplate::display('experiments.tpl');

?>