<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Resim_lib
{
	 var $CI; 
	 function Resim_lib()
	 {
	 	$this->CI =& get_instance();	
	 }
	 public function resim_ekle()
	 {		
	 	   	
	$site = "http://weather.yahooapis.com/forecastrss?p=TUXX0014";
	$icerik=file_get_contents($site);
	preg_match('<img src="(.*?)"/>',$icerik,$degisken);
	echo $degisken[1];
	
	
	}
	 
	 
 
}
?>