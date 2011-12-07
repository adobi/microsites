<?php 

if (! defined('BASEPATH')) exit('No direct script access');

require_once 'MY_Controller.php';

class Storetype extends MY_Controller 
{
    public function index() 
    {
        $data = array();
        
        $this->load->model('Storetypes', 'model');
        
        $data['items'] = $this->model->fetchAll();
        
        $this->template->build('storetype/index', $data);
    }
    
    public function edit() 
    {
        $data = array();
        
        $id = $this->uri->segment(3);
        
        $this->load->model('Storetypes', 'model');
        
        $item = false;
        if ($id) {
            $item = $this->model->find((int)$id);
        }
        $data['item'] = $item;
        
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        //$this->form_validation->set_rules('logo',"press_logo","file_required");
        
        if ($this->form_validation->run()) {
        
            if ($this->upload->do_upload('logo')) {
                
                if ($id) {
                    
                    $this->_deleteImage($id);
                }
                
                $_POST['logo'] = $this->upload->file_name;
            }             
            
            if ($id) {
                $this->model->update($_POST, $id);
            } else {
                $this->model->insert($_POST);
            }
            redirect(base_url() . 'storetype');
        } 
        
        $this->template->build('storetype/edit', $data);
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if ($id) {
            $this->load->model('', 'model');
            
            $this->model->delete($id);
        }
        
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    private function _deleteImage($id, $withRecord = false) 
    {
        $this->load->model('Storetype', 'model');
        
        $item = $this->model->find($id);
        
        if ($item && $item->logo) {
            $this->load->config('upload');
            
            @unlink($this->config->item('upload_path') . $item->logo);
        }
        
        if (!$withRecord) {
            
            $this->model->update(array('logo'=>null), $id);
        }
        
        return $withRecord ? $this->model->delete($id) : true;
    }    
}