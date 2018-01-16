<?php 
    $this->load->view('comments/create'); 
    echo $this->markdown->parse_file($md_url);
?>