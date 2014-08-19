
<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Kontrol_lib
{
	 var $CI; 
	 function Kontrol_lib()
	 {
	 	$this->CI =& get_instance();//ana class d���ndan i�lem yapmak i�in $CI =& get_instance(); sat�r�n� yaz�p $CI de�i�kenini $this gibi kullanabiliyoruz.
				
	 }
	 public function modConvertToTr($mod)
	{
		switch ($mod) 
		{
			case "Fair":
				return "Acik";
				break;
				
	  
			case "Rainy":
				return "Yagmurlu";
				break;
				
	  
			case "Windy":
				return "R�zgarli";
				break;
				
	  
			case "Snowy":
				return "Karli";
				break;
				
			case "Partly Cloudy":
				return "Parcali Bulutlu";
				break;
				
			case "Partly Cloudy/Windy":
				return "Parcali Bulutlu";
				break;

		}
	}
	public function xmlParser($link){
		
		$xml = simplexml_load_file($link);
		$today = $xml->channel->item->xpath('yweather:condition');
		return $this->CI->weather_model->getAddData($today);
	}



 
}
?>