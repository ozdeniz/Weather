<?php include( "header.php" );?>

<div id="txt" style="border: 1px #000000 solid; margin: 
3px; padding: 5px; width: 300px; height: 150px;margin:0 auto;background-color:#dccddc">
<table style="border-type:solid;width:300px;">
<tr><td><span><b>Derece: </b>  </span></td><td><span id="sicaklik"></span></td>
<td rowspan="4"><img src="<?php $this->resim_lib->resim_ekle();?>"\></td>
</tr>
<tr><td><span><b>Hava Durumu: </b>  </span></td><td><span id="hava_durumu"></span></td></tr>
<tr><td><span><b>Tarih: </b>  </span></td><td><span id="tarih"></span></td></tr>
<tr><td><span><b>il: </b>  </span></td><td><span id="il"></span></td>
</tr>
</table>
</div>
<?php include( "footer.php" );?>