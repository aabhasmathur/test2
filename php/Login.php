<?php
if (isset($_GET['logout'])) {
    if ($_GET['logout'] == 1) {
        session_start();
        session_unset();
        session_destroy();
    }
}
?>
<?php
include("database.php");
if (isset($_POST["id"])) {
    $email = $_POST['id'];
    $password = $_POST['password'];
    $q_run = $dataobj->query("select * from `customer data` where email = '$email' and password='$password'");
    $sample_array = array();
    if ($q_run->rowCount() == 1) {
        foreach ($q_run->fetchAll()[0] as $sample_array[]) {
        }
        session_start();
        $_SESSION['account_type'] = $sample_array[2];
        $_SESSION['account_profile'] = $sample_array[4];
        header("location: ./dashboard.php");
    } else {
        header("location: ./error.php");
    }
}
?>
<?php
include("Header_css.php");
?>
<style>
    article {
        background-image: url("download.png");
        background-size: 550px;
    }
</style>
<body>
    <div class="container">
        <div class="tab-group">
            <div class="tab" onclick="openTab(event, 'loginTab')">Login</div>
            <div class="tab" onclick="openTab(event, 'signupTab')">Sign Up</div>
        </div>
        <div id="loginTab" class="content">
            <h2>Login</h2>
            <form method="post" action="Login.php">
                <div class="form-group">
                    <label for="loginUsername">Email-ID:</label>
                    <input type="text" id="loginUsername" name="id" required>
                </div>
                <div class="form-group">
                    <label for="loginUsername">Password:</label>
                    <input type="password" id="loginUsername" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
        <div id="signupTab" class="content" style="display: none;">
            <h2>Sign Up</h2>
            <form method="post" action="customer_insertion.php">
                <div class="form-group">
                    <label for="signupUsername">UserID:</label>
                    <input type="text" id="signupUsername" name="UserID" required>
                </div>
                <div class="form-group">
                    <label for="signupUsername">First Name:</label>
                    <input type="text" id="signupUsername" name="fname">
                </div>
                <div class="form-group">
                    <label for="signupUsername">Last Name:</label>
                    <input type="text" id="signupUsername" name="lname">
                </div>
                <div class="form-group">
                    <label for="signupUsername">Email:</label>
                    <input type="text" id="signupUsername" name="email">
                </div>
                <div class="form-group">
                    <label for="signupUsername">Password:</label>
                    <input type="password" id="signupUsername" name="password">
                </div>
                <div class="form-group">
                    <label for="signupUsername">Phone:</label>
                    <input type="text" id="signupUsername" name="phone">
                </div>
                <div class="form-group">
                    <label for="signupEmail">User Type:</label>
                    <select name="type">
                        <option type="text" id="signupEmail" name="signupEmail" disabled selected>select one
                        <option type="text" id="signupEmail" name="signupEmail" required>Location Admin
                        <option type="text" id="signupEmail" name="signupEmail" required>Asset Admin
                        <option type="text" id="signupEmail" name="signupEmail" required>Site User
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function openTab(event, tabName) {
            var i, content, tab;
            content = document.getElementsByClassName("content");
            for (i = 0; i < content.length; i++) {
                content[i].style.display = "none";
            }
            tab = document.getElementsByClassName("tab");
            for (i = 0; i < tab.length; i++) {
                tab[i].className = tab[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            event.currentTarget.className += " active";
        }
    </script>
</body>
</html>

<?php
include("Footer_css.php");
?>