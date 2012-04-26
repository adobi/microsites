<?php 

if (! defined('BASEPATH')) exit('No direct script access');

require_once 'MY_Controller.php';

class Auth extends MY_Controller 
{
    public function index()
    {
        redirect(base_url() . 'auth/login');
    }
    
    public function login() 
    {
        if ($this->session->userdata('logged_in')) {
            
            redirect(base_url().'microsite');
        }
        
        $data = array();
        
       
      if ($_POST && md5($_POST['password']) === md5('a')) {
			
  			$this->session->set_userdata('logged_in', true);
  			
  			$this->load->model('Storetypes', 'types');
  			
  			$this->types->loadFromRemote();
  			
  			redirect(base_url() . 'microsite');
  		}
          
        $this->template->build('login/index', $data);
    }
    
    public function auto_login()
    {
      $redirect = $_GET['r'];

  		$this->load->model('Storetypes', 'types');
  		
  		$this->types->loadFromRemote();
      
      if (isset($redirect)) {

        $this->session->set_userdata('logged_in', true);
        redirect($redirect);
      }
      
      redirect(base_url() . 'microsite');
    }    
    
    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        
        $this->session->sess_destroy();
        
        redirect(base_url() . 'auth/login');
    }
}