<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /*$this->load->model('About_model');
        $this->load->model('Contact_model');
        $this->load->model('ContactUs_model');
        $this->load->model('Events_model');
        $this->load->model('Partners_model');
        $this->load->model('Service_model');
        $this->load->model('Team_model');
        $this->load->model('Footer_model');*/
    }

    public function Home() {
        $this->load->model('Header_model');
        $data['header'] = $this->header_model->getAllHeader();
        /*$data['about'] = $this->about_model->getAllAbout();
        $data['contact'] = $this->contact_model->getAllContact();
        $data['contactus'] = $this->contactUs_model->getAllContactUs();
        $data['events'] = $this->events_model->getAllEvents();
        $data['partners'] = $this->partners_model->getAllPartners();
        $data['service'] = $this->service_model->getAllService();
        $data['team'] = $this->team_model->getAllTeam();
        $data['footer'] = $this->footer_model->getAllFooter();*/
        $this->load->view('home', $data);
    }
}