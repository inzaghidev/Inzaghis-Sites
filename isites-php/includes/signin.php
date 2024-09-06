<?php
	$page_title = "Home";
    include('../layouts/header.php');
	include('../layouts/navbar.php');
?>
    <link rel="stylesheet" href="../css/form.css" type="text/css" />
    <div class="container-top"></div>
        <form id="authForm" method="post">
            <div class="container">
                <center>
                <h1>Sign in</h1>
                </center>
                <hr>
                <label>Username :</label>
                <input type="text" autocomplete="username" />
                <br />
                <div>
                    <b>Password</b>
                    <input type="password" placeholder="Enter Password" name="psw">
                </div>
                <div class="submitbtn">
                    <button type="submit" class="signinbtn">Sign in</button>
                    <button class="registerbtn" onclick="handleRegister()" href="../includes/register-form.php">Register</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function handleRegister() {
            document.getElementById('authForm').action = '../includes/register-form.php';
            document.getElementById('authForm').submit();
        }
    </script>
<?php
	include('../layouts/footer.php');
?>

<!-- https://www.javatpoint.com/html-registration-form -->
<!-- https://www.w3schools.com/howto/howto_css_register_form.asp -->