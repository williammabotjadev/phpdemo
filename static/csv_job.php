<?php

    $file = fopen('dummy_data.csv', 'r');

    while(($row == fgetcsv($file)) !== false)
    {
        print_r($row);
    }
    fclose($file);


?>