<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Trip extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('trip_model','',TRUE);
		}
		
		function index()
		{
			$data['links'] = "<li><a href='homepage'>homepage</a></li>";
			$data['links'] .= "<li><a href='login'>login</a></li>";
			$data['links'] .= "<li><a href='collections'>collections</a></li>";
			$data['table1'] = $this->ship_table();
			$data['table2'] = $this->ligplaatsen_table();
			$data['table3'] = $this->artefacten_table();
			$this->load->view('trip_view', $data);
		}
		
		function ship_table()
		{
			$result = $this->trip_model->ship();
			
			if($result)
			{
				$table = "";
				foreach($result as $row)
				{
					$table .= "<tr>
						<td>".$row->naam."</td>
						<td><img src='../assets/images/".$row->afbeelding."' alt='edit'id='afbeelding' /></td>
						<td>".$row->lengte."</td>
						<td>".$row->breedte."</td>
						<td>".$row->diepgang."</td>
						<td>".$row->omschrijving."</td>
						<td>".$row->kapitein."</td>
					</tr>";
				}
				return $table;
			}
			else
			{
				return "table error please teport this in the faq as soon as posible";
			}
		}
		
		function ligplaatsen_table()
		{
			$result_ligplaatsen = $this->trip_model->all_ligplaatsen();
			$result_artefacten = $this->trip_model->all_artefacten();
			
			if($result_ligplaatsen && $result_artefacten)
			{
				$table = "";
				foreach($result_ligplaatsen as $row1)
				{
					$table .= "<tr>
						<td>".$row1->naam."</td>
						<td><img src='../assets/images/".$row1->afbeelding."' alt='edit'id='afbeelding' /></td>
						<td>".$row1->omschrijving."</td>";
					foreach($result_artefacten as $row2)
					{
						if($row2->locatie == $row1->id)
						{
							$table .= "<td>".$row2->id."</td>";
						}
					}
					$table .= "</tr>";
				}
				return $table;
			}
			else
			{
				return "table error please teport this in the faq as soon as posible";
			}
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
						<td>".$row->id."</td>
						<td>".$row->naam."</td>
						<td>".$row->omschrijving."</td>
						<td>".$row->geologische_perioden."</td>
						<td>".$row->aanschafdatum."</td>
						<td><img src='../assets/images/".$row->afbeelding."' alt='edit'id='afbeelding' /></td>
						<td>".$row->zaal."</td>
						<td>".$row->locatie."</td>
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