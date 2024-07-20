<?php
include("database.php");
echo "Recent Assets Data";
echo "<table>";
echo "
            <th>sno</th>
            <th>Name</th>
            <th>Brand 
           </th>
            <th>Current Location 
            </th>
        <tbody id='result'>";
$query = "SELECT * FROM asset_detail ORDER BY sno DESC LIMIT 4;";
$q_run = $dataobj->query($query);
$c_query = $dataobj->query("SELECT COUNT(*) FROM asset_detail ");
$count = $c_query->fetchAll()[0][0];
settype($count, "integer");
while ($x = $q_run->fetchAll()) {
    for ($d = 0; $d < 4; $d++) {
        echo "<tr>";
        for ($i = 0; $i < 4; $i++) {
            echo "<td>" . $x[$d][$i] . "</td>";
        }
        echo "</tr>";
    }
    echo "<tbody id='result'></tbody></table>";
}
echo "Recent Locations Data";
echo "<table>";
echo "
            <th>sno</th>
            <th>Location Name</th>    
        <tbody id='result'>";
$query = "SELECT * FROM location_detail ORDER BY sno DESC LIMIT 2;";
$q_run = $dataobj->query($query);
$c_query = $dataobj->query("SELECT COUNT(*) FROM location_detail ");
$count = $c_query->fetchAll()[0][0];
settype($count, "integer");
while ($x = $q_run->fetchAll()) {
    for ($d = 0; $d < 2; $d++) {
        echo "<tr>";
        for ($i = 0; $i < 2; $i++) {
            echo "<td>" . $x[$d][$i] . "</td>";
        }
        echo "</tr>";
    }
    echo "<tbody id='result'></tbody></table>";
}
?>
</body>
</html>