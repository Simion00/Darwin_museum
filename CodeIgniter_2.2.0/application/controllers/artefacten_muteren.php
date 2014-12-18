<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Artefacten_muteren extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('trip_model','',TRUE);
		}
		
		function index()
		{
			$data['table'] = $this->artefacten_table();
			$this->load->view('artefacten_muteren_view', $data);
		}
		
		function artefacten_table()
		{
			$result = $this->trip_model->all_artefacten();
			
			if($result)
			{
				$table = "";
				foreach($result as $row)
				{
					$table .= "<tr>
						<td>".$row->naam."</td>
						<td>".$row->omschrijving."</td>
						<td>".$row->geologische_perioden."</td>
						<td>".$row->aanschafdatum."</td>
						<td>".$row->zaal."</td>
						<td>".$row->locatie."</td>
						<td>
							<a href='artefacten_muteren_form/index/".$row->id."'>
								<img src='../assets/images/edit.png' alt='edit' />
							</a>
						</td>
						<td>
							<a href='artefacten_muteren_form/remove/".$row->id."'>
								<img src='../assets/images/drop.png' alt='drop' />
							</a>
						</td>
					</tr>";
				}
				return $table;
			}
			else
			{
				return "table error please teport this in the faq as soon as posible";
			}
		}
	}
?>