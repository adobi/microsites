<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Storetypes extends MY_Model 
{
    protected $_name = "store_type";
    protected $_primary = "id";
    
    public function fetchAvailableForSite($site) 
    {
        if (!$site) {
            
            return false;
        }
        
        return $this->execute('select * from store_type where id not in (select type_id from store where site_id = '.$site.')');
    }
    
    public function loadFromRemote()
    {
      $platforms = json_decode(file_get_contents(INVICTUS_API_PLAFTORMS_URL));
      
      if (!$platforms) return false;
      
      $local = $this->fetchAll();
      foreach ($local as $item) {
        $this->_deleteImage($item, 'logo', true);
      }
      
      //$this->truncate();
      
      foreach ($platforms as $item) {
        $data = array(
          'id'=>$item->id,
          'name'=>$item->name,
          'logo'=>$this->_getImageFromUrl($item->image, $item->image_name)
          );
        
        $this->insert($data);
      }
    }
}