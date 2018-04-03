<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Main pages use by the user forms are for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __Construct(){
		parent::__Construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation', 'pagination');
		$this->load->database(); 
		$this->load->model('Main_model');
	}    


	public function index()
	{
		$this->load->view('header');
		$this->load->view('heroes/giraffe-heroes');
		$this->load->view('footer');
	}

	public function findGiraffe($offset = 0)
	{
		// pagination configuration
		$config['base_url'] = base_url() . 'Main/findGiraffe/';
		$config['total_rows'] = $this->db->count_all('heroes');
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		// Init pagination
		$this->pagination->initialize($config);

		$giraffes = $this->Main_model->GetGiraffes($config['per_page'],$offset);
		$giraffeNames = $this->Main_model->GetGiraffesNames();


		if($giraffes != null)
		{
			$data['g_heroes'] = $giraffes;
			$data['names'] = $giraffeNames;
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
	} // end findGiraffe

	public function viewGiraffe(){
		$giraffe = $this->uri->segment(2);
		$singleGiraffe = $this->Main_model->findSingleGiraffe($giraffe);

		if($singleGiraffe != null)
		{
			$data['a_giraffe'] = $singleGiraffe;
			$this->load->view('header');
			$this->load->view('heroes/view-giraffe',$data);
			$this->load->view('footer');

		} //end if
		else
		{
			$data['a_giraffe'] = 'error';
			$this->load->view('header');
			$this->load->view('heroes/view-giraffe',$data);
			$this->load->view('footer');

		}



	}//end viewGiraffe()








}