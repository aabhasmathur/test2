<?php
include("database.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dataobj->query("DELETE FROM asset_detail WHERE sno = $id");
    header('Location: ./asset_manage.php', true, 302);
}
?>