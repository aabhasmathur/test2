<?php
include("Header_css.php");
include("database.php");
?>
<?php
$storing_array = array();
$i = 0;
if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];
    $messege = "Data edited successfully!";
    $sql = "UPDATE asset_detail SET asset_name = :asset_name, asset_brand = :asset_brand,asset_current_location = :asset_current_location WHERE sno= $id;";
    $i = 1;
    foreach (($dataobj->query("SELECT * FROM asset_detail WHERE sno = $id")->fetchAll()[0]) as $storing_array[]) {
    }
} else {
    $id = '';
    for ($i = 0; $i < 10000; $i++) {
        $storing_array[] = '';
    }
    $messege = "Data inserted successfully!";
    $sql = "INSERT INTO  asset_detail (asset_name, asset_brand, asset_current_location) VALUES ( :asset_name,:asset_brand, :asset_current_location)";
}
if ($_SERVER["REQUEST_METHOD"] = $_POST) {


    $asset_name = $_POST["asset_name"];
    $asset_brand = $_POST["asset_brand"];
    $asset_current_location = $_POST["asset_current_location"];
    $stmt = $dataobj->prepare($sql);
    $stmt->bindParam(':asset_name', $asset_name);
    $stmt->bindParam(':asset_brand', $asset_brand);
    $stmt->bindParam(':asset_current_location', $asset_current_location);
    $stmt->execute();
    ?>
    <div style="background-color:green; align-item:center;text-align:center;width:200px;left:20px">
        <?= $messege; ?>
    </div>
    <?php

    if ($i == 1) {
        foreach (($dataobj->query("SELECT * FROM asset_detail WHERE sno = $id")->fetchAll()[0]) as $storing_array[]) {
        }
    }
}
?>
<form action="addasset.php?id=<?= $id ?>" method="POST">
    <label for="asset_name">Asset name:</label>
    <input type="text" id="asset_name" name="asset_name" value="<?= $storing_array[2] ?>" required><br><br>
    <label for="asset_current_location">Asset Location:</label>
    <select id="asset_current_location" name="asset_current_location" value="<?= $storing_array[7] ?>" required>
        <option disabled selected>Select an option</option>
        <?php
        $locations = ['Chennai', 'Banglore'];
        foreach ($locations as $selected) {
            $isSelected = ($storing_array[7] == $selected) ? 'selected' : '';
            echo "<option value='$selected' $isSelected>$selected</option>";
        }
        ?>
    </select><br><br>
    <label for="asset_brand">Asset Brand:</label>
    <input type="text" id="asset_brand" name="asset_brand" value="<?= $storing_array[4] ?>" required><br><br>
    <input type="submit" value="Submit">
</form>
</body>

</html>

<?php
include("Footer_css.php");
?>