<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Artefacten_muteren_form extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('trip_model','',TRUE);
		}
		
		function index($id)
		{
			$this->load->helper(array('form'));
			$pre_data = $this->getArtefacten($id);
			$data['id'] = $id;
			$data['naam'] = $pre_data['naam'];
			$data['omschrijving'] = $pre_data['omschrijving'];
			$data['geologische_perioden'] = $pre_data['geologische_perioden'];
			$data['aanschafdatum'] = $pre_data['aanschafdatum'];
			$data['afbeelding'] = $pre_data['afbeelding'];
			$data['zaal'] = $pre_data['zaal'];
			$data['locatie'] = $pre_data['locatie'];
			$this->load->view('artefacten_muteren_form_view', $data);
		}
		
		function getArtefacten($id)
		{
			$result = $this->trip_model->get_artefacten($id);
			
			if($result)
			{
				$auto_array = array();
				foreach($result as $row)
				{
					$array = array(
						'naam' => $row->naam, 
						'omschrijving' => $row->omschrijving, 
						'geologische_perioden' => $row->geologische_perioden, 
						'aanschafdatum' => $row->aanschafdatum, 
						'afbeelding' => $row->afbeelding, 
						'zaal' => $row->zaal, 
						'locatie' => $row->locatie
					);
				}
				return $array;
			}
			else
			{
				return "table error please teport this as soon as posible";
			}
		}
		
		function remove($id)
		{
			$result = $this->trip_model->remove_artefacten($id);
			
			if($result)
			{
				redirect('artefacten_muteren', 'refresh');
			}
			else
			{
				return "remove error please teport this as soon as posible";
			}
		}
	}
?>