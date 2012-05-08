<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Stores extends MY_Model 
{
    protected $_name = "im_store";
    protected $_primary = "id";
    
    public function fetchForSite($site) 
    {
        if (!$site) {
            
            return false;
        }
        
        return $this->execute("select st.logo, s.* from im_store s join im_store_type st on s.type_id = st.id where s.site_id=$site order by `order` asc");
    }
    
    public function find($id) 
    {
        return current($this->execute('select st.logo, s.* from im_store s join im_store_type st on s.type_id = st.id where s.id = ' . $id));
    }
}