<?php 

if (! defined('BASEPATH')) exit('No direct script access');

//require_once 'MY_Model.php';
class Microsites extends MY_Model 
{
    protected $_name = "im_site";
    protected $_primary = "id";
    
    public function fetchByUrl($url) 
    {
        if (!$url) {
            
            return false;
        }
        
        return $this->fetchRows(array('where'=>array('url'=>$url)));
    }  
    
    public function insertFromRemote($data)
    {
      //dump($data);
      if (!$data) return false;
      
      $insertData = array(
        'name'=>$data['name'],
        'title'=>$data['name'],
        'description'=>nl2br($data['description']),
        'url'=>$data['url'],
      );
      

      $inserted = parent::insert($insertData);
      
      if (!$inserted) {
        return json_encode(array('message'=>'Microsite not created'));
      }
      
      /**
       * insert images
       *
       */
      if ($data['images']) {
        $this->load->model('Images', 'images');
        foreach ($data['images'] as $i=>$image) {
          
          if ($image['image'] && $image['image_name'])
            $img = $this->_getImageFromUrl($image['image'], $image['image_name']);
          
          $d = array();
          $d['site_id'] = $inserted;
          $d['image'] = $img;
          $d['order'] = ($i+1);
          $d['ga_category'] = 'image';
          $d['ga_action'] = 'view';
          $d['ga_label'] = $data['name'].' - ' . $img;
          $d['ga_value'] = 1;
          
          $this->images->insert($d);
        }
      }
      
      /**
       * insert videos
       *
       */
      if ($data['videos']) {
        $this->load->model('Videos', 'videos');
        foreach ($data['videos'] as $i=>$video) {
          $d = array();
          $d['site_id'] = $inserted;
          $d['video'] = $video;
          $d['title'] = $data['name'];
          $d['order'] = ($i+1);
          $d['ga_category'] = 'video';
          $d['ga_action'] = 'play';
          $d['ga_label'] = $data['name'].' - ' . $video;
          $d['ga_value'] = 1;
          
          $this->videos->insert($d);
        }
      }
      
      /**
       * insert platforms
       */
      if ($inserted) {
        $this->load->model('Stores', 'stores');
        $this->load->model('Storetypes', 'types');
        if ($data['platforms']) {
          $p = array('site_id'=>$inserted);
          $p['ga_action'] = "Click";
          $p['ga_category'] = "Outbound link";
          $p['ga_value'] = 1;
          foreach ($data['platforms'] as $i=>$item) {
            $p['label'] = $item->name;
            $p['type_id'] = $item;
            $p['url'] = $data['urls'][$i];
            $type = $this->types->find($item);
            if ($type)
              $p['ga_label'] = $data['name']." - " . $type->name;
              
            $this->stores->insert($p);
          }
        }
      }       
     return json_encode(array('insert_id'=>$inserted, 'message'=>'Microsite created'));
    }
      
}