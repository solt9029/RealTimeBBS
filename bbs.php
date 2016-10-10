<?php
if (isset($_GET['mode'])){
	switch ($_GET['mode']){
		case 'display':
		break;
		case 'check':
		$previous=file_get_contents("bbs.log");
		$current=file_get_contents("bbs.log");
		while($current===$previous){
			$current=file_get_contents("bbs.log");
			sleep(1);
		}
		break;
		case 'add':
		$input=file_get_contents("bbs.log")."<div>".$_POST["data"]."</div>";
		file_put_contents("bbs.log",$input);
		break;
	}
	echo file_get_contents("bbs.log");
}