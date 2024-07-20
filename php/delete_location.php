<?php
include("database.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dataobj->query("DELETE FROM location_detail WHERE sno = $id");
    header("Location: ./location_details.php");
}
?>