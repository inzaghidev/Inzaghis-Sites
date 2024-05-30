<?php
	$page_title = "Home";
	include('../layouts/header.php');
?>
    <link rel="stylesheet" href="../css/form.css" type="text/css" />
    <div class="container-top"></div>
        <form>
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
                </label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <div class="submitbtn">
                    <button type="submit" class="registerbtn">Sign in</button>
                    <button class="registerbtn"><a href="../includes/register-form.php">Register</a></button>
                </div>
            </div>
        </form>
    </div>
<?php
	include('../layouts/footer.php');
?>

<!-- https://www.javatpoint.com/html-registration-form -->
<!-- https://www.w3schools.com/howto/howto_css_register_form.asp -->