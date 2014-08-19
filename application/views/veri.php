<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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

<div id="txt" style="border: 1px #000000 solid; margin: 
3px; padding: 5px; width: 190px; height: 110px;">

<table border="1">
<tr>
<td><span>Derece:   </span></td><td><span id="sicaklik"></span></td></tr>
<tr><td><span>Hava Durumu:   </span></td><td><span id="hava_durumu"></span></td></tr>
<tr><td><span>Tarih:   </span></td><td><span id="tarih"></span></td></tr>
<tr><td><span>il:   </span></td><td><span id="il"></span></td></tr>
</tr>


</table>
</div>






</body>
</html>