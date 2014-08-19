<?php
class weather_model extends CI_Model
{
	 function __construct()
     {
         parent::__construct();
         $this->load->database();
		 $this->load->helper('date');
		 $this->load->helper('form');
		 $this->load->library('Kontrol_lib');
	 
     }
	 
	function get_count()
	{
	$gtarih = (string)date("Y-m-d");
	$data = $this->db->from('istanbul')->where('tarih',$gtarih);
	$q = $this->db->get(); 
	return $q->num_rows();
	}
	
	function all_count()
	{
	$data = $this->db->from('istanbul');
	$say = $this->db->get(); 
	return $say->num_rows();
	}
	
	function get_all_weathers()
	{
	$query = $this->db->from('istanbul')->where('tarih',(string)date("Y-m-d"));
	return $query->get()->result();
	}
	
	function ekle($data)
	{
	$this->db->insert('istanbul', $data); 
	}
	
	
	function getAddData($today)
	{
	$text = (string)($today[0]->attributes()->text); 
	$plaka = ($today[0]->attributes()->code);
	$sicaklik =($today[0]->attributes()->temp);
	$gtarih = date("Y-m-d");
	$returnData = array(
		'hava_durumu'=>$this->kontrol_lib->modConvertToTr($text),
		'il'=>$plaka,
		'sicaklik'=>($sicaklik-32)/1.8,
		'tarih' =>$gtarih
					   );
	return $returnData;
	}


}
?>
