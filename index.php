<?php 
    require "config.php";
    require "./classes/index.php";

?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="./static/style.css" rel="stylesheet" />
    <title>PHP Demo | Hard Coded Solution</title>
</head>
<body>
    <?php 
        $count = 0;
        $file = fopen('./static/dummy_data.csv', 'r');
        echo "<table border='1' width='50%'>";
        echo "<br />";
        while(($row = fgetcsv($file, 1000, ',')) !== false)
        {
            
            foreach($row as $item) 
            {   
                if ($count > 0)
                {
                    echo "<tr>";
                    echo $item;
                    echo "\t";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                    echo $item;
                    echo "\t";
                    echo "</tr>";
                    $count++;
                }
               
            }

            echo "<br />";
          
        }
        echo "</table>";
        fclose($file);
    ?>
</body>