<?php
include("database.php");
echo "<table>";
echo "
            <th>sno</th>
            <th>Name</th>
            <th>Brand 
           </th>
            <th>Current Location  
            <select name='one' onchange='selectdata(this.options[this.selectedIndex].value)'>
            <option disabled selected>Select an option</option>
            <option value='Chennai'>Chennai</option>
            <option value='Banglore'>Banglore</option>
            </select>
            </th>
        <tbody id='result'>";
$query = "SELECT * FROM asset_detail";
$q_run = $dataobj->query($query);
$c_query = $dataobj->query("SELECT COUNT(*) FROM asset_detail");
$count = $c_query->fetchAll()[0][0];
settype($count, "integer");
while ($x = $q_run->fetchAll()) {
    for ($d = 0; $d < $count; $d++) {
        echo "<tr>";
        for ($i = 0; $i < 4; $i++) {
            echo "<td>" . $x[$d][$i] . "</td>";
        }
        echo "</tr>";
    }
    echo "<tbody id='result'></tbody></table>";
}
?>
</body>
</html>