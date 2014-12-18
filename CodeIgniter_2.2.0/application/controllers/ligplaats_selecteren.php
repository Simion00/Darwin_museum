<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Ligplaats_selecteren extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('trip_model','',TRUE);
		}
		
		function index()
		{
			$data['table'] = $this->ligplaatsen_table();
			$this->load->view('ligplaats_selecteren_view', $data);
		}
		
		function ligplaatsen_table()
		{
			$result_ligplaatsen = $this->trip_model->all_ligplaatsen();
			$result_artefacten = $this->trip_model->all_artefacten();
			
			if($result_ligplaatsen)
			{
				$table = "";
				foreach($result_ligplaatsen as $row1)
				{
					$table .= "<tr>
						<td>".$row1->naam."</td>
						<td><img src='../assets/images/".$row1->afbeelding."' alt='".$row1->afbeelding."' /></td>
						<td>".$row1->omschrijving."</td>
						<td>";
					foreach($result_artefacten as $row2)
					{
						if($row2->locatie == $row1->id)
						{
							$table .= $row2->id." ";
						}
					}
					$table .= "</td>
						<td>
							<a href='ligplaats_overzicht/index/".$row1->id."'>
								<img src='../assets/images/zoom.png' alt='zoom' />
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