<?php
function createRegistrationForm()
{
    echo "<form id='registration-form' action='". htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>
    <div class='username-password-fields'>
        <div>
            <label for='username'>Your username</label>
            <input type='text' name='username'>
        </div>

        <div>
            <label for='password'>Create password</label>
            <input type='password' name='password'>
        </div>
    </div>

    <div>
        <label for='email'>Email</label>
        <input type='email' id='email-field' name='email'>
    </div>

    <div class='control-buttons login'>
        <button type='reset'>Clear</button>
        <button type='submit'>Create account</button>
    </div>

    <a class='login-link' href='signin.php'>Already have an account?</a>
</form>";
}

function checkLogin()
{
    session_start();
    return isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] == true;
}

function showLoginButton() {
    echo "<a class='main-link login-btn' href='signin.php'>Sign In</a>";
}

function getInitials() {
    $username = isset($_SESSION["username"]) ? strtoupper($_SESSION["username"]) : "";
    $usernameParts = explode(" ", $username);
    $firstLetter = mb_substr($usernameParts[0], 0, 1);

    return $firstLetter;
}

function showUserProfile() {
    $initials = getInitials();
    
    echo "
        <div class='user'>
            <div class='user-profile default'>
                <span>$initials</span>
                <div class='profile-dropdown-content'>
                    <div class='dropdown-links'>
                        <a href='user.php' class='secondary-link'>Edit Profile</a>
                        <a href='signout.php' class='secondary-link'>Sign Out</a>
                    </div>
                </div>
            </div>
        </div>
    ";
}
?>