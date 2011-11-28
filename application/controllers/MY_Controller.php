<?php 

if (! defined('BASEPATH')) exit('No direct script access');

require_once(BASEPATH.'core/Controller'.EXT);

class MY_Controller extends CI_Controller 
{
    //php 5 constructor
    public function __construct() 
    {

        parent::__construct();
    }
    
    public function udid_exists() 
    {
        $this->load->model("Registrations", 'registration');
        
        if ($this->registration->udidExists($_POST['udid'])) {
            
            $this->form_validation->set_message('udid_exists', 'UDID already exists');
            
            return false;
        }
        
        return true;
    }    
}
