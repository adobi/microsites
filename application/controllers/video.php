<?php 

if (! defined('BASEPATH')) exit('No direct script access');

require_once 'MY_Controller.php';

class Video extends MY_Controller 
{
    public function index() 
    {
        $data = array();
        
        $this->load->model('Videos', 'model');
        
        $data['items'] = $this->model->fetchAll();
        
        $this->template->build('/index', $data);
    }
    
    public function edit() 
    {
        $data = array();
        
        $id = $this->uri->segment(3);
        
        $this->load->model('Videos', 'model');

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
        
        $data['site'] = $site;        
        $data['item'] = $item;
        
        $this->form_validation->set_rules('video', 'Embed code', 'trim|required');
        
        if ($this->form_validation->run()) {

           
            if (!isset($_POST['ga_noninteraction'])) {
                $_POST['ga_noninteraction'] = null;
            }
            
            if ($id && is_numeric($id)) {
                $this->model->update($_POST, $id);
            } else {
                $_POST['site_id'] = $site;
                $this->model->insert($_POST);
            }
        
            redirect(base_url() . 'microsite/videos/'. $site);
        } else {
            if ($_POST) {
                
                //redirect($_SERVER['HTTP_REFERER']);
            }
        }
        
        $this->template->set_partial('event_tracking', '_partials/event_tracking');
        
        $this->template->build('video/edit', $data);
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
    
    public function analytics()
    {
        $data = array();

        $id = $this->uri->segment(3);
        
        $this->load->model('Videos', 'model');
        
        $item = $this->model->find($id);
        
        $data['item'] = $item;
        
        if ($_POST) {
            
            if (!isset($_POST['ga_noninteraction'])) {
                $_POST['ga_noninteraction'] = null;
            }            
            
            $this->model->update($_POST, $id);
            
            redirect(base_url() . 'microsite/videos/' . $item->site_id);
        }
        
        $this->template->set_partial('event_tracking', '_partials/event_tracking');
        
        $this->template->build('video/analytics', $data);        
    }
    
    public function update_order()
    {
        if ($_POST && isset($_POST['order'])) {
            
            $this->load->model('Videos', 'model');
            
            foreach ($_POST['order'] as $order => $id) {
                $this->model->update(array('order'=>$order), $id);
            }
        }
        
        die;
    }    
}