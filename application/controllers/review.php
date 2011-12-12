<?php 

if (! defined('BASEPATH')) exit('No direct script access');

require_once 'MY_Controller.php';

class Review extends MY_Controller 
{
    public function index() 
    {
        $data = array();
        
        $this->load->model('Reviews', 'model');
        
        $data['items'] = $this->model->fetchAll();
        
        $this->template->build('/index', $data);
    }
    
    public function edit() 
    {
        $data = array();
        
        $id = $this->uri->segment(3);
        
        $this->load->model('Reviews', 'model');
        
        $item = false; $site = false;
        if ($id && is_numeric($id)) {
            $item = $this->model->find((int)$id);
            
            if (is_numeric($this->uri->segment(5))) {
                $site = $this->uri->segment(5);
            }
        } else {
            if (is_numeric($this->uri->segment(4))) {
                $site = $this->uri->segment(4);
            }
        }
        
        $data['item'] = $item;
        $data['site'] = $site;
        
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('url', 'Url', 'trim|required');
        //$this->form_validation->set_rules('rate', 'Rate', 'trim|required');
        $this->form_validation->set_rules('press', 'Press', 'trim|required');
        
        if ($this->form_validation->run()) {
            //dump($_FILES); die;
            if ($this->upload->do_upload('press_logo')) {
                
                if ($id && is_numeric($id)) {
                    
                    $this->_deleteImage($id);
                }
                
                $_POST['press_logo'] = $this->upload->file_name;
            }  
            
            if (!isset($_POST['ga_noninteraction'])) {
                $_POST['ga_noninteraction'] = null;
            }
            
            if ($id && is_numeric($id)) {
                $this->model->update($_POST, $id);
            } else {
                $_POST['site_id'] = $site;
                $this->model->insert($_POST);
            }
            redirect(base_url() . 'microsite/reviews/'. $site);
        } else {
            if ($_POST) {
                
                //redirect($_SERVER['HTTP_REFERER']);
            }
        }
        
        $this->template->set_partial('event_tracking', '_partials/event_tracking');
        
        $this->template->build('review/edit', $data);
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if ($id) {
            $this->load->model('Reviews', 'model');
            
            $this->_deleteImage($id, true);
        }
        
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function delete_image() 
    {
        $id = $this->uri->segment(3);
        
        if ($id) {
            
            $this->_deleteImage($id);
        }
        
        redirect($_SERVER['HTTP_REFERER']);
    }    
    
    private function _deleteImage($id, $withRecord = false) 
    {
        $this->load->model('Reviews', 'model');
        
        $item = $this->model->find($id);
        
        if ($item && $item->press_logo) {
            $this->load->config('upload');
            
            @unlink($this->config->item('upload_path_base') . $item->press_logo);
        }
        
        if (!$withRecord) {
            
            $this->model->update(array('press_logo'=>null), $id);
        }
        
        return $withRecord ? $this->model->delete($id) : true;
    }   
    
    
    public function update_order()
    {
        if ($_POST && isset($_POST['order'])) {
            
            $this->load->model('Reviews', 'model');
            
            foreach ($_POST['order'] as $order => $id) {
                $this->model->update(array('order'=>$order), $id);
            }
        }
        
        die;
    }     
}