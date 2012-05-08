<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Storetypes extends MY_Model 
{
    protected $_name = "im_store_type";
    protected $_primary = "id";
    
    public function fetchAvailableForSite($site) 
    {
        if (!$site) {
            
            return false;
        }
        
        return $this->execute('select * from im_store_type where id not in (select type_id from im_store where site_id = '.$site.')');
    }
    
    public function initFromApi()
    {
      
      $data = $this->invictus->setUri(INVICTUS_API_URI)->setAction('platforms')->get(true);
      
      if (!$data) return false;
      
      $local = $this->fetchAll();
      foreach ($local as $item) {
        $this->_deleteImage($item, 'logo', true);
      }
      $this->truncate();

      foreach ($data as $item) {
        $item['url'] = $this->sanitizer->sanitize_title_with_dashes($item['name']);
      }
      
      foreach ($data as $item) {
        $d = array(
          'id'=>$item['id'],
          'name'=>$item['name'],
          'logo'=>$this->_getImageFromUrl($item['image'], $item['image_name'])
          );
        
        $this->insert($d);
      }
    }
}