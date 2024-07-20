<?php
include("Header_css.php");
?>

<?php
echo "<table>";
echo "<tbody id='result'></table>";
?>

</body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        showdata();
    });
    function showdata() {
        $.ajax({
            url: './show-data.php',
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