<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Ligplaats_overzicht extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('trip_model','',TRUE);
		}
		
		function index($id)
		{
			$data['table'] = $this->getArtefacten($id);
			$this->load->view('ligplaats_overzicht_view', $data);
		}
		
		function getArtefacten($id)
		{
			$result = $this->trip_model->get_ligplaats_artefacten($id);
			
			if($result)
			{
				$table = "";
				foreach($result as $row)
				{
					$table .= "<tr>
						<td>".$row->id."</td>
						<td>".$row->naam."</td>
						<td>".$row->omschrijving."</td>
						<td>".$row->geologische_perioden."</td>
						<td>".$row->aanschafdatum."</td>
						<td><img src='./../../../assets/images/".$row->afbeelding."' alt='edit'id='afbeelding' /></td>
						<td>".$row->zaal."</td>
						<td>".$row->locatie."</td>
					</tr>";
				}
				return $table;
			}
			else
			{
				return "table error please teport this as soon as posible";
			}
		}
	}
?>