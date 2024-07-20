<?php
include("Header_css.php");
include("database.php");
?>

<?php
echo "<table>";
echo "<tr>
            <th>sno</th>
            <th>Location Name</th>
            <th>Action</th>
        </tr>";
$query = "SELECT * FROM location_detail ";
$q_run = $dataobj->query($query);
$c_query = $dataobj->query("SELECT COUNT(*) FROM location_detail");
$count = $c_query->fetchAll()[0][0];
settype($count, "integer");
while ($x = $q_run->fetchAll()) {
    for ($d = 0; $d < $count; $d++) {
        echo "<tr>";
        for ($i = 0; $i < 2; $i++) {
            echo "<td>" . $x[$d][$i] . "</td>";
        }
        echo "<td>  <a href = 'delete_location.php?id={$x[$d][0]}'><i class='fa-solid fa-box-archive'></i></a>/<a href='addlocationpage.php?id={$x[$d][0]}' class='edit-button'>
    <i class='fas fa-pencil-alt'></i> 
</a></td>";
        echo "<tr>";
    }
    echo "</table>";
}
?>
</body>
</html>

<?php
include("Footer_css.php");
?>