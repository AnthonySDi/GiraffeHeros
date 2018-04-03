<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminForms extends CI_Controller {
  function __Construct(){
    parent::__Construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database();
    $this->load->model('Admin_model');
    }   


    public function addGiraffes(){
        $this->form_validation->set_rules('GiraffeName', 'Name Field', 'required');

            //$this->form_validation->set_message('is_unique', 'This %s is already exits');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('admin/header');
                $this->load->view('admin/add-giraffe');
            }
            else
            {
                $giraffeName = $_POST['GiraffeName'];
                $giraffeTA1 = $_POST['type_of_activism1'];
                $giraffeTA2 = $_POST['type_of_activism2'];
                $giraffeTA3 = $_POST['type_of_activism3'];
                $giraffeGA1 = $_POST['global_area_1'];
                $giraffeGA2 = $_POST['global_area_2'];
                $giraffeC1 = $_POST['country_1'];
                $giraffeC2 = $_POST['country_2'];
                $giraffeS1 = $_POST['state_1'];
                $giraffeS2 = $_POST['state_2'];
                $giraffeAge = $_POST['age'];
                $giraffeGender = $_POST['gender'];
                $giraffeHWC = $_POST['home_when_commended'];
                $giraffeHN = $_POST['home_now'];
                $giraffeURL = $_POST['url'];
                $giraffeDeceased = $_POST['deceased'];
                $giraffeYC = $_POST['year_commended'];
                $giraffeWL = $_POST['work_location'];
                $giraffeIMG = $_POST['image'];
                $giraffeBlurb = $_POST['blurb'];
                $giraffeStory = $_POST['story'];

                
                $data = array('id' => 'null',
                              'h_name' => $giraffeName,
                              'type_of_activism1' => $giraffeTA1,
                              'type_of_activism2' => $giraffeTA2,
                              'type_of_activism3' => $giraffeTA3,
                              'global_area_1' => $giraffeGA1,
                              'global_area_2' => $giraffeGA2,
                              'country_1' => $giraffeC1,
                              'country_2' => $giraffeC2,
                              'state_1' => $giraffeS1,
                              'state_2' => $giraffeS2,
                              'age' => $giraffeAge,
                              'gender' => $giraffeGender,
                              'home_when_commended' => $giraffeHWC,
                              'home_now' => $giraffeHN,
                              'url' => $giraffeURL,
                              'deceased' => $giraffeDeceased,
                              'year_commended' => $giraffeYC,
                              'work_location' => $giraffeWL,
                              'image' => $giraffeIMG,
                              'blurb' => $giraffeBlurb,
                              'story' => $giraffeStory);

                if($this->Admin_model->insertGiraffe($data)){
                    $this->session->set_flashdata('GiraffeAdded','<div class="success"><p>Giraffe successfully added!</p></div>');
                    $data['AdminName'] = $this->session->userdata('AdminName');
                    $this->load->view('admin/header');
                    $this->load->view('admin/dashboard',$data);

                } //end if($this->Admin_model->insertGiraffe($data))
                else
                { // incase insert fails
                    $this->session->set_flashdata('GiraffeAdded','<div class="problem"><p> Problem occurred when tring to add Giraffe!</p></div>');
                    $data['AdminName'] = $this->session->userdata('AdminName');
                    $this->load->view('admin/header');
                    $this->load->view('admin/dashboard',$data);
        
                }

            }

        }// end of addgiraffes

    public function editgiraffes(){
        
        $giraffeName = $_POST['name'];

        $result = $this->Admin_model->getGiraffeByName($giraffeName);
        if(!empty($result)){

            $giraffeNames = $this->Admin_model->GetGNForDash();
            
            $data['showform'] = 1;
            $data['giraffeinfo'] = $result;
            $data['gnames'] = $giraffeNames;
            $this->load->view('admin/header');
            $this->load->view('admin/edit-giraffe',$data);
        }
        else
        { // this means it wasn't found


        }
    }


    public function updateGiraffes(){
        $this->form_validation->set_rules('GiraffeName', 'Name Field', 'required');

            //$this->form_validation->set_message('is_unique', 'This %s is already exits');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('admin/header');
                $this->load->view('admin/add-giraffe');
            }
            else
            {
                $giraffeid = $_POST['GiraffeId'];
                $giraffeName = $_POST['GiraffeName'];
                $giraffeTA1 = $_POST['type_of_activism1'];
                $giraffeTA2 = $_POST['type_of_activism2'];
                $giraffeTA3 = $_POST['type_of_activism3'];
                $giraffeGA1 = $_POST['global_area_1'];
                $giraffeGA2 = $_POST['global_area_2'];
                $giraffeC1 = $_POST['country_1'];
                $giraffeC2 = $_POST['country_2'];
                $giraffeS1 = $_POST['state_1'];
                $giraffeS2 = $_POST['state_2'];
                $giraffeAge = $_POST['age'];
                $giraffeGender = $_POST['gender'];
                $giraffeHWC = $_POST['home_when_commended'];
                $giraffeHN = $_POST['home_now'];
                $giraffeURL = $_POST['url'];
                $giraffeDeceased = $_POST['deceased'];
                $giraffeYC = $_POST['year_commended'];
                $giraffeWL = $_POST['work_location'];
                $giraffeIMG = $_POST['image'];
                $giraffeBlurb = $_POST['blurb'];
                $giraffeStory = $_POST['story'];

                
                $data = array('id' => $giraffeid,
                              'h_name' => $giraffeName,
                              'type_of_activism1' => $giraffeTA1,
                              'type_of_activism2' => $giraffeTA2,
                              'type_of_activism3' => $giraffeTA3,
                              'global_area_1' => $giraffeGA1,
                              'global_area_2' => $giraffeGA2,
                              'country_1' => $giraffeC1,
                              'country_2' => $giraffeC2,
                              'state_1' => $giraffeS1,
                              'state_2' => $giraffeS2,
                              'age' => $giraffeAge,
                              'gender' => $giraffeGender,
                              'home_when_commended' => $giraffeHWC,
                              'home_now' => $giraffeHN,
                              'url' => $giraffeURL,
                              'deceased' => $giraffeDeceased,
                              'year_commended' => $giraffeYC,
                              'work_location' => $giraffeWL,
                              'image' => $giraffeIMG,
                              'blurb' => $giraffeBlurb,
                              'story' => $giraffeStory);

                if($this->Admin_model->updateGiraffe($data,$giraffeid)){
                    $this->session->set_flashdata('GiraffeAdded','<div class="success"><p>Giraffe update was successful!</p></div>');
                    $data['AdminName'] = $this->session->userdata('AdminName');
                    $this->load->view('admin/header');
                    $this->load->view('admin/dashboard',$data);

                } //end if($this->Admin_model->insertGiraffe($data))
                else
                { // incase insert fails
                    $this->session->set_flashdata('GiraffeAdded','<div class="problem"><p> Problem occurred when trying to update Giraffe!</p></div>');
                    $data['AdminName'] = $this->session->userdata('AdminName');
                    $this->load->view('admin/header');
                    $this->load->view('admin/dashboard',$data);
        
                }

            }







    } // end public function updateGiraffes(){


} // end of the class 
?>