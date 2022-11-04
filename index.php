<?php 
    require "config.php";
    require "./classes/index.php";

?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="./static/style.css" rel="stylesheet" />
    <link href="./static/img/edinestates-icon.png" rel="icon shortcut-icon" />
    <title>EdinEstates | A Modern Real Estate Solution</title>
</head>
<body>
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center">
    <br />
    <h3>Welcome to EdinEstates API</h3>
    <h6> A modern real estate solution</h6>
    <?php 
        $count = 0;
        $file = fopen('./static/dummy_data.csv', 'r');
        echo "<html><body><center><table border='1'>\n\n";
        echo "<br />";
        while(($row = fgetcsv($file, 1000, ',')) !== false)
        {
            echo "<tr>";
            foreach($row as $item) 
            {   
                if ($count > 0)
                {
                    echo "<td>".$item."</td>";
                } else {
                    echo "<th>".$item."</th>";
                    $count++;
                }
               
            }

            echo "</tr>";
          
        }
        echo "\n</table></center></body></html>";
        fclose($file);
    ?>
    </div>
</body>