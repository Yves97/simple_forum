<?php
    
    function render_array($array){
        echo '<pre>';
            print_r($array);
        echo '</pre>';
    }

    function secure_data($data){
        $data = htmlspecialchars($data);
        $data = stripcslashes($data);
        $data = trim($data);
        return $data;
    }
