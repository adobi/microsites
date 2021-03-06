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
        
        $data['items'] = $this->sites->fetchAll(array('order'=>array('by'=>'name', 'dest'=>'asc')));
        
        $this->template->build('microsite/index', $data);
    }
    
    public function edit()
    {
        $data = array();
        
        $id = $this->uri->segment(3);
        
        $this->load->model('Microsites', 'sites');
        
        $data['site'] = false;
        if ($id) {
            $data['site'] = $this->sites->find($id);
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
            $this->_deleteSiteImages($id);
            $this->_deleteImage($id, true);
        }
        
        redirect('microsite');        
    }
    
    public function images()
    {
        $data = array();
        
        $id = $this->uri->segment(3);
        
        $this->load->model('Images', 'model');
        $this->load->model('Microsites', 'site');
        
        $data['site'] = $this->site->find($id);
        
        $data['items'] = $this->model->fetchForSite($id);
        
        $this->template->build('microsite/images', $data);
    }
    
    public function videos() 
    {
        $data = array();
        
        $id = $this->uri->segment(3);
        
        $this->load->model('Videos', 'model');
        $this->load->model('Microsites', 'site');
        
        $this->form_validation->set_rules('video', 'Embed code', 'trim|required');
        
        if ($this->form_validation->run()) {
            
            $_POST['site_id'] = $id;
            
            if (isset($_POST['id']) && $_POST['id']) {
                
                $id = $_POST['id'];
                unset($_POST['id']);
                
                $this->model->update($_POST, $id);
            } else {
                
                $this->model->insert($_POST);
            }
            
            redirect($_SERVER['HTTP_REFERER']);
        }
        
        $data['site'] = $this->site->find($id);
        
        $data['items'] = $this->model->fetchForSite($id);
        
        $this->template->build('microsite/videos', $data);        
    }
    
    public function reviews() 
    {
        $data = array();
        
        $id = $this->uri->segment(3);
        
        $this->load->model('Reviews', 'model');
        $this->load->model('Microsites', 'site');
        
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('url', 'url', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        
        if ($this->form_validation->run()) {
            
            $_POST['site_id'] = $id;
            
            if (isset($_POST['id']) && $_POST['id']) {
                
                $id = $_POST['id'];
                unset($_POST['id']);
                
                $this->model->update($_POST, $id);
            } else {
                
                $this->model->insert($_POST);
            }
            
            redirect($_SERVER['HTTP_REFERER']);
        }
        
        $data['site'] = $this->site->find($id);
        
        $data['items'] = $this->model->fetchForSite($id);
        
        $this->template->build('microsite/reviews', $data);        
        
    }
    
    public function upload_image() 
    {
	  	if ($this->upload->do_upload()) {
	  	    
	  	    $this->load->config('upload');
	  	    
	  	    $data = $this->upload->data();

            $config['image_library'] = 'gd2';
            $config['source_image'] = $this->config->item('upload_path') . $data['file_name'];
            //$config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = $this->config->item('image_width');
            $config['height'] = $this->config->item('image_height');
            $config['new_image'] = $this->config->item('upload_path_base') .$data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $config['image_library'] = 'gd2';
            $config['source_image'] = $this->config->item('upload_path') . $data['file_name'];
            $config['width'] = $this->config->item('thumb_width');
            $config['height'] = $this->config->item('thumb_height');
            $config['new_image'] = $this->config->item('upload_path_base') . 'thumbs/'.$data['file_name'];
            //$this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            
            @unlink($this->config->item('upload_path') . $data['file_name']);
            
            $this->load->model('Images', 'model');
            
            $inserted = $this->model->insert(array(
                'site_id'=>$this->uri->segment(3),
                'image'=>$data['file_name']
            ));
            
	  	    
            $info->name = $data['file_name'];
            $info->size = $data['file_size'];
            $info->type = $data['file_type'];
            $info->url = base_url() . 'uploads/' .$data['file_name'];
            $info->thumbnail_url = base_url() . 'uploads/thumbs/' .$data['file_name'];
            $info->delete_url = base_url().'microsite/delete/'.$inserted;
            $info->delete_type = 'DELETE';	 
            
            if ($this->input->is_ajax_request()) {
                echo json_encode(array($info));
            } 
	  	}
	  	
        die;
    }
    
    public function delete_site_image()
    {
        $id = $this->uri->segment(3);
        
        $this->_deleteSiteImage($id);
        
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function delete_video() 
    {
        $id = $this->uri->segment(3);
        
        $this->load->model('Videos', 'model');
        
        $this->model->delete($id);
        
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function stores() 
    {
        $id = $this->uri->segment(3);
        $data = array();
        
        
        $this->load->model('Microsites', 'site');
        $this->load->model('Stores', 'store');
        
        $data['site'] = $this->site->find($id);
        
        $data['stores'] = $this->store->fetchForSite($id);
        
        
                
        $this->template->build('microsite/stores', $data);
    }
    
    public function delete_store()
    {
        $id = $this->uri->segment(3);
        
        $this->load->model('Stores', 'model');
        
        $this->model->delete($id);
        
        redirect($_SERVER['HTTP_REFERER']);        
    }
    
    private function _deleteSiteImage($id)
    {
      $this->load->model('Images', 'model');
      if (is_numeric($id)) {
          // delete by id, from db too
          
          $item = $this->model->find($id);
          
          $file = $item->image;
          
          $this->model->delete($id);
          
      } else {
          // delete only the file
          
          $file = $id;
      }
      
      $this->load->config('upload');
      
      if ($file) {
          
          @unlink($this->config->item('upload_path_base') . $file);
          @unlink($this->config->item('upload_path_base') . 'thumbs/' . $file);
          @unlink($this->config->item('upload_path') . $file);
          
      }
    }
    
    private function _deleteSiteImages($site) 
    {
      $this->load->model('Images', 'model');
      
      $images =  $this->model->fetchForSite($site);
      
      if (!$images) return false;
      
      foreach ($images as $image) {
        $this->_deleteSiteImage($image->id);
      }
    }
    
    private function _deleteImage($id, $withRecord = false) 
    {
        $this->load->model('Microsites', 'sites');
        
        $item = $this->sites->find($id);
        
        //dump($id); die;
        
        if ($item && $item->background_image) {
            $this->load->config('upload');
            
            @unlink($this->config->item('upload_path_base') . $item->background_image);
        }
        
        if (!$withRecord) {
            
            $this->sites->update(array('background_image'=>null), $id);
        }
        
        return $withRecord ? $this->sites->delete($id) : true;
    }
}