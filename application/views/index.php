<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
$bag = mysql_connect("localhost","root","root");
mysql_select_db("weater",$bag);
mysql_query("SET NAMES UTF8");

?>

<?php 
function modConvertToTr($mod){

switch ($mod) {
		case "Fair":
			return "Açık";
			break;
			
  
		case "Rainy":
			return "Yağmurlu";
			break;
			
  
		case "Windy":
			return "Rüzgarlı";
			break;
			
  
		case "Snowy":
			return "Karlı";
			break;
			
		case "Partly Cloudy":
			return "Parçalı Bulutlu";
			break;

}}

 

function dayConvertToTr($gun){
	switch ($gun) {
		case "Monday":
			return "Pazartesi";
			break;
		case "Tuesday":
			return "Salı";
			break;
		case "Wednesday":
			return "Çarşamba";
			break;
		case "Thursday":
			return "Perşembe";
			break;
			case "Friday":
			return "Cuma";
			break;
		case "Saturday":
			return "Cumartesi";
			break;
		case "Sundey":
			return "Pazar";
			break;
		}
}



$cek = mysql_query("select * from istanbul"); 
while ($gelen = mysql_fetch_array($cek)) 
{$hava_durumu = $gelen[hava_durumu];
 $il =  $gelen[il];
 $sicaklik = $gelen[sicaklik];
 $tarih = $gelen[tarih];
}
$sicaklik = round(($sicaklik-32)/1.8);

 echo $tarih."</br>";
 echo modConvertToTr($hava_durumu)."</br>";
 echo $il." Plaka kodu"."</br>";
 echo $sicaklik." Derece"."</br>";
 echo dayConvertToTr(date('l',$tarih))." ".$gunayyil;
 

?>