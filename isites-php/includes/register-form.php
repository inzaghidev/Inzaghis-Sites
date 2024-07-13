<?php
	$page_title = "Home";
	include('../layouts/header.php');
    include('../components/navbar/navbar.php');
?>
    <link rel="stylesheet" href="../css/form.css" type="text/css" />
    <div class="container-top"></div>
        <form>
        <div class="container">
            <center>
            <h1>Registeration Form</h1>
            </center>
            <hr>
            <label>Firstname : </label>
            <input type="text" name="firstname" placeholder="Firstname" size="15" required />
            <label>Lastname : </label>
            <input type="text" name="lastname" placeholder="Lastname" size="15" required />
            <label>Username :</label>
            <input type="text" autocomplete="username" />
            <br />
            <div>
            <label>Gender : </label>
            <br/>
            <br/>
            <label class="radiocontainer">Male
                <input type="radio" value="Male" name="gender" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="radiocontainer">Female
                <input type="radio" value="Male" name="gender">
                <span class="checkmark"></span>
            </label>
            <label class="radiocontainer">Other
                <input type="radio" value="Male" name="gender">
                <span class="checkmark"></span>
            </label>
            <br/>
            <br/>
            </div>
            <label for="isian-2">Brith Date :</label>
            <input name="birth-date" type="date" />
            <br />
            <br />
            <label> Phone : </label>
            <input type="text" name="country code" placeholder="Country Code" value="+62" size="3" />
            <input type="text" name="phone" placeholder="phone no." size="10" required>
            <br />
            <label>Current Address : </label>
            <textarea cols="80" rows="5" placeholder="Current Address" value="address" required></textarea>
            <br />
            <br />
            <label for="email">
            <b>Email</b>
            </label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <label for="psw">
            <b>Password</b>
            </label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <label for="psw-repeat">
            <b>Re-type Password</b>
            </label>
            <input type="password" placeholder="Retype Password" name="psw-repeat" required>
            <div class="submitbtn">
            <button type="submit" class="registerbtn">Register</button>
            <button type="submit" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>
<?php
	include('../components/footsite/footsite.php');
	include('../layouts/footer.php');
?>

<!-- https://www.javatpoint.com/html-registration-form -->
<!-- https://www.w3schools.com/howto/howto_css_register_form.asp -->