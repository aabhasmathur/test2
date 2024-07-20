<?php
include("Header_css.php");
include "database.php";
?>

<p>
    <?php
    echo "Total No. Of Assets :";
    $total_assets = $dataobj->query("SELECT COUNT(*) FROM asset_detail");
    print_r($total_assets->fetch()[0]); ?>
</p>
<?php
echo "<table>";
echo "
      <tbody id='result'></table>";
?>
<p>
</p>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        showdata();
    });
    function showdata() {
        $.ajax({
            url: './show-data-dashboard.php',
            method: 'post',
            success: function (result) {
                $("#result").html(result);
            }
        });
        console.log("hello");
    }
    function selectdata(cat) {
        $.ajax({
            url: './select-data.php',
            method: 'post',
            data: 'cat_name=' + cat,
            success: function (result) {
                $("#result").html(result);
            }
        });
    }
</script>

<?php
include("Footer_css.php");
?>