<?php 

if (! defined('BASEPATH')) exit('No direct script access');

//require_once 'MY_Model.php';
class Microsites extends MY_Model 
{
    protected $_name = "site";
    protected $_primary = "id";
    
    public function fetchByUrl($url) 
    {
        if (!$url) {
            
            return false;
        }
        
        return $this->fetchRows(array('where'=>array('url'=>$url)));
    }    
}