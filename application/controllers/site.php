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
        if (isset($_GET['tabs_added'])) {
            echo '<script>window.close()</script>';
            die;
        }
        $this->load->model('Microsites', 'site');
        $this->load->model('Images', 'image');
        $this->load->model('Videos', 'video');
        $this->load->model('Reviews', 'review');
        $this->load->model('Stores', 'store');
        
        $data['site'] = current($this->site->fetchByUrl($this->uri->segment(2)));
        
        if ($data['site']) {
            
            $data['images'] = $this->image->fetchForSite($data['site']->id);
            $data['videos'] = $this->video->fetchForSite($data['site']->id);
            $data['reviews'] = $this->review->fetchForSite($data['site']->id);
            $data['stores'] = $this->store->fetchForSite($data['site']->id);
        }
        
        $this->template->build('site/show', $data);
    }
    
    public function redirect()
    {
        redirect('https://apps.facebook.com/'.$this->uri->segment(3));
    }
    
    public function video()
    {
      $response = json_encode(array('response'=>embed_youtube($this->uri->segment(3), true)));
      if ($_GET['callback']) {
        $callback = $_GET['callback'];
        echo "$callback($response)";
      }
      else echo ($response);
        die;
    }
    
    public function video_image()
    {
        echo youtube_video_image($this->uri->segment(3));
        die;
    }
}