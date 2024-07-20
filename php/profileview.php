<?php
include("Header_css.php");
include("database.php");
?>

<?php
$id = $_GET['type'];
$dataobj->query("SELECT * FROM `customer data` WHERE id= $id;");
$storing_array = array();
foreach ($dataobj->query("select * from `customer data` where id = $id;")->fetchAll()[0] as $storing_array[]) {
}
?>
<h3>UserID : <span style="font-weight:10;">
        <?= $storing_array[4] ?>
    </span></h3>
<h3>User Type : <span style="font-weight:10;">
        <?= $storing_array[3] ?>
    </span></h3>
<h3>First Name : <span style="font-weight:10;">
        <?= $storing_array[6] ?>
    </span></h3>
<h3>Last Name : <span style="font-weight:10;">
        <?= $storing_array[8] ?>
    </span></h3>
<h3>Email : <span style="font-weight:10;">
        <?= $storing_array[10] ?>
    </span></h3>
<h3>Phone No. : <span style="font-weight:10;">
        <?= $storing_array[12] ?>
    </span></h3>
</body>
</html>

<?php
include("Footer_css.php");
?>