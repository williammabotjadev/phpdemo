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
    <nav class="nav" style="background-color: lightgreen">
        <div class="nav-item" style="display: flex; flex-direction: row; align-items: center">
            <a href="/"><img src="./static/img/edinestates-logo.png" alt="logo" width="10%" /></a>
            <h3>Welcome to EdinEstates API</h3>
            <h6 style="margin-left: 20px"> A modern real estate solution</h6>
        </div>
    </nav>
    <div class="table-responsive" style="display: flex; flex-direction: column; width: 100%; justify-content: center; align-items: center">
    <br />
    
    <!--<?php 
        $count = 0;
        $file = fopen('./static/dummy_data.csv', 'r');
        echo "<html><body><center><table class='table table-hover table-success' border='1'>\n\n";
        echo "<br />";
        while(($row = fgetcsv($file, 1000, ',')) !== false)
        {
            echo "<tr>";
            foreach($row as $item) 
            {   
                if ($count > 7)
                {
                    echo "<td>".$item."</td>";
                } else {
                    echo "<th class='col'>".$item."</th>";
                    $count++;
                }
               
            }

            echo "</tr>";
          
        }
        echo "\n</table></center></body></html>";
        fclose($file);
    ?>-->
    </div>
</body>