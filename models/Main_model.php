<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main_model extends CI_Model
{
	public function GetGiraffes($limit = FALSE,$offset = FALSE)
	{
		if($limit){
			$this->db->limit($limit,$offset);
		}
		$this->db->select('heroes.*');
		$this->db->from('heroes');
		$data = $this->db->get();
		return($data->result());
	} //end of GetGiraffes

	public function GetGiraffesNames()
	{

		$this->db->select('heroes.h_name');
		$this->db->from('heroes');
		$data = $this->db->get();
		return($data->result());
	} //end of GetGiraffesNames

	public function GetGiraffesWork()
	{

		$this->db->select('heroes.type_of_activism1','heroes.type_of_activism2','heroes.type_of_activism3');
		$this->db->from('heroes');
		$data = $this->db->get();
		return($data->result());
	} //end of GetGiraffesNames
	
	public function findSingleGiraffe($single){

		$this->db->select('heroes.*');
		$this->db->from('heroes');
		$this->db->where('id',$single);
		$data = $this->db->get();
		return($data->result());

	} // end findSingleGiraffe

	public function searchForGiraffe($data,$limit = FALSE,$offset = FALSE){

		if($limit){

			$this->db->limit($limit,$offset);
		
		}
		$search_for = array();
		
		foreach($data as $key => $value){
			if(!empty($value) && $value != 'Select'){
				array_push($search_for, $key);
				
			}else{
				// do nothing
			}
		}

		$counter = 1;
		$filter = 'SELECT * FROM heroes WHERE ';

	foreach($data as $key => $search){
		if(!empty($search) && $search != 'Select'){
			if($counter < count($search_for)){

				if($key == 'type_of_activism1' || $key == 'global_area_1'){

					$filter .= '(' . $key . '="' . $search . '" OR ';

				}else if($key == 'type_of_activism2' || $key == 'global_area_2' || $key == 'country_2' || $key == 'state_1' || $key == 'country_1'){

					$filter .= $key . '="' . $search . '" OR ';

				}else if($key == 'type_of_activism3'){

					$filter .= $key . '="' . $search . '") AND ';
					
				}else if($key == 'state_2'){

					$filter .= $key . '="' . $search . '") AND ';

				}
				else
				{

					$filter .= $key . '="' . $search . '" AND ';

				}

				$counter = $counter + 1;

			}else if($counter == 3 && $key == 'type_of_activism3'){

				$filter .= $key . '="' . $search . '")';
			
			}else{
				$filter .= $key . '="' . $search . '"';
			}
		}else{
			// do nothing
		}
		
	} // end of foreach($data as $search)

		$result = $this->db->query($filter);
	  

		return($result->result());

	} // end searchForGiraffe



} // end of User_model



?>