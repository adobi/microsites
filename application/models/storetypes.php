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
}