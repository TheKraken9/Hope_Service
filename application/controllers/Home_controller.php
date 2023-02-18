<?php

class Home_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('header_model');
        $this->load->model('about_model');
        $this->load->model('contact_model');
        $this->load->model('contactUs_model');
        $this->load->model('events_model');
        $this->load->model('partners_model');
        $this->load->model('service_model');
        $this->load->model('team_model');
        $this->load->model('footer_model');
    }

    public function Home() {
        $data['header'] = $this->header_model->getAllHeader();
        $data['about'] = $this->about_model->getAllAbout();
        $data['contact'] = $this->contact_model->getAllContact();
        $data['contactus'] = $this->contactUs_model->getAllContactUs();
        $data['events'] = $this->events_model->getAllEvents();
        $data['partners'] = $this->partners_model->getAllPartners();
        $data['service'] = $this->service_model->getAllService();
        $data['team'] = $this->team_model->getAllTeam();
        $data['footer'] = $this->footer_model->getAllFooter();
        $this->load->view('home', $data);
    }
}