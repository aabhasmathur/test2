<?php
include("Header_css.php");
include("database.php");
?>

<?php
if ($_SERVER["REQUEST_METHOD"] = $_POST) {
    if ($_GET["id"] != '') {
        $id = $_GET['id'];
        $messege = "Data edited successfully!";
        $sql = "UPDATE asset_detail SET asset_name = :asset_name, asset_brand = :asset_brand,asset_current_location = :asset_current_location WHERE sno= $id;";
    } else {
        $messege = "Data inserted successfully!";
        $sql = "INSERT INTO  asset_detail (asset_name, asset_brand, asset_current_location) VALUES ( :asset_name,:asset_brand, :asset_current_location)";
    }
    $asset_name = $_POST["asset_name"];
    $asset_brand = $_POST["asset_brand"];
    $asset_current_location = $_POST["asset_current_location"];
    $stmt = $dataobj->prepare($sql);
    $stmt->bindParam(':asset_name', $asset_name);
    $stmt->bindParam(':asset_brand', $asset_brand);
    $stmt->bindParam(':asset_current_location', $asset_current_location);
    $stmt->execute();
   ?> <div style="background-color:green; align-item:center;text-align:center;width:200px;left:20px" >  <?=$messege;?></div><?php
}
?>
</body>
</html>

<?php
include("Footer_css.php");
?>