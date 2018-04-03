<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainForms extends CI_Controller {

	/**
	 * Handles forms that are user facing this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __Construct(){
		parent::__Construct();
		$this->load->helper('form');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->library('form_validation', 'pagination');
		$this->load->database(); 
		$this->load->model('Main_model');
		
	}    

	public function index()
	{
		$this->load->view('welcome_message');
	} // end of index();

	public function searchGiraffe($offset = 0)
	{
			// pagination configuration
		$config['base_url'] = base_url() . 'MainForms/searchGiraffe/';
		$config['total_rows'] = $this->db->count_all('heroes');
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		// Init pagination
		$this->pagination->initialize($config);

			$GiraffeName = $_POST['name'];
			$GiraffeWork = $_POST['FieldsOfWork'];
			$GiraffeLocation = $_POST['location'];
			$GiraffeGender = $_POST['gender'];
			$GiraffeAge = $_POST['age'];
			$GiraffeOccupation = $_POST['occupation'];
				
			$data = array('h_name' => $GiraffeName,
							'type_of_activism1' => $GiraffeWork,
							'type_of_activism2' => $GiraffeWork,
							'type_of_activism3' => $GiraffeWork,
							'global_area_1' => $GiraffeLocation,
							'global_area_2' => $GiraffeLocation,
							'state_1' => $GiraffeLocation,
							'state_2' => $GiraffeLocation,
							'gender' => $GiraffeGender,
							'age' => $GiraffeAge,
							'occupation' => $GiraffeOccupation); // end of array

		$results = $this->Main_model->searchForGiraffe($data,$config['per_page'],$offset);
		//$count = $this->Main_model->countForGiraffe($data);

		if($results != null)
		{
			$data['g_heroes'] = $results;
			//$this->girafferesult($results,$count);
			$this->load->view('header');
			$this->load->view('heroes/find-giraffe',$data);
			$this->load->view('footer');

		} //end if
		else
		{
			$data['g_heroes'] = 'error';
			$this->load->view('header');
			$this->load->view('heroes/find-giraffe',$data);
			$this->load->view('footer');

		}

		

		
	}  // end of findGiraffe()







	public function testingQuery(){

			$GiraffeName = $_POST['name'];
			$GiraffeWork = $_POST['FieldsOfWork'];
			$GiraffeLocation = $_POST['location'];
			$GiraffeGender = $_POST['gender'];
			$GiraffeAge = $_POST['age'];
			$GiraffeOccupation = $_POST['occupation'];
				
			$data = array('h_name' => $GiraffeName,
							'type_of_activism1' => $GiraffeWork,
							'type_of_activism2' => $GiraffeWork,
							'type_of_activism3' => $GiraffeWork,
							'global_area_1' => $GiraffeLocation,
							'global_area_2' => $GiraffeLocation,
							'country_1' =>  $GiraffeLocation,
							'country_2' =>  $GiraffeLocation,
							'state_1' => $GiraffeLocation,
							'state_2' => $GiraffeLocation,
							'gender' => $GiraffeGender,
							'age' => $GiraffeAge,
							'occupation' => $GiraffeOccupation); // end of array

		
		$search_values = array();
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


			$data['result'] = $filter;
			$this->load->view('header');
			$this->load->view('heroes/test',$data);
			$this->load->view('footer');


	}


	public function girafferesult($TheResults,$rescount)
	{
		// pagination configuration
		$config['base_url'] = base_url() . 'MainForms/girafferesult/';
		$config['total_rows'] = $rescount;
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		// Init pagination
		$this->pagination->initialize($config);

		

		$data['g_heroes'] = $TheResults;

		$this->load->view('header');
		$this->load->view('heroes/search-results',$data);
		$this->load->view('footer');

		

	} // end of girafferesult

}  //End of class MainForms