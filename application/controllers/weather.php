<?php
 
class weather extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('Kontrol_lib');
		$this->load->library('Veri_lib');
		$this->load->model('weather_model');
		$this->load->library('Resim_lib');
		
	}
	
	function index(){
		$this->load->view('view');
		
	}
	
	function order()
	{
		$this->load->helper('form');
		
	}
	
	function ekle()
	{	
		$link = "http://weather.yahooapis.com/forecastrss?p=TUXX0014";
		if($this->weather_model->get_count() == 0){
			$this->weather_model->ekle($this->kontrol_lib->xmlParser($link)); 
			echo $this->db->affected_rows()."-eklendi";
		}
		else{
			echo $this->weather_model->all_count(). " kayıt var";
			
		}
		$this->load->view('view');
		

	}
	function al(){
		$this->load->model('weather_model');
		$this->output->set_content_type('application/json');
		echo json_encode($this->weather_model->get_all_weathers());
	}
	
	
	function goster(){
	
	$this->load->view('veri');
	
	}
	
	

 }

?>