<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$title?></title>
</head>
 
<body>
<?php
foreach($data as $row){
?>

<?php foreach($orders as $row){ ?>
<table border="1">
<tr><td>


<?php echo $row->hava_durumu;?></td>
<td>
<?php echo $row->sicaklik;?></td>
<td>
<?php echo $row->plaka;?></td>
}
?>
</body>
</html>