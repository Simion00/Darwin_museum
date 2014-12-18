<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Floor3 extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('darwin','',TRUE);
		}
		
		function index()
		{
			$data['links'] = "<li><a href='homepage'>homepage</a></li>";
			$data['links'] .= "<li><a href='login'>login</a></li>";
			$data['table'] = $this->artefacten_table();
			$this->load->view('floor3_view', $data);
		}
		
		function artefacten_table()
		{
			$result = $this->darwin->all_artefacten_floor3();
			
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