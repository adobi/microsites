<?php 

if (! defined('BASEPATH')) exit('No direct script access');

require_once 'MY_Controller.php';

class Microsite extends MY_Controller 
{
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data = array();
        
        $this->load->model('Microsites', 'sites');
        
        $data['items'] = $this->sites->fetchAll();
        
        $this->template->build('microsite/index', $data);
    }
    
    public function edit()
    {
        $data = array();
        
        $id = $this->uri->segment(3);
        
        $this->load->model('Microsites', 'sites');
        
        $data['item'] = false;
        if ($id) {
            $data['item'] = $this->sites->find($id);
        }
        
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('url', 'Url', 'trim|required');
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        
        if ($this->form_validation->run()) {
            
            if ($this->upload->do_upload('background_image')) {
                
                if ($id) {
                    
                    $this->_deleteImage($id);
                }
                
                $_POST['background_image'] = $this->upload->file_name;
                
            }
            if ($id) {
                $this->sites->update($_POST, $id);
            } else {
                
                $this->sites->insert($_POST);
            }
            
            redirect(base_url() . 'microsite');
        }
        
        $this->template->build('microsite/edit', $data);
    }
    
    public function delete_image() 
    {
        $id = $this->uri->segment(3);
        
        if ($id) {
            
            $this->_deleteImage($id);
        }
        
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if ($id) {
            
            $this->_deleteImage($id, true);
        }
        
        redirect($_SERVER['HTTP_REFERER']);        
    }
    
    private function _deleteImage($id, $withRecord = false) 
    {
        $this->load->model('Microsites', 'model');
        
        $item = $this->model->find($id);
        
        $this->load->config('upload');
        
        if ($item && $item->background_image) {
            unlink($this->config->item('upload_path') . $item->background_image);
        }
        
        if (!$withRecord) {
            
            $this->model->update(array('background_image'=>null), $id);
        }
        
        return $withRecord ? $this->model->delete($id) : true;
    }
}