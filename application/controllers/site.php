<?php 

if (! defined('BASEPATH')) exit('No direct script access');

require_once 'MY_Controller.php';

class Site extends MY_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        
        $this->template->set_layout('site');
    }
    
    public function show()
    {
        $data = array();
        
        $this->load->model('Microsites', 'site');
        $this->load->model('Images', 'image');
        $this->load->model('Videos', 'video');
        $this->load->model('Reviews', 'review');
        
        $data['site'] = current($this->site->fetchByUrl($this->uri->segment(2)));
        
        $this->template->build('site/show', $data);
    }
}