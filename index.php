<?php 
    require "config.php";
    require "./classes/index.php";

?>
<head>
    <title>PHP Demo | Hard Coded Solution</title>
</head>
<body>
    <?php
        $file = fopen('dummy_data.csv', 'r');

        while(($row = fgetcsv($file, 1000, ',')) !== false)
        {
            print_r($row);
        }
        fclose($file);
    ?>
</body>