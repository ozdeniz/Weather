<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script>
$(document).ready(function(){

        $.ajax({
       setInterval(function(){
    window.location.reload(true);
}, 2000);
	   
	  });});
	  
	  
</script>

<script>
$(document).ready(function(){

        $.ajax({
            type: "POST",
            url: "http://localhost/mvc/index.php/weather/al",
            dataType: 'json', 
            data: {}, 

            success:function(tdata)
            {
				$('#sicaklik').html(tdata[0].sicaklik);
				$('#hava_durumu').html(tdata[0].hava_durumu);
				$('#tarih').html(tdata[0].tarih);
				$('#il').html(tdata[0].il);


            }
       

	   });

});
</script>
<title></title>
</head>
 
<body>