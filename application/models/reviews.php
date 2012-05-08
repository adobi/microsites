<?php 

if (! defined('BASEPATH')) exit('No direct script access');

//require_once 'MY_Model.php';
class Reviews extends MY_Model 
{
    protected $_name = "im_review";
    protected $_primary = "id";
    
    public function fetchForSite($id) 
    {
        if (!$id) {
            
            return false;
        }
        
        return $this->fetchRows(array('where'=>array('site_id'=>$id), 'order'=>array('by'=>'order', 'dest'=>'asc')));
    }
}