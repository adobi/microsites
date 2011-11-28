<?php  

    $config['upload_path'] = dirname($_SERVER['SCRIPT_FILENAME']) . '/uploads/';
    //echo $config['upload_path'];
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '100';
    $config['max_width'] = '1024';
    $config['max_height'] = '768';

?>