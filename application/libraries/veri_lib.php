<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Veri_lib
{
	 var $CI; 
	 function Veri_lib()
	 {
	 	$this->CI =& get_instance();	
	 }
	 public function verikontrol()
	 {		
	 	   	$this->CI->load->helper('date');

			$gtarih = date("Y-m-d");
			$this->db->from('istanbul')->where(tarih,'$gtarih');
			$sonuc = $this->db->count_all();
			
			echo $sonuc;
			exit;
	 }
 
}
?>