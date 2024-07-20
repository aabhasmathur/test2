<?php
include("Header_css.php");
include("database.php");
?>

<?php
$storing_array = array();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    foreach (($dataobj->query("SELECT * FROM location_detail WHERE sno = $id")->fetchAll()[0]) as $storing_array[]) {
    }
} else {
    $id = '';
    for ($i = 0; $i < 10000; $i++) {
        $storing_array[] = '';
    }
}
?>
<form action="addlocation.php?id=<?= $id ?>" method="POST">
    <label for="location_name">Location name:</label>
    <input type="text" id="location_name" name="location_name" value="<?= $storing_array[2] ?>" required><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php
include("Footer_css.php");
?>