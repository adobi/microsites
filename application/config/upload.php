<?php  

    $config['upload_path'] = dirname($_SERVER['SCRIPT_FILENAME']) . '/uploads/';
    //echo $config['upload_path'];
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '1000';
    $config['max_width'] = '10240';
    $config['max_height'] = '7680';

?>