<?php
include("Header_css.php");
include("database.php");
?>

<?php
if ($_SERVER["REQUEST_METHOD"] = $_POST) {
    if ($_GET['id'] != '') {
        $id = $_GET['id'];
        $messege = "Data edited successfully!";
        $sql = "UPDATE location_detail SET location_name = :location_name WHERE sno= $id;";
    } else {
        $messege = "Data inserted successfully!";
        $sql = "INSERT INTO  location_detail (location_name) VALUES ( :location_name)";
    }
    $location_name = $_POST["location_name"];
    $stmt = $dataobj->prepare($sql);
    $stmt->bindParam(':location_name', $location_name);
    $stmt->execute();
    echo $messege;
}
?>
</body>
</html>

<?php
include("Footer_css.php");
?>