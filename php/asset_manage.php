<?php
include("Header_css.php");
include("database.php");
?>

<form method='get' action='asset_manage.php'>
    <select name='location'>
        <option disabled selected>Select an option</option>
        <option>Chennai</option>
        <option>Banglore</option>
    </select>
    <input type='submit'></input>
</form>
<?php
if (isset($_GET["location"])) {
    echo "<table>";
    echo "<tr>
            <th>sno</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Current Location  </th>
            <th>Action</th>
        </tr>";
    if ($_GET['location'] == 'Chennai') {
        $variable = 'Chennai';
    } else if ($_GET['location'] == 'Banglore') {
        $variable = 'Banglore';
    }
    $query = "SELECT * FROM asset_detail where asset_current_location='$variable'";
    $q_run = $dataobj->query($query);
    $c_query = $dataobj->query("SELECT COUNT(*) FROM asset_detail where asset_current_location='$variable'");
    $count = $c_query->fetchAll()[0][0];
    settype($count, "integer");
    while ($x = $q_run->fetchAll()) {
        for ($d = 0; $d < $count; $d++) {
            echo "<tr>";
            for ($i = 0; $i < 4; $i++) {
                echo "<td>" . $x[$d][$i] . "</td>";
            }
            echo "<td>  <a href = 'delete_asset.php?id={$x[$d][0]}'><i class='fa-solid fa-box-archive'></i></a>/<a href='addasset.php?id={$x[$d][0]}' class='edit-button'>
    <i class='fas fa-pencil-alt'></i> 
</a></td>";
            echo "<tr>";
        }
        echo "</table>";
    }
}
?>
</body>
</html>

<?php
include("Footer_css.php");
?>