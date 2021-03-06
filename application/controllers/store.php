<?php 

if (! defined('BASEPATH')) exit('No direct script access');

require_once 'MY_Controller.php';

class Store extends MY_Controller 
{
    public function index() 
    {
        $data = array();
        
        $this->load->model('Stores', 'model');
        
        $data['items'] = $this->model->fetchAll();
        
        $this->template->build('/index', $data);
    }
    
    public function edit() 
    {
        $data = array();
        
        $id = $this->uri->segment(3);
        
        $site = false;
        if (is_numeric($id)) {
            $site = $this->uri->segment(5);
        } else {
            $site = $this->uri->segment(4);
        }

        $this->load->model('Microsites', 'site');

        $data['site'] = $this->site->find($site);
        
        
        $this->load->model('Storetypes', 'type');
        //$data['avaliable_stores'] = $this->type->fetchAvailableForSite($data['site']->id);
        $data['avaliable_stores'] = $this->type->fetchAll();
        
        $this->load->model('Stores', 'model');
        
        $item = false;
        if (is_numeric($id)) {
            $item = $this->model->find((int)$id);
        }
        $data['item'] = $item;
        
        
        
        $this->form_validation->set_rules('url', 'Url', 'trim|required');
        
        if (!$data['site'])
            $this->form_validation->set_rules('type_id', 'Store', 'trim|required');
        
        //dump($id); die;
        if ($this->form_validation->run()) {

            if (!isset($_POST['ga_noninteraction'])) {
                $_POST['ga_noninteraction'] = null;
            }
        
            if (is_numeric($id)) {
                
                $this->model->update($_POST, $id);
                
            } else {
                
                $_POST['site_id'] = $site;
                
                $this->model->insert($_POST);
            }
            redirect(base_url() . 'microsite/stores/'.$site);
        } else {
            
        }
        
        $this->template->set_partial('event_tracking', '_partials/event_tracking');
        
        $this->template->build('store/edit', $data);
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if ($id) {
            $this->load->model('Stores', 'model');
            
            $this->model->delete($id);
        }
        
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function update_order()
    {
        if ($_POST && isset($_POST['order'])) {
            
            $this->load->model('Stores', 'model');
            
            foreach ($_POST['order'] as $order => $id) {
                $this->model->update(array('order'=>$order), $id);
            }
        }
        
        die;
    }    
}