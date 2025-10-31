<?php
    require_once "settings.php";
    $dbconn = @mysqli_connect($host,$user,$pwd,$sql_db);
    if ($dbconn){
        $query="SELECT*FROM cars";
        $result =mysqli_query($dbconn,$query);
        if($result && mysqli_num_rows($result) > 0){
            echo "<table border='1'>";
            echo "<tr>
                <th>Car ID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Price</th>
                <th>Year of Manufacture</th>
            </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['car_id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['make']). "</td>";
                echo "<td>" . htmlspecialchars($row['model']). "</td>";
                echo "<td>" . htmlspecialchars($row['price']). "</td>";
                echo "<td>" . htmlspecialchars($row['yom']). "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }else{
            echo "<p>There are no cars to display.</p>";
        }
        mysqli_close($dbconn);
    }else {
        echo "<p>Unable to connect to the db.</p>";
    }
?>