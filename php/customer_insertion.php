<?php
include("Header_css.php");
include("database.php");
?>
<button onclick="window.location.href = 'login.php';"> Back to Login </button>
<?php
$UserID = $_POST['UserID'];
$type = $_POST['type'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$stmt = $dataobj->prepare("INSERT INTO `customer data` (type,id,fname,lname,email,phone,password) VALUES (:type,:UserID,:fname,:lname,:email,:phone,:password);");
$stmt->bindParam(':UserID', $UserID);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':fname', $fname);
$stmt->bindParam(':lname', $lname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':password', $password);
$stmt->execute();
echo "Data Inserted Successfully";
?>
</body>
</html>

<?php
include("Footer_css.php");
?>