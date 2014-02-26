<?php
function document_root(){
	$data = $_SERVER['DOCUMENT_ROOT']."/crudsystem/";
	echo $data;
}
function load_css($file){
	$data = "\n";
	foreach($file as $names => $specs){
		$data .= "<link href='".base_url()."property/css/".$specs.".css' rel='stylesheet'>\n";
	}
	echo $data;
}
function load_js($file){
	$data = "\n";
	foreach($file as $names => $specs){
		$data .= "<script type='text/javascript' src='".base_url()."property/js/".$specs.".js'></script>\n";
	}
	echo $data;
}
function load_tpl($file){
	foreach($file as $names => $specs){
		include $_SERVER['DOCUMENT_ROOT']."/crudsystem/application/views/_inc/".$specs.".php";
	}
}
?>