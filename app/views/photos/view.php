<h2><?php echo $title; ?></h2>
<?php
    foreach ($photos as $photo) {

        echo $photo['id'];
        echo $photo['series'];
        echo $photo['filename'];
        echo $photo['num'];
        echo $photo['caption'];
        echo $photo['description'];
        
        if ($photo['series'] && $photo['series'] != '' && $photo['series'] != NULL) {
            //$series_url = $photo['series'].'/';
            $source_img_path = '/'.'photos/'.$photo['series'].'/'.$photo['filename'];
        } else if ($photo['series'] == '' || $photo['series' == NULL]) {
            $source_img_path = '/'.'photos/'.$photo['filename'];
        } else {
            echo 'Error: Cannot find source image.';
        };
        echo $source_img_path;
        
        $config['create_thumb'] = TRUE;
        $config['source_image'] = $source_img_path;
        $config['new_image'] = 	$source_img_path;
        $config['width'] = 570;
        $config['height'] = 425;

        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        if ( ! $this->image_lib->resize())
        {
            echo $this->image_lib->display_errors();
        };
    };
?>